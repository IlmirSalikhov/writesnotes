$('.btn-recovery_3').click(function (e) {
    e.preventDefault();
    $(`input`).removeClass('error-input');

    let password = $('input[name="password"]').val(),
        password_confirm = $('input[name="password_confirm"]').val();
        
    $.ajax({
        url: '../includes/newpassword.php',
        type: 'POST',
        dataType: 'json',
        data: {
            password: password,
            password_confirm: password_confirm
        },
        success (data) {
            if (data.status) {
                // document.location.href = '/login';
                // $('.msg-s').removeClass('none').text(data.message);
                $('.msg-s').removeClass('none').text(data.message);
                $('.msg-e').addClass('none').text(data.message);
                setTimeout(function(){
                    window.location.href = '/login';
                  }, 2 * 1000);
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

