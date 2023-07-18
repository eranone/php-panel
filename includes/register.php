<?php
    session_start();
    require_once 'connect.php';
    require_once 'checkNewUserData.php';
    var_dump($_POST);

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_confirmation = $_POST['password_confirmation'];


    if ($checkNewUserData.checkData($name, $email, $password, $password_confirmation)) {
        $password = md5($password);
        mysqli_query($connect, "INSERT INTO `site` (`id`, `name`, `email`, `password`) VALUES (NULL, '$name', '$email', '$password')");
        header('Location: ../index.php');
    } else {
        header('Location: ../index.php');
    }
