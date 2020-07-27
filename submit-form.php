<?php
//submit-form.php

require __DIR__ . '/vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$mail = new PHPMailer;
$mail->isSMTP();
$mail->Host = 'rootlessdesigns.com';
$mail->SMTPAuth = true;
$mail->Username = "jacob@rootlessdesigns.com";
$mail->Password = "D0n'tTread0nM3";
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;
$mail->From = 'jacob@rootlessdesigns.com';
$mail->FromName = 'Portfolio Website';
$mail->addAddress('jacob@rootlessdesigns.com', 'Portfolio Website');
$mail->addReplyTo('jacob@rootlessdesigns.com');
$mail->isHTML(TRUE);
$mail->Subject = 'Someone contacted you!';

$html = "Name: " . $name . "<br>";
$html .= "Email: " . $email . "<br>";
$html .= "Message: " . $message . "<br>";

$mail->Body = $html;
$mail->send();

header("Location: /?email=success");