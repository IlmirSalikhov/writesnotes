$('.btn-publish').click(function (e) {
    e.preventDefault();
    $(`input`).removeClass('error-input');
        genreBookArray = [];
        $('input:checkbox[name="genreBook"]:checked').map(function() {
            genreBookArray.push($(this).val());
        });
    let nameBook = $('input[name="nameBook"]').val(),
        genusBook = $('input:checkbox[name="genusBook"]:checked').val();
        typeBook = $('input:checkbox[name="typeBook"]:checked').val();
        genreBook = genreBookArray.join(',')
        ageRestriction = $('input:checkbox[name="ageRestriction"]:checked').val();
        textBook = $('textarea[name="textBook"]').val();
        
    $.ajax({
        url: '../includes/newbook.php',
        type: 'POST',
        dataType: 'json',
        data: {
            nameBook: nameBook,
            genusBook: genusBook,
            typeBook: typeBook,
            genreBook: genreBook,
            ageRestriction: ageRestriction,
            textBook: textBook,
        },
        success (data) {
            if (data.status) {
                $('.msg-e').addClass('none').text(data.message);
                $('.msg-s').removeClass('none').text(data.message);
            } else {
                if (data.type === 1) {
                    data.fields.forEach(function (field) {
                        $(`input[name = "${field}"]`).addClass('error-input');
                        $(`textarea[name = "${field}"]`).addClass('error-input');
                        $(`select[name = "${field}"]`).addClass('error-input');
                    });
                }
                $('.msg-s').addClass('none').text(data.message);
                $('.msg-e').removeClass('none').text(data.message);
            }
        }
    });
});
