<?php

    session_start();
    require_once 'connect.php';

    $email = $_SESSION['id']['email'];
    $lastName = $_POST['lastName'];
    $firstName = $_POST['firstName'];
    $middleName = $_POST['middleName'];
    $birthDate = $_POST['birthDate'];

    if (($lastName === $_SESSION['id']['lastName']) and 
        ($firstName === $_SESSION['id']['firstName']) and
        ($middleName === $_SESSION['id']['middleName']) and
        ($birthDate === $_SESSION['id']['birthDate'])) {
        $error_fields[] = 'lastName';
        $error_fields[] = 'firstName';
        $error_fields[] = 'middleName';
        $error_fields[] = 'birthDate';
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

    if(!preg_match( '/^([а-яА-ЯЁё]+)$/u', $lastName)) {
        $response = [
            "status" => false,
            "message" => "Фамилия должна содержать следующие символы: (А-я)"
        ];
        echo json_encode($response);
        die();
    }
    if(!preg_match( '/^([а-яА-ЯЁё]+)$/u', $firstName)) {
        $response = [
            "status" => false,
            "message" => "Имя должно содержать следующие символы: (А-я)"
        ];
        echo json_encode($response);
        die();
    }
    if(!preg_match( '/^([а-яА-ЯЁё]+)$/u', $middleName)) {
        $response = [
            "status" => false,
            "message" => "Отчество должно содержать следующие символы: (А-я)"
        ];
        echo json_encode($response);
        die();
    }
    mysqli_query($connect, "UPDATE `users` SET `lastName` = '$lastName', `firstName` = '$firstName', `middleName` = '$middleName', `birthDate` = '$birthDate' WHERE `email` = '$email'");
    $response = [
        "status" => true,
        "message" => "Данные успешно изменены"
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
    
?>