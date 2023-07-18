<?php

function sendMail($mailText) {
    mail('admin@local.site', 'Recovery code', $mailText, "Reply-To: admin@local.site\r\n");
}
