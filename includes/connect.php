<?php
$connect = mysqli_connect('localhost', 'root', 'root', 'writers_notes');

    if (!$connect) {
        die('Error connect to DataBase');
    }
?>