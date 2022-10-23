<?php

    //include required phpmailer files
        require 'includes/PHPMailer.php';
        require 'includes/SMTP.php';
        require 'includes/Exception.php';

    //define name spaces
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    //create instance of phpmailer
    $mail= new PHPMailer(); 
    //set mailer to use smtp
    $mail->isSMTP();
    //define smtp host
    $mail->Host= "smtp.gmail.com";
    //enable smtp authentification
    $mail->SMTPAuth="true";
    //set type og encrytion (ssl/tls)
    $mail->SMTPSecure ="tls";
    //set port to connet smtp
    $mail->Port ="587";
    //set gmail username
    $mail->Username="irmbkevin@gmail.com";
    //set gmail password
    $mail->Password="xrujzrxpshgrrenk";
    //set email subjet
    $mail->Subject="Test Email Using PHPMailer";
    // sender email
    $mail->Setfrom=("irmbkevin@gmail.com");
    //Enable HTML
    $mail->isHTML(true);
    //Attachement
    //$mail->addAttachment('img.png');
    //mail body
    $mail->Body= "this is plain text email body";
    //add recipient
    $mail->addAddress("kevinmbumba09@gmail.com");
    //fianlly send mail
    if ($mail->send()){

            echo 'email sent...!';
    }else{

            echo 'email error...!';
    }
    //closing smtp connection
    $mail->smtpclose();
?>