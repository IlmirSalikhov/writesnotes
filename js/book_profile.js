$(document).ready(function(){
    $('.book-box').click(function() {
        let id_book = ($(this).attr('id'));
        
        $.ajax({
            url: '../includes/book_profile.php',
            type: 'POST',
            data: {
                id_book: id_book
            },
            success: function(data) {
                document.location.href = "/book_profile";
            },
        });
    });
});