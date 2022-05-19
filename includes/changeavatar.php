<?php
    session_start();
    require_once 'connect.php';

    $email = $_SESSION['id']['email'];
    $avatar_path = 'image/avatar-profile/'.time().$FILES['avatar']['name'];
    if (!move_uploaded_file($_FILES['avatar']['tmp_name'], '../' . $avatar_path)) {
        $response = [
            "status" => false,
            "message" => "Ошибка при загрузке изображения",
        ];
        echo json_encode($response);
    }
    mysqli_query($connect, "UPDATE `users` SET `avatar` = '$avatar_path' WHERE `email` = '$email'");
    $response = [
        "status" => true,
        "message" => "Изображение успешно загружена",
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
