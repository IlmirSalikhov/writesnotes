<?php
session_start();
unset($_SESSION['confirm']);
header('Location: '.$_SERVER['HTTP_REFERER']);
?>