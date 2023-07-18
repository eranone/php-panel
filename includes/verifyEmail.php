<?php

session_start();

$userRecoveryCode = $_POST['userRecoveryCode'] ?? null;
$recoveryCode = $_SESSION['recovery'];

function sendError($errorText) {
    $_SESSION['error_desc'] = "$errorText";
    header('Location: ../verify-email.php');
}
function sendMail($mailText) {
    mail('admin@local.site', 'Recovery code', $mailText, "Reply-To: admin@local.site\r\n");
}

function checkUserRecovery($recoveryCode, $userRecoveryCode): bool {
    if ($userRecoveryCode == $recoveryCode) {
        return true;
    } else {
        return false;
    }
}

if (isset($_POST['resend'])) {
    sendMail($recoveryCode);
    header('Location: ../verify-email.php');
    die();
}

if (isset($userRecoveryCode) && checkUserRecovery($recoveryCode, $userRecoveryCode)) {
    $_SESSION['recoveryCodeCorrect'] = true;
    header('Location: ../reset-password.php');
} else {
    sendError('Recovery code is wrong!');
}

