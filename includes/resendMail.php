<?php

require_once 'sendMail.php';
session_start();

if (empty($_POST['email'])) {
    header('Location: /');
} else {
    sendMail.sendMail($_SESSION['recovery']);
}


