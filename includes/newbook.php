<?php
session_start();
    require_once('connect.php');

    $lastName = $_SESSION['id']['lastName'];
    $firstName = $_SESSION['id']['firstName'];
    $middleName = $_SESSION['id']['middleName'];
    
    $fN = mb_substr($firstName, 0, 1);
    $mN = mb_substr($middleName, 0, 1);
    $fullName = "$lastName $fN.$mN";

    $email = $_SESSION['id']['email'];
    $nameBook = $_POST['nameBook'];
    $genusBook = $_POST['genusBook'];
    $typeBook = $_POST['typeBook'];
    $genreBook = $_POST['genreBook'];
    $ageRestriction = $_POST['ageRestriction'];
    $textBook = $_POST['textBook'];
    $error_fields = [];

    if ($nameBook === '') {
        $error_fields[] = 'nameBook';
    }
    if ($textBook === '') {
        $error_fields[] = 'textBook';
    }
    if ($genusBook === NULL) {
        $error_fields[] = 'genusBook';
    }
    if ($typeBook === NULL) {
        $error_fields[] = 'typeBook';
    }
    if ($genreBook === '') {
        $error_fields[] = 'genreBook';
    }
    if ($ageRestriction === NULL) {
        $error_fields[] = 'ageRestriction';
    }
    if (!empty($error_fields)) {
        $response = [
            "status" => false,
            "type" => 1,
            "message" => "Поля обязательны для заполнения",
            "fields" => $error_fields
        ];
        echo json_encode($response);
        die();
    }
    
    
    mysqli_query($connect, "INSERT INTO `book` (`id_book`, `author`, `email`, `nameBook`, `genusBook`, `typeBook`, `genreBook`, `ageRestriction`, `datePublish`, `textPage`) VALUES (NULL, '$fullName', '$email', '$nameBook', '$genusBook', '$typeBook', '$genreBook', '$ageRestriction', NOW(), '$textBook')");
    $response = [
        "status" => true,
        "message" => "Произведение опубликована"
    ];
    echo json_encode($response);
?>