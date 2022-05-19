<?php
session_start();
    require_once('connect.php');

    $email = $_POST['email'];
    $password = $_POST['password'];
    $error_fields = [];

    if ($email === '') {
        $error_fields[] = 'email';
    }
    if ($password === '') {
        $error_fields[] = 'password';
    }
    if (!empty($error_fields)) {
        $response = [
            "status" => false,
            "type" => 1,
            "message" => "Введите данные",
            "fields" => $error_fields
        ];
        echo json_encode($response);
        die();
    }
    $check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$password'");
    if (mysqli_num_rows($check_user) > 0) {
        
        $id = mysqli_fetch_assoc($check_user);
        $_SESSION['id'] = [
            "id_user" => $id['id_user'],
            "lastName" => $id['lastName'],
            "firstName" => $id['firstName'],
            "middleName" => $id['middleName'],
            "avatar" => $id['avatar'],
            "email" => $id['email'],
            "birthDate" => $id['birthDate'],
            "password" => $id['password']
        ];

        mysqli_query($connect, "UPDATE `users` SET `lastDate` = NOW() WHERE `email` = '$email'");
        $response = [
            "status" => true
        ];
        echo json_encode($response);

    } else {
        $response = [
            "status" => false,
            "message" => 'Не верный e-mail или пароль'
        ];
        echo json_encode($response);
    }
?>