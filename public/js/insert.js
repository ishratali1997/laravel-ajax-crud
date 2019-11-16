$(document).ready(function () {
    $('#dlg').click(function () {
        $('#studentaddmodal').modal('show');
    });
    $('#error').hide();
    $('#success').hide();
    $('#addform').on('submit', function (e) {
        e.preventDefault();
        $.ajax({
            type: 'post',
            url: '/student',
            data: $('#addform').serialize(),
            success: function (data) {
                $('#success').show();
                $('#studentaddmodal').modal('hide');
                $("#success").html(data.responseJSON);
                $("#success").delay(4000).fadeOut(400);
            },
            error: function (error) {
                // console.log(error);
                $('#error').show();
                $('#studentaddmodal').modal('hide');
                var errors = error.responseJSON;
                console.log(errors);
                $("#error").append('<p>' + errors.message + '</p>');
                $("#error").delay(4000).fadeOut(400);

            }
        });
    });
});