<?php
session_start();
require_once('connect.php');

$id_book = $_POST['id_book'];

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

?>