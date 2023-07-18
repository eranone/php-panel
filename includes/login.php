<?php
    session_start();
    require_once 'connect.php';

    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $checkUser = mysqli_query($connect, "SELECT * FROM `site` WHERE `email` = '$email' AND `password` = '$password'");

    if (mysqli_num_rows($checkUser)) {
        $userData =mysqli_fetch_assoc($checkUser);
        $_SESSION['user'] = [
            'id' => $userData['id'],
            'name' => $userData['name'],
            'email' => $userData['email'],
        ];
        header('Location: ../panel.php');

    } else {
        $_SESSION['error_desc'] = 'Incorrect email or password';
        header('Location: ../login.php');
    }