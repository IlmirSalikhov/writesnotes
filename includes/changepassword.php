<?php

    session_start();
    require_once 'connect.php';

    $email = $_SESSION['id']['email'];
    $password = $_POST['password'];
    $new_password = $_POST['new_password'];
    $new_password_confirm = $_POST['new_password_confirm'];

    if ($password === '') {
        $error_fields[] = 'password';
    }
    if ($new_password === '') {
        $error_fields[] = 'new_password';
    }
    if ($new_password_confirm === '') {
        $error_fields[] = 'new_password_confirm';
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
    if($password === $_SESSION['id']['password']) {
        if(!preg_match( '/^([а-яА-ЯЁёa-zA-Z0-9_]{5,25}+)$/u', $new_password)) {
            $response = [
                "status" => false,
                "message" => "Пароль должен быть в пределах 5-25 символов и содержать (а-я А-Я a-z A-Z 0-9)"
            ];
            echo json_encode($response);
            die();
        }
        if ($new_password === $new_password_confirm) {
            mysqli_query($connect, "UPDATE `users` SET `password` = '$new_password' WHERE `email` = '$email'");
                $response = [
                    "status" => true,
                    "message" => "Пароль изменен",
                ];
            echo json_encode($response);
            $check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `email` = '$email'");
            $id = mysqli_fetch_assoc($check_user);
            $_SESSION['id'] = [
            "lastName" => $id['lastName'],
            "firstName" => $id['firstName'],
            "middleName" => $id['middleName'],
            "avatar" => $id['avatar'],
            "email" => $id['email'],
            "birthDate" => $id['birthDate'],
            "password" => $id['password'] 
            ];
        } else {
                $response = [
                    "status" => false,
                    "message" => "Пароли не совпадают",
                ];
                echo json_encode($response);
            }
    } else {
        $response = [
            "status" => false,
            "message" => "Текущий пароль не правильный"
        ];
        echo json_encode($response);
    }
    
?>