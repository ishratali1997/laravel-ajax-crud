$(document).ready(function () {
    $('.deletebtn').click(function () {
        $('#deletedialog').modal('show');
        var tr = $(this).closest('tr');
        var data = tr.children('td').map(function () {
            return $(this).text();
        }).get();
        var id = data[1];
        $('#deleleid').val(id);
        console.log('id ' + id);
    });

    $('#deleteform').on('submit', function (e) {
        var id = $('#deleleid').val();
        e.preventDefault();
        $.ajax({
            type: 'delete',
            url: 'student/' + id,
            data: $('#deleteform').serialize(),
            success: function (data) {
                $('#success').show();
                $('#deletedialog').modal('hide');
                $("#success").html(data.responseJSON);
                $("#success").delay(4000).fadeOut(400);
            },
            error: function (error) {
                $('#error').show();
                $('#deletedialog').modal('hide');
                var errors = error.responseJSON;
                $("#error").append('<p>' + errors.message + '</p>');
                $("#error").delay(4000).fadeOut(400);
            }
        });
    });
});

