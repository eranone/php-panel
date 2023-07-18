<?php
session_start();
function send($errorText) {
    $_SESSION['error_desc'] = "$errorText";
}