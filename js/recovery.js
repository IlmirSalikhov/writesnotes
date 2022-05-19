$('.btn-recovery_1').click(function (e) {
    e.preventDefault();
    $(`input`).removeClass('error-input');

    let email = $('input[name="email"]').val();


    $.ajax({
        url: '../includes/recoverycheck.php',
        type: 'POST',
        dataType: 'json',
        data: {
            email: email,
        },
        success (data) {
            if (data.status) {
                document.location.href = '/recovery_2';
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