<?php
session_start();

require_once 'connect.php';
require_once 'sendMail.php';

$_SESSION['recovery'] = mt_rand(1111,9999);
$email = $_POST['email'];
$recoveryCode = $_SESSION['recovery'];
if (isset($_POST['email'])) $_SESSION['email'] = $email;

//function checkEmailSent(): bool {
//    if (isset($_SESSION['recoveryKeySent'])) {
//        return true;
//    }
//    return false;
//}

function checkEmailInDB($email): bool {
    global $connect;
    $checkUser = mysqli_query($connect, "SELECT * FROM `site` WHERE `email` = '$email'");
    if (mysqli_num_rows($checkUser)) {
        return true;
    }
    return false;
}

//function checkUserEnterRecovery(): bool {
//    if (isset($_POST['userRecoveryKey'])) {
//        return true;
//    } else {
//        return false;
//    }
//}

function checkUserRecovery($recoveryKey): bool {
    if ($_POST['userRecoveryKey'] == $recoveryKey) {
        return true;
    } else {
        return false;
    }
}

function sendError($errorText) {
    $_SESSION['error_desc'] = "$errorText";
    header('Location: ../forgot-password.php');
}

if (checkEmailInDB($email)) {
    $sendMail.sendMail($recoveryCode);
    header('Location: ../verify-email.php');
} else {
    sendError('This email does not exist');
}



