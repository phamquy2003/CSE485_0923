<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require 'src/Exception.php';
require 'src/SMTP.php';
require 'src/PHPMailer.php';
//Load Composer's autoloader

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);
if (isset($_POST['stmSignUp'])){
    try {
    //Server settings
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'anhquyk797@gmail.com';                     //SMTP username
    $mail->Password   = 'uocoubfodngvynvr';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $username = $_POST['uname'];
    $email = $_POST['email'];
    $password = $_POST['pass'];

    $mail->setFrom('anhquyk797@gmail.com', 'Mailer');
    $mail->addAddress('anhquyk797@gmail.com');     //Add a recipient
    echo $email;
    echo $password;
    echo $username;

    //Content
    $mail->isHTML(true);                                   //Set email format to HTML
    $mail->Subject = '<h1>Diem danh</h1>';
    $mail->Body    = 'Phạm Văn Quý 63HT1</b>';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
}else{
    echo "abc";
}
