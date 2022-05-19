<?php

    session_start();
    require_once('connect.php');

    $code = $_POST['code'];
    $error_fields = [];

    if ($code === '') {
        $error_fields[] = 'code';
    }
    if (!empty($error_fields)) {
        $response = [
            "status" => false,
            "type" => 1,
            "message" => "Введите код подтверждения",
            "fields" => $error_fields
        ];
        echo json_encode($response);
        die();
    }
        if ($_SESSION['confirm']['code'] == $code) {
            $response = [
                "status" => true
            ];
            echo json_encode($response);
            die();

        } else {
            $response = [
                "status" => false,
                "message" => 'Код подтверждения не верный'
            ];
            echo json_encode($response);
        }
?>