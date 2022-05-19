<?php
session_start();
    require_once('connect.php');

    function random_str($num = 30) {
        return substr(str_shuffle('0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'), 0, $num);
    }

    $email = $_POST['email'];
    $error_fields = [];

    if ($email === '') {
        $error_fields[] = 'email';
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

    $check_email = mysqli_query($connect, "SELECT * FROM `users` WHERE `email` = '$email'");
        if (mysqli_num_rows($check_email) > 0) {
    
            $response = [
                "status" => true
            ];
            echo json_encode($response);

            $code = random_str(5);
            $_SESSION['confirm'] = [
                'status' => true,
                'type' => 'recovery',
                'email' => $email,
                $message_email => "Восстановление пароля. Код подтверждения для восстановления пароля:",
                'code' => $code
            ];
            mail($email, $messege_email, $code);
            

        } else {
            $response = [
                "status" => false,
                "message" => 'E-mail не найден'
            ];
            echo json_encode($response);
        }
?>