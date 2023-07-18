<?php
session_start();

require_once 'connect.php';
require_once 'checkNewPassword.php';

if (empty($_SESSION['user']['email']) && empty($_SESSION['recoveryCodeCorrect'])) {
    header('Location: ../forgot-password.php');
}
$email = $_SESSION['user']['email'] ?? $_SESSION['email'];
$newPassword = $_POST['newPassword'];
function changePassword() {
    global $checkNewPassword;
    global $connect;
    global $email;
    global $newPassword;
    $userInDB = mysqli_query($connect, "SELECT * FROM `site` WHERE `email` = '$email'");
    if (mysqli_num_rows($userInDB) && $checkNewPassword.check($newPassword)) {
        $newPassword = md5($newPassword);
        mysqli_query($connect, "UPDATE `site` SET password = '$newPassword' WHERE email = '$email'");
        session_destroy();
        header('Location: ../login.php');
    } else {
        header('Location: ../reset-password.php');
    }

}
changePassword();
