$('#btn-change-avatar').change( function(e) {

    let avatar = e.target.files[0];

    let formData = new FormData();
        formData.append('avatar', avatar);

    $.ajax({
        url: '../includes/changeavatar.php',
        type: 'POST',
        dataType: 'json',
        processData: false,
        contentType: false,
        cache: false,
        data: formData,
        success (data) {
            if (data.status) {
                $('.msg-avatar-s').removeClass('none').text(data.message);
                $('.msg-avatar-e').addClass('none').text(data.message);
                setTimeout(function(){
                    $('.msg-avatar-s').addClass('none').text(data.message);
                  }, 5 * 1000);
            }  else {
                $('.msg-avatar-e').removeClass('none').text(data.message);
                $('.msg-avatar-s').addClass('none').text(data.message);
                setTimeout(function(){
                    $('.msg-avatar-e').addClass('none').text(data.message);
                  }, 5 * 1000);
            }
        }
    });
})