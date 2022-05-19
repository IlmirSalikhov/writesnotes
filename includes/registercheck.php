<?php

    session_start();
    require_once 'connect.php';

    $lastName = $_POST['lastName'];
    $firstName = $_POST['firstName'];
    $middleName = $_POST['middleName'];
    $email = $_POST['email'];
    $birthDate = $_POST['birthDate'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];
    $checkbox_agreement = $_POST['checkbox_agreement'];

    $check_email = mysqli_query($connect, "SELECT * FROM `users` WHERE `email` = '$email'");
        if (mysqli_num_rows($check_email) > 0) {
            $response = [
            "status" => false,
            "type" => 1,
            "message" => "E-mail уже используется",
            "fields" => ['email']
    ];

    echo json_encode($response);
    die();
}

    if ($lastName === '') {
        $error_fields[] ='lastName';
    }
    if ($firstName === '') {
        $error_fields[] = 'firstName';
    }
    if ($middleName === '') {
        $error_fields[] = 'middleName';
    }
    if ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error_fields[] = 'email';
    }
    if ($birthDate === '') {
        $error_fields[] = 'birthDate';
    }
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

    $password = md5($password);

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
    if(!preg_match( '/^([а-яА-ЯЁёa-zA-Z0-9_]{5,25}+)$/u', $password)) {
        $response = [
            "status" => false,
            "message" => "Пароль должен быть в пределах 5-25 символов и содержать (а-я А-Я a-z A-Z 0-9)"
        ];
        echo json_encode($response);
        die();
    }

if ($password === $password_confirm) {
    if(isset($checkbox_agreement) && $checkbox_agreement == "agree") {
        mysqli_query($connect, "INSERT INTO `users` (`id_user`, `lastName`, `firstName`, `middleName`, `email`, `birthDate`, `password`, `registerDate`) VALUES (NULL, '$lastName', '$firstName', '$middleName', '$email', '$birthDate', '$password', NOW())");
            $response = [
                "status" => true,
                "message" => "Регистрация прошла успешно. Переадресация...",
            ];
            echo json_encode($response);
        } else {
            $response = [
                "status" => false,
                "message" => "Соглашение обязательно при регистрации",
            ];
            echo json_encode($response);
        }
} else {
    $response = [
        "status" => false,
        "message" => "Пароли не совпадают",
    ];
    echo json_encode($response);
}
?>