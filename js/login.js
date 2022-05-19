$('.btn-login').click(function (e) {
    e.preventDefault();
    $(`input`).removeClass('error-input');

    let email = $('input[name="email"]').val(),
        password = $('input[name="password"]').val();

        
    $.ajax({
        url: '../includes/logincheck.php',
        type: 'POST',
        dataType: 'json',
        data: {
            email: email,
            password: password
        },
        success (data) {
            if (data.status) {
                document.location.href = '/profile';
            }  else {
                if (data.type === 1) {
                    data.fields.forEach(function (field) {
                        $(`input[name = "${field}"]`).addClass('error-input');
                    });
                }
                $('.msg-e').removeClass('none').text(data.message);
            }
        }
    });
});
