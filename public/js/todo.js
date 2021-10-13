jQuery(document).ready(function($){

    //----- Open model CREATE -----//
        jQuery('#btn-add').click(function () {
        jQuery('#btn-save').val("add");
        jQuery('#myForm').trigger("reset");
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
            name: jQuery('#name').val(),
            dob: jQuery('#dob').val(),
            address: jQuery('#address').val(),
            postcode: jQuery('#postcode').val(),
            state_id: jQuery('#state_id').val(),
        };
        var state = jQuery('#btn-save').val();
        var type = "POST";
        var todo_id = jQuery('#todo_id').val();
        var ajaxurl = 'todo';
        $.ajax({
            type: type,
            url: ajaxurl,
            data: formData,
            dataType: 'json',
            success: function (data) {
                var todo = '<tr id="todo' + data.id + '"><td>' + data.id + '</td><td>' + data.name + '</td><td>' + data.dob + '</td><td>' + data.address + '</td><td>' + data.postcode + '</td><td>' + data.state_id + '</td>';
                if (state == "add") {
                    jQuery('#todo-list').append(todo);
                } else {
                    jQuery("#todo" + todo_id).replaceWith(todo);
                }
                jQuery('#myForm').trigger("reset");
                jQuery('#formModal').modal('hide')
            },
            error: function (data) {
                console.log(data);
            }
        });

           
      });

});