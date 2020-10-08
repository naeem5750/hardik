<?php

unset($mail);
$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'webmail.data-tac.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'no-reply@data-tac.com';                 // SMTP username
$mail->Password = 'data-tac@123';                           // SMTP password
$mail->Port = 25;                                    // TCP port to connect to

$mail->setFrom('no-reply@data-tac.com', 'DATA-TAC');
?>