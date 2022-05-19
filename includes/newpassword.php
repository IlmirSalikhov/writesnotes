<?php

    session_start();
    require_once 'connect.php';

    $email = $_SESSION['confirm']['email'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];

    if ($password === '') {
        $error_fields[] = 'password';
    }
    if ($password_confirm === '') {
        $error_fields[] = 'password_confirm';
    }
    if (!empty($error_fields)) {
        $response = [
            "status" => false,
            "type" => 1,
            "message" => "Проверьте правильность полей",
            "fields" => $error_fields
        ];
    
        echo json_encode($response);
        die();
    }
    if ($password === $password_confirm) {
        mysqli_query($connect, "UPDATE `users` SET `password` = '$password' WHERE `email` = '$email'");
            $response = [
                "status" => true,
                "message" => "Пароль изменен. Переадресация...",
            ];
            unset($_SESSION['confirm']);
        echo json_encode($response);
    } else {
            $response = [
                "status" => false,
                "message" => "Пароли не совпадают",
            ];
            echo json_encode($response);
        }
?>