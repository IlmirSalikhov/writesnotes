$('.btn-change-info').click(function (e) {
    e.preventDefault();
    $(`input`).removeClass('error-input');

    let lastName = $('input[name="lastName"]').val(),
        firstName = $('input[name="firstName"]').val(),
        middleName = $('input[name="middleName"]').val(),
        birthDate = $('input[name="birthDate"]').val();
        
    $.ajax({
        url: '../includes/changeprofileinfo.php',
        type: 'POST',
        dataType: 'json',
        data: {
            lastName: lastName,
            firstName: firstName,
            middleName: middleName,
            birthDate: birthDate,
        },
        success (data) {
            if (data.status) {
                $('#change-info-msg-e').addClass('none').text(data.message);
                $('#change-info-msg-s').removeClass('none').text(data.message);
                setTimeout(function(){
                    $('#change-info-msg-s').addClass('none').text(data.message);
                  }, 5 * 1000);
            }  else {
                if (data.type === 1) {
                    data.fields.forEach(function (field) {
                        $(`input[name = "${field}"]`).addClass('error-input');
                    });
                }
                $('#change-info-msg-s').addClass('none').text(data.message);
                $('#change-info-msg-e').removeClass('none').text(data.message);
                setTimeout(function(){
                    $('#change-info-msg-e').addClass('none').text(data.message);
                    $('.profile-input').removeClass('error-input');
                  }, 5 * 1000);
            }
        }
    });
});