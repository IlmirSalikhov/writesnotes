<?php
    session_start();
    require_once 'connect.php';

    $id_user = $_SESSION['id']['id_user'];
    $id_book = $_SESSION['id_book_arr']['id_book'];

    $check_score = mysqli_query($connect, "SELECT * FROM `score` WHERE `id_book` = '$id_book' AND `id_user` = '$id_user'");
    $score = mysqli_fetch_assoc($check_score);
        $_SESSION['score'] = [
            "id_score" => $score['id_score'],
            "id_book" => $score['id_book'],
            "id_user" => $score['id_user'],
            "like" => $score['like'],
            "dislike" => $score['dislike'],
        ];

    $check_id = mysqli_query($connect, "SELECT * FROM `score` WHERE `id_book` = '$id_book' AND `id_user` = '$id_user'");
    if (mysqli_num_rows($check_id) > 0) {
        if ($_SESSION['score']['like'] == true) {
            $checkbox = [
                "type" => 1
            ];
            echo json_encode($checkbox);
        } else if ($_SESSION['score']['dislike'] == true) {
             $checkbox = [
                 "type" => -1
             ];
             echo json_encode($checkbox);
        } else {
             $checkbox = [
                 "type" => 0
             ];
             echo json_encode($checkbox);
        }
    }
?>