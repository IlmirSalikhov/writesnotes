<?php
session_start();
require_once 'connect.php';

$request = $_POST['request'];


$search_book = mysqli_query($connect, "SELECT * FROM `book` WHERE `nameBook` = '$request'");
if (mysqli_num_rows($search_book) > 0) {
    $result = mysqli_fetch_assoc($search_book);
    $_SESSION['result'] = [
        'nameBook' => $result['nameBook'],
    ];
    $result = $result['nameBook'];
    echo json_encode($result);
    }

// $search_author = mysqli_query($connect, "SELECT * FROM `users` WHERE `lastName` = '$lastName' OR `firstName` = '$firstName' OR `middleName` = '$middleName'");
// if (mysqli_num_rows($search_author) > 0) {
//     $author_arr = mysqli_fetch_assoc($search_author);
//     $_SESSION['author_arr'] = [
//         'id_user' => $author_arr['id_user'],
//     ];
//     $author_arr = $author_arr['id_user'];
//     var_dump($author_arr);
//     echo json_encode($author_arr);
// }

?>