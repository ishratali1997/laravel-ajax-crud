$(document).ready(function () {
    $('.editbtn').click(function () {
        $('#studenteditmodal').modal('show');
        $tr = $(this).closest('tr');
     var data=  $tr.children('td').map(function () {
            return $(this).text();
        }).get();

        $('#id').val(data[1]);
        $('#fname').val(data[2]);
        $('#lname').val(data[3]);
        $('#course').val(data[4]);
        $('#section').val(data[5]);
    });

    $('#studenteditmodal').on('submit', function (e) {
        e.preventDefault();
        var id = $('#id').val();

        $.ajax({
            type: 'put',
            url: '/student/' + id,
            data: $('#editform').serialize(),
            success: function (data) {
                $('#success').show();
                $('#studenteditmodal').modal('hide');
                $("#success").html(data.responseJSON);
                $("#success").delay(4000).fadeOut(400);
            },
            error: function (error) {
                $('#error').show();
                $('#studenteditmodal').modal('hide');
                var errors = error.responseJSON;
                $("#error").append('<p>' + errors.message + '</p>');
                $("#error").delay(4000).fadeOut(400);
            }
        });
    })
});