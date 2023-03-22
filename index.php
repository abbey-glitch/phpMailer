<?php
//include PHP libs
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

require 'vendor/autoload.php';

$send_mail = new PHPMailer();
try {
    //PHP Simple Server settings
    // $send_mail->SMTPDebug = 2;
    $send_mail->isSMTP();
    $send_mail->Host = 'smtp.gmail.com';
    $send_mail->SMTPAuth = true;
    $send_mail->Username = 'abiodunonaolapi@gmail.com';
    $send_mail->Password = 'ojucrlyhfsgwhgzk';
    $send_mail->SMTPSecure = 'tls';
    $send_mail->Port = 587;

    $send_mail->setFrom('abiodunonaolapi@gmail.com', 'saydo');
    $send_mail->addAddress('abiodunonaolapi@gmail.com', 'Pakainfo');
    // $send_mail->addAddress('recipient2@yourdomain_name.com');
    $send_mail->addReplyTo('abiodunonaolapi@gmail.com', 'noreply');
    // $send_mail->addCC('cc@yourdomain_name.com');
    // $send_mail->addBCC('bcc@yourdomain_name.com');

    //PHP Files Attachments
    //$send_mail->addAttachment('/media/pakainfo_products.tar.gz');

    //Content
    //$send_mail->isHTML(true);
    $send_mail->Subject = 'Wel-come To Pakainfo.com & Test Mail Subject!';
    $send_mail->Body = 'Latest Body of simple Pakainfo is SMTP Email Testing demo';

    $send_mail->send();
    echo 'Good Luck Your Message has been sent';
} catch (Exception $e) {
    echo 'Sorry Dear, Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}
