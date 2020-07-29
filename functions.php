<?php
//functions.php

function check_if_mail_sent($mail) {
    if(isset($mail) && $mail == 'success') {
        $message = 'Your mail was sent. Thank you.';
    } else {
        $message = false;
    }
    return $message;
}