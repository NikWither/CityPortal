<?php

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    unset($_SESSION['user']);
    session_destroy();
    header('Location: /login.php');
} else {
    echo 'Error handle action';
    die();
}