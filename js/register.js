$('.btn-register').click(function (e) {
    e.preventDefault();
    $(`input`).removeClass('error-input');

    let lastName = $('input[name="lastName"]').val(),
        firstName = $('input[name="firstName"]').val(),
        middleName = $('input[name="middleName"]').val(),
        email = $('input[name="email"]').val(),
        birthDate = $('input[name="birthDate"]').val(),
        password = $('input[name="password"]').val(),
        password_confirm = $('input[name="password_confirm"]').val();

        if($('input[name="checkbox_agreement"]').is(":checked")) {
            checkbox_agreement = $('input[name="checkbox_agreement"]').val();
        } else {
            checkbox_agreement = "disagree";
        }
        
    let formData = new FormData();
        formData.append('lastName', lastName);
        formData.append('firstName', firstName);
        formData.append('middleName', middleName);
        formData.append('email', email);
        formData.append('birthDate', birthDate);
        formData.append('password', password);
        formData.append('password_confirm', password_confirm);
        
    $.ajax({
        url: 'includes/registercheck.php',
        type: 'POST',
        dataType: 'json',
        data: {
            lastName: lastName,
            firstName: firstName,
            middleName: middleName,
            email: email,
            birthDate: birthDate,
            password: password,
            password_confirm: password_confirm,
            checkbox_agreement: checkbox_agreement
        },
        success (data) {
            if (data.status) {
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