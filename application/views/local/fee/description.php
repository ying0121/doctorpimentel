<div class="row my-3 p-10 bg-white border rounded">
    <!-- Fee Header (EN) -->
    <div class="col-md-6">
        <div class="form-group">
            <h6 class="mb-3">Header (EN)</h6>
            <textarea class="form-control" id="header_en" type="text" rows="5"></textarea>
        </div>
    </div>
    <!-- Fee Header (ES) -->
    <div class="col-md-6">
        <div class="form-group">
            <h6 class="mb-3">Header (ES)</h6>
            <textarea class="form-control" id="header_es" type="text" rows="5"></textarea>
        </div>
    </div>
    <!-- Fee Description (EN) -->
    <div class="col-md-6">
        <div class="form-group">
            <h6 class="mb-3">Description (EN)</h6>
            <textarea class="form-control" id="desc_en" type="text" rows="5"></textarea>
        </div>
    </div>
    <!-- Fee Description (ES) -->
    <div class="col-md-6">
        <div class="form-group">
            <h6 class="mb-3">Description (ES)</h6>
            <textarea class="form-control" id="desc_es" type="text" rows="5"></textarea>
        </div>
    </div>
    <!-- Fee Footer (EN) -->
    <div class="col-md-6">
        <div class="form-group">
            <h6 class="mb-3">Footer (EN)</h6>
            <textarea class="form-control" id="footer_en" type="text" rows="5"></textarea>
        </div>
    </div>
    <!-- Fee Footer (ES) -->
    <div class="col-md-6">
        <div class="form-group">
            <h6 class="mb-3">Footer (ES)</h6>
            <textarea class="form-control" id="footer_es" type="text" rows="5"></textarea>
        </div>
    </div>
    <!-- Fee Note (EN) -->
    <div class="col-md-6">
        <div class="form-group">
            <h6 class="mb-3">Note (EN)</h6>
            <textarea class="form-control" id="note_en" type="text" rows="5"></textarea>
        </div>
    </div>
    <!-- Fee Note (ES) -->
    <div class="col-md-6">
        <div class="form-group">
            <h6 class="mb-3">Note (ES)</h6>
            <textarea class="form-control" id="note_es" type="text" rows="5"></textarea>
        </div>
    </div>
    <div class="col-12 text-right">
        <button class="btn btn-light-primary" id="meta_update_btn">Update</button>
    </div>
</div>

<script>
    $(document).ready(async function() {
        // fee description
        $.ajax({
            url: '<?php echo base_url() ?>' + 'local/Fees/getMeta',
            method: "POST",
            dataType: "json",
            success: function(res) {
                const data = res.data
                console.log(data)
                $("#header_en").val(data.t_fee_header.en)
                $("#header_es").val(data.t_fee_header.es)
                $("#desc_en").val(data.t_fee_desc.en)
                $("#desc_es").val(data.t_fee_desc.es)
                $("#footer_en").val(data.t_fee_footer.en)
                $("#footer_es").val(data.t_fee_footer.es)
                $("#note_en").val(data.t_fee_note.en)
                $("#note_es").val(data.t_fee_note.es)
            }
        })

        $("#meta_update_btn").click(function() {
            $.ajax({
                url: '<?php echo base_url() ?>' + 'local/Fees/updateMeta',
                method: "POST",
                data: {
                    header_en: $("#header_en").val(),
                    header_es: $("#header_es").val(),
                    desc_en: $("#desc_en").val(),
                    desc_es: $("#desc_es").val(),
                    footer_en: $("#footer_en").val(),
                    footer_es: $("#footer_es").val(),
                    note_en: $("#note_en").val(),
                    note_es: $("#note_es").val()
                },
                dataType: "json",
                success: function(res) {
                    if (res.status == "success") {
                        toastr.success("Saved Successfully!")
                    }
                }
            })
        })
    })
</script>