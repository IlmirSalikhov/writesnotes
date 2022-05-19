$('.btn-change-password').click(function (e) {
    e.preventDefault();
    $(`input`).removeClass('error-input');

    let password = $('input[name="password"]').val(),
        new_password = $('input[name="new_password"]').val(),
        new_password_confirm = $('input[name="new_password_confirm"]').val();
        
    $.ajax({
        url: '../includes/changepassword.php',
        type: 'POST',
        dataType: 'json',
        data: {
            password: password,
            new_password: new_password,
            new_password_confirm: new_password_confirm
        },
        success (data) {
            if (data.status) {
                document.location.href = '/profile';
                $('#change-password-msg-e').addClass('none').text(data.message);
                $('#change-password-msg-s').removeClass('none').text(data.message);
            }  else {
                if (data.type === 1) {
                    data.fields.forEach(function (field) {
                        $(`input[name = "${field}"]`).addClass('error-input');
                    });
                }
                $('#change-password-msg-s').addClass('none').text(data.message);
                $('#change-password-msg-e').removeClass('none').text(data.message);
            }
        }
    });
});