<?php
session_start();

require_once 'sendError.php';
require_once 'connect.php';
require_once 'checkNewPassword.php';

function checkData($name, $email, $password, $password_confirmation) {

    if (!$checkNewPassword.check($password)) {
        return false;
    }

    if ($password != $password_confirmation) {
        $sendError.send('Passwords are not equal');
        return false;
    }

    $checkUser = mysqli_query($connect, "SELECT * FROM `site` WHERE `email` = '$email'");
    if (mysqli_num_rows($checkUser)) {
        $sendError.send('This user is already exist!');
        return false;
    }
    return true;
}