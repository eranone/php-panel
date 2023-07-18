<?php
session_start();

function sendError($errorText) {
    $_SESSION['error_desc'] = "$errorText";
}
function check($password): bool {
    if (strlen($password) > 100 || strlen($password) < 8) {
        sendError('Password is too short or too long');
        return false;
    }
    return true;
}
