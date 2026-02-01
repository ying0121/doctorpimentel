<?php
class Fee_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    // clinic fee
    function getClinicFee($filter)
    {
        $this->db->select('clinic_services.*, service_category.name AS category_name');
        $this->db->from('clinic_services');
        $this->db->join("service_category", "clinic_services.category = service_category.id");

        if ($filter['category'] > 0) {
            $this->db->where('clinic_services.category', $filter['category']);
        }
        if ($filter['language'] > 0) {
            $this->db->where('clinic_services.language', $filter['language']);
        }
        $this->db->order_by("order", "asc");

        return $this->db->get()->result_array();
    }

    function getClinicFeeOnlyHomePage($lang)
    {
        return $this->db->select("*")->from("clinic_services")->where("home_page", 1)->where("language", $lang)->get()->result_array();
    }

    function getPublicClinicFees($lang)
    {
        $langId = $lang == "en" ? 17 : 25;
        $this->db->select('clinic_services.*, service_category.name AS category_name');
        $this->db->from('clinic_services');
        $this->db->join("service_category", "clinic_services.category = service_category.id");
        $this->db->where('clinic_services.show_in_fee', 1);
        $this->db->where('clinic_services.status', 1);
        $this->db->where('clinic_services.language', $langId);
        $this->db->order_by("clinic_services.order", "asc");
        return $this->db->get()->result_array();
    }

    function addClinicFee($data)
    {
        $record = array(
            'key' => $data['key'],
            'order' => $data['order'],
            'language' => $data['language'],
            'category' => $data['category'],
            'title' => $data['title'],
            'short_desc' => $data['short_desc'],
            'long_desc' => $data['long_desc'],
            'status' => $data['status'],
            'request_service' => $data['request_service'],
            'online_payment' => $data['online_payment'],
            'home_page' => $data['home_page'],
            'cost' => $data['cost'],
            'show_in_fee' => $data['show_in_fee'],
            'fee' => $data['fee']
        );
        $result = $this->db->insert('clinic_services', $record);
        if ($result) return 1;
        return 0;
    }

    function chosenClinicFee($id)
    {
        $this->db->select('*');
        $this->db->from('clinic_services');
        $this->db->where('id', $id);
        return $this->db->get()->row_array();
    }

    function chosenClinicFeeByKey($key, $lang)
    {
        $this->db->select('*');
        $this->db->from('clinic_services');
        $this->db->where('key', $key);
        $this->db->where("language", $lang == "en" ? 17 : 25);
        return $this->db->get()->row_array();
    }

    function updateClinicFee($data)
    {
        $record = array(
            'key' => $data["key"],
            'order' => $data["order"],
            'language' => $data['language'],
            'category' => $data['category'],
            'title' => $data['title'],
            'short_desc' => $data['short_desc'],
            'long_desc' => $data['long_desc'],
            'status' => $data['status'],
            'request_service' => $data['request_service'],
            'online_payment' => $data['online_payment'],
            'home_page' => $data['home_page'],
            'cost' => $data['cost'],
            'show_in_fee' => $data['show_in_fee'],
            'fee' => $data['fee']
        );
        $result = $this->db->where('id', $data['id'])->update('clinic_services', $record);
        if ($result) return 1;
        return 0;
    }

    function deleteClinicFee($id)
    {
        return $this->db->where('id', $id)->delete('clinic_services');
    }

    function getMeta()
    {
        $this->db->select('keyvalue, en, es');
        $this->db->from('contents');
        $this->db->where('keyvalue LIKE', 't_fee_%');
        $meta_data = $this->db->get()->result_array();
        $meta = array();
        foreach ($meta_data as $row) {
            $meta[$row['keyvalue']]['en'] = $row['en'];
            $meta[$row['keyvalue']]['es'] = $row['es'];
        }
        return $meta;
    }

    function updateMeta($data)
    {
        // Header
        $record = array(
            'en' => $data['header_en'],
            'es' => $data['header_es']
        );
        $this->db->where('keyvalue', 't_fee_header')->update('contents', $record);

        // Description
        $record = array(
            'en' => $data['desc_en'],
            'es' => $data['desc_es']
        );
        $this->db->where('keyvalue', 't_fee_desc')->update('contents', $record);

        // Footer
        $record = array(
            'en' => $data['footer_en'],
            'es' => $data['footer_es']
        );
        $this->db->where('keyvalue', 't_fee_footer')->update('contents', $record);

        // Note
        $record = array(
            'en' => $data['note_en'],
            'es' => $data['note_es']
        );
        $this->db->where('keyvalue', 't_fee_note')->update('contents', $record);

        return 1;
    }
}
