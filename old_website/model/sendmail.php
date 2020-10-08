<?php
include_once '../phpmailer/PHPMailerAutoload.php';

include '../config/mail.php';


$mail->addAddress('info@data-tac.com', "DATA-TAC");     // Add a recipient

$mail->addReplyTo($_POST['email'], $_POST['name']);

$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = "Enquiry From ".$_POST['name'];

$txt_body="Enquiry From - ".$_POST['name']."\n\n";

$body="<h1>Enquiry From - ".$_POST['name']."</h1>";
$body.="<table>";
foreach ($_POST as $key => $value) {
    $body.="<tr>";
    $body.="<td><strong>".$key.": </strong></td>";
    $body.="<td>".nl2br($value)."</td>";
    $body.="</tr>";
    
    $txt_body.=$key.": ".$value."\n";
}
$body.="</table>";


$mail->Body    = $body;
$mail->AltBody = $txt_body;


//print_r($mail);

if(!$mail->send()) {
    header("location: ../contact_page.php?status=error#contactus");
} else {
    header("location: ../contact_page.php?status=success#contactus");
}
?>