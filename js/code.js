$('.btn-recovery_2').click(function (e) {
    e.preventDefault();
    $(`input`).removeClass('error-input');

    let code = $('input[name="code"]').val();


    $.ajax({
        url: '../includes/codecheck.php',
        type: 'POST',
        dataType: 'json',
        data: {
            code: code,
        },
        success (data) {
            if (data.status) {
                document.location.href = 'recovery_3';
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
