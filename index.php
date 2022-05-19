<?php
if ($_SERVER['REQUEST_URI'] == '/') $page = 'home';
else {
    $page = substr($_SERVER['REQUEST_URI'], 1);
    if (!preg_match('/^[A-z0-9]{3,20}$/', $page)) exit('error url');
}

include 'includes/connect.php';


session_start();

// if (!$_SESSION['id'] and file_exists('pages/other/'.$page.'.php')) include 'pages/other/'.$page.'.php';
// else if ($_SESSION['id'] and file_exists('pages/auth/'.$page.'.php')) include 'pages/auth/'.$page.'.php';
// else if ($page != 'home') exit ('Страница 404');



if (file_exists('pages/other/'.$page.'.php')) include 'pages/other/'.$page.'.php';
else if (file_exists('pages/auth/'.$page.'.php')) include 'pages/auth/'.$page.'.php';
else exit ('Ошибка 404');
function random_str($num = 30) {
    return substr(str_shuffle('0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'), 0, $num);
}


function top($title) {
echo
'<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>'.$title.'</title>
</head>
<script src="js/jquery-3.4.1.min.js"></script>
<body>
';
include_once 'components/header.php';
}

function bottom(){
    echo
'</body>
</html>';
}
?>