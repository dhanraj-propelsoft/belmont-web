<?php
error_reporting(0);

$data = [];
$to = "yazar.vr46@gmail.com";
$subject = "Mail Received from BELMONT Website User";

$message = "";
if(isset($_POST['name']))
$message .= "<h1>This is ".$_POST['name']."</h1>";
if(isset($_POST['msg']))
$message .= $_POST['msg']."<BR/>";
if(isset($_POST['email']))
$message .= "Reply to: ". $_POST['email'];

$header = "From:yazarvale@gmail.com \r\n";
$header .= "MIME-Version: 1.0\r\n";
$header .= "Content-type: text/html\r\n";

$retval = mail ($to,$subject,$message,$header);

if( $retval == true ) {
    $data['success'] = true;
    $data['message'] = "<script>Swal.fire({
                        title: 'Success!',
                        text: 'Mail sent successfully...!',
                        icon: 'success',
                        confirmButtonText: 'OK'
                        });</script>";
} else {
    $data['success'] = false;
    $data['message'] = "<script>Swal.fire({
                        title: 'Error!',
                        text: 'Message could not be sent...!',
                        icon: 'error',
                        confirmButtonText: 'OK'
                        });</script>";
}

echo json_encode($data);
?>