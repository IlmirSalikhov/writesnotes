<?php
    session_start();
    require_once 'connect.php';

    $id_user = $_SESSION['id']['id_user'];
    $id_book = $_SESSION['id_book_arr']['id_book'];
    $like = $_POST['like'];
    $dislike = $_POST['dislike'];


    $check_id = mysqli_query($connect, "SELECT * FROM `score` WHERE `id_book` = '$id_book' AND `id_user` = '$id_user'");
    if (mysqli_num_rows($check_id) > 0) {    
        mysqli_query($connect, "UPDATE `score` SET `like` = '$like', `dislike` = '$dislike' WHERE `id_book` = '$id_book' AND `id_user` = '$id_user'");
        if (!empty($like)) {
            $like = $_SESSION['id_book_arr']['like'];
            $dislike = $_SESSION['id_book_arr']['dislike'];
            $id_book = $_SESSION['id_book_arr']['id_book'];
            mysqli_query($connect, "UPDATE `book` SET `like` = '$like' + 1 WHERE `id_book` = '$id_book'");
            if(!empty($dislike)) {
                mysqli_query($connect, "UPDATE `book` SET `dislike` = '$dislike' - 1 WHERE `id_book` = '$id_book'");
            }
        } else if (!empty($dislike)) {
            $like = $_SESSION['id_book_arr']['like'];
            $dislike = $_SESSION['id_book_arr']['dislike'];
            $id_book = $_SESSION['id_book_arr']['id_book'];
            mysqli_query($connect, "UPDATE `book` SET `dislike` = '$dislike' + 1 WHERE `id_book` = '$id_book'");
            if(!empty($like)) {
                mysqli_query($connect, "UPDATE `book` SET `like` = '$like' - 1 WHERE `id_book` = '$id_book'");
            }
        }
    } else {
        mysqli_query($connect, "INSERT INTO `score` (`id_score`, `id_book`, `id_user`, `like`, `dislike`) VALUES (NULL, '$id_book', '$id_user', '$like', '$dislike')");
    }
    $check_book = mysqli_query($connect, "SELECT * FROM `book` WHERE `id_book` = '$id_book'");
    $id_book_arr = mysqli_fetch_assoc($check_book);
        $_SESSION['id_book_arr'] = [
            "id_book" => $id_book_arr['id_book'],
            "author" => $id_book_arr['author'],
            "nameBook" => $id_book_arr['nameBook'],
            "genusBook" => $id_book_arr['genusBook'],
            "typeBook" => $id_book_arr['typeBook'],
            "genreBook" => $id_book_arr['genreBook'],
            "ageRestriction" => $id_book_arr['ageRestriction'],
            "datePublish" => $id_book_arr['datePublish'],
            "like" => $id_book_arr['like'],
            "dislike" => $id_book_arr['dislike'],
            "textPage" => $id_book_arr['textPage']
        ];
        $likeData = $_SESSION['id_book_arr']['like'];
        $dislikeData = $_SESSION['id_book_arr']['dislike'];
        $response = [
            "likeData" => $likeData,
            "dislikeData" => $dislikeData,
        ];
        echo json_encode($response);
        die();
    
?>