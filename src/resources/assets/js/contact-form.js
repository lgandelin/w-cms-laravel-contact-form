$(document).ready(function() {

    $('.contact-form input[type="submit"]').click(function(e) {
        e.preventDefault();
        var form = $(this).closest('form');
        var url = form.attr('action');

        $.ajax({
            type: 'POST',
            url: url,
            data: {
                name: form.find('input[name="name"]').val(),
                mail: form.find('input[name="mail"]').val(),
                message: form.find('textarea[name="message"]').val(),
                '_token': $('input[name="_token"]').val()
            },
            success: function(data) {
                if (data.success) {
                    alert(data.message);
                } else {
                    alert(data.message);
                }
            }
        });
    });
});