$(document).ready( function () {
    $.ajax({
        url: '../includes/checkboxscore.php',
        type: 'POST',
        dataType: 'json',
        data: {
        },
        success (checkbox) {
            if (checkbox.type === 1) {
                $('.like-checkbox').prop('checked', true);
            } else if (checkbox.type === -1) {
                 $('.dislike-checkbox').prop('checked', true);
            } else if (checkbox.type === 0) {
                 $('.like-checkbox').prop('checked', false);
                 $('.dislike-checkbox').prop('checked', false);
            }
        }
    });
    if ($('.like-checkbox').is(':checked')) {
        $('.like-label').addClass('.like-label-active');
    }
});


    $("#like").click(function() {
        if ($('.like-checkbox').is(':checked')) {
            like = 'true';
        } else {
            like = undefined;
        }
        $('.dislike-checkbox').prop('checked', false);
    
        $.ajax({
            url: '../includes/score.php',
            type: 'POST',
            dataType: 'json',
            data: {
                like: like,
            },
            success (response) {
                $('#likeData').text(response.likeData);
                $('#dislikeData').text(response.dislikeData);
            }
        });
    });

    $("#dislike").click(function() {
        if ($('.dislike-checkbox').is(':checked')) {
            dislike = 'true';
        } else {
            dislike = undefined;
        }
        $('.like-checkbox').prop('checked', false);
    
        $.ajax({
            url: '../includes/score.php',
            type: 'POST',
            dataType: 'json',
            data: {
                dislike: dislike,
            },
            success (response) {
                $('#dislikeData').text(response.dislikeData);
                $('#likeData').text(response.likeData);
            },
        });
    });
