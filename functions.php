<?php
//functions.php

function check_if_mail_sent($mail) {
    if(isset($mail) && $mail == 'success') {
        $message = 'Your Mail was Sent. Thank you.';
    } else {
        $message = false;
    }
    return $message;
}