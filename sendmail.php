<?php
error_reporting(0);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);

$data = [];

try {
    $mail->SMTPDebug = 0;								
    $mail->isSMTP();										
    $mail->Host	 = 'smtp.gmail.com;';				
    $mail->SMTPAuth = true;							
    $mail->Username = 'yazarvale@gmail.com';				
    $mail->Password = 'kfclevphglfzhgmh';					
    $mail->SMTPSecure = 'tls';							
    $mail->Port	 = 587;

    $mail->setFrom('yazarvale@gmail.com', 'BELMONT Website');	
    $mail->addAddress('yazar.vr46@gmail.com', $_POST['name']);

    $mail->isHTML(true);
    $mail->Subject = 'Mail Received from BELMONT Website User';
    $mail->Body = '<h1>This is '.$_POST['name'].'</h1><p>'.$_POST['msg'].'</p>Reply to: '. $_POST['email'];
    $mail->AltBody = 'Body in plain text for non-HTML mail clients';
    $mail->send();
    
    $data['success'] = true;
    $data['message'] = "<script>Swal.fire({
        title: 'Success!',
        text: 'Mail has been sent successfully!',
        icon: 'success',
        confirmButtonText: 'OK'
        });</script>";
} catch (Exception $e) {
    $data['success'] = false;
    $data['message'] = "<script>Swal.fire({
        title: 'Error!',
        text: 'Message could not be sent!',
        icon: 'error',
        confirmButtonText: 'OK'
        });</script>";
    //echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

echo json_encode($data);

/*$to = "yazar.vr46@gmail.com";
$subject = "This is subject";

$message = "";
if(isset($_POST['Name']))
$message .= "<h1>This is ".$_POST['Name']."</h1>";
if(isset($_POST['Message']))
$message .= $_POST['Message']."<BR/>";
if(isset($_POST['Email']))
$message .= "Reply to: ". $_POST['Email'];

$header = "From:yazarvale@gmail.com \r\n";
$header .= "MIME-Version: 1.0\r\n";
$header .= "Content-type: text/html\r\n";

$retval = mail ($to,$subject,$message,$header);

if( $retval == true ) {
echo "<script>Swal.fire({
    title: 'Success!',
    text: 'Mail sent successfully...!',
    icon: 'success',
    confirmButtonText: 'OK'
});</script>";
} else {
echo "<script>Swal.fire({
title: 'Error!',
text: 'Message could not be sent...!',
icon: 'error',
confirmButtonText: 'OK'
});</script>";
}*/
?>