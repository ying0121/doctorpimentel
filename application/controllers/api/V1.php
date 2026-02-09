<?php

defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set('America/New_York');

use Firebase\JWT\JWT;
use Firebase\JWT\Key;

class V1 extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('cookie');
        $this->load->model('Manager_model');

        $this->output->set_content_type('application/json');
    }

    private function dobToYYYYMMDD($dob)
    {
        $ts = strtotime($dob);
        if (!$ts) {
            return null;
        }
        return date('Y-m-d', $ts);
    }

    private function jwt_authenticate()
    {
        $CI =& get_instance();
        $CI->output->set_content_type('application/json');

        $headers = $CI->input->request_headers();

        if (!isset($headers['Authorization'])) {
            $CI->output
                ->set_status_header(401)
                ->set_output(json_encode(['status' => 'error', 'message' => 'Unauthorized']));
            exit;
        }

        $authHeader = $headers['Authorization'];

        if (strpos($authHeader, 'Bearer ') !== 0) {
            $CI->output
                ->set_status_header(401)
                ->set_output(json_encode(['status' => 'error', 'message' => 'Unauthorized']));
            exit;
        }

        $token = trim(substr($authHeader, 7));

        if (!$token) {
            $CI->output
                ->set_status_header(401)
                ->set_output(json_encode(['status' => 'error', 'message' => 'Unauthorized']));
            exit;
        }

        try {
            $decoded = JWT::decode($token, new Key(JWT_SECRET, 'HS256'));
            return $decoded; // equivalent to req.user
        } catch (Exception $e) {
            $CI->output
                ->set_status_header(401)
                ->set_output(json_encode(['status' => 'error', 'message' => 'Unauthorized']));
            exit;
        }
    }

    public function index()
    {
        echo "Hello World";
    }

    public function auth()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $result = $this->Manager_model->auth($email, $password);

        if ($result) {
            $payload = [
                'id' => $result['id'],
                'email' => $result['email'],
                'iss' => $result['fname'] . ' ' . $result['lname'],
                'iat' => time(),
                'exp' => time() + 1800,
            ];
            $jwt = JWT::encode($payload, JWT_SECRET, 'HS256');
            echo json_encode(['token' => $jwt]);
        } else {
            echo json_encode(['error' => 'Invalid credentials']);
        }
    }

    public function patient()
    {
        try {
            // Authorization
            $user = $this->jwt_authenticate();
            // Get query params
            $patient_id = $this->input->get('patient_id');
            $fname      = $this->input->get('fname');
            $lname      = $this->input->get('lname');
            $email      = $this->input->get('email');
            $phone      = $this->input->get('phone');
            $dob        = $this->input->get('dob');

            // Select attributes
            $this->db->select([
                'patient_id', 'fname', 'mname', 'lname', 'email',
                'phone', 'mobile', 'address', 'city', 'state',
                'zip', 'gender', 'dob', 'language', 'ethnicity', 'race'
            ]);

            $this->db->from('patient_list');

            // Filters
            if ($patient_id) {
                $this->db->where('patient_id', $patient_id);
            }

            if ($fname) {
                $this->db->like('fname', $fname);
            }

            if ($lname) {
                $this->db->like('lname', $lname);
            }

            if ($email) {
                $this->db->like('email', $email);
            }

            // Phone digits-only search
            if ($phone) {
                $phoneDigits = preg_replace('/\D+/', '', $phone);
                if ($phoneDigits) {
                    $this->db->group_start()
                        ->where("REGEXP_REPLACE(phone, '[^0-9]', '') LIKE '%{$phoneDigits}%'", null, false)
                        ->or_where("REGEXP_REPLACE(mobile, '[^0-9]', '') LIKE '%{$phoneDigits}%'", null, false)
                    ->group_end();
                }
            }

            // DOB filter
            if ($dob) {
                $dobNormalized = $this->dobToYYYYMMDD($dob);
                if ($dobNormalized) {
                    $this->db->where(
                        "DATE_FORMAT(dob, '%Y-%m-%d') = '{$dobNormalized}'",
                        null,
                        false
                    );
                }
            }

            $query = $this->db->get();
            $patients = $query->result_array();

            return $this->output
                ->set_status_header(200)
                ->set_output(json_encode([
                    'status' => 'success',
                    'data'   => $patients
                ]));

        } catch (Throwable $e) {
            return $this->output
                ->set_status_header(500)
                ->set_output(json_encode([
                    'status'  => 'error',
                    'message' => $e->getMessage()
                ]));
        }
    }
}
