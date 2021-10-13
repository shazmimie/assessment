jQuery(document).ready(function($){

    //----- Open model CREATE -----//
        jQuery('#btn-add').click(function () {
        jQuery('#btn-save').val("add");
        jQuery('#postcodeForm').trigger("reset");
        jQuery('#formModal').modal('show');
    });

    // CREATE
   $("#btn-save").click(function (e) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
            }
        });
        e.preventDefault();
        var formData = {
           
            postcode: jQuery('#postcode').val(),
            state_id: jQuery('#state_id').val(),
        };
        var state = jQuery('#btn-save').val();
        var type = "POST";
        var pcode_id = jQuery('#pcode_id').val();
        var ajaxurl = 'pcode';
        $.ajax({
            type: type,
            url: ajaxurl,
            data: formData,
            dataType: 'json',
            success: function (data) {
                var pcode = '<tr id="pcode' + data.id + '"><td>' + data.id + '</td><td>' + data.postcode + '</td><td>' + data.state_id + '</td>';
                if (state == "add") {
                    jQuery('#pcodes-list').append(pcode);
                } else {
                    jQuery("#pcode" + pcode_id).replaceWith(pcode);
                }
                jQuery('#postcodeForm').trigger("reset");
                jQuery('#formModal').modal('hide')
            },
            error: function (data) {
                console.log(data);
            }
        });

  
         
    });
  
});