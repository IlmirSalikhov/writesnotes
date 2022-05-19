$(".btn-search").click(function(e) {
    e.preventDefault();
    request = $('input[name="search-input"]').val(),

    $.ajax({
        url: '../includes/search.php',
        type: 'POST',
        dataType: 'json',
        data: {
           request: request,
        },
        success (result) {
            document.location.href = '/search';
        }
    });
});
