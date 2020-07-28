<?php
//submit-form.php
require('config/bootstrap.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$mail = new PHPMailer;
$mail->isSMTP();
$mail->Host = $_ENV['EMAIL_HOST'];
$mail->SMTPAuth = true;
$mail->Username = $_ENV['EMAIL_USERNAME'];
$mail->Password = $_ENV['EMAIL_PASSWORD'];
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;
$mail->From = $_ENV['EMAIL_USERNAME'];
$mail->FromName = 'Portfolio Website';
$mail->addAddress($_ENV['EMAIL_USERNAME'], 'Portfolio Website');
$mail->addReplyTo($_ENV['EMAIL_USERNAME']);
$mail->isHTML(TRUE);
$mail->Subject = 'Someone contacted you!';

$html = "Name: " . $name . "<br>";
$html .= "Email: " . $email . "<br>";
$html .= "Message: " . $message . "<br>";

$mail->Body = $html;
$mail->send();

header("Location: /?email=success");