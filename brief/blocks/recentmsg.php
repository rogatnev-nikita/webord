<?php
/**
 * Created by PhpStorm.
 * User: marik
 * Date: 11/9/15
 * Time: 10:11 PM
 */





function complete_mail()
{

    $leadData = $_POST['DATA'];
return var_dump($leadData);
}
return complete_mail();

//
//    $strPostData = '';
//    foreach ($postData as $key => $value)
//        if($value !== false)    $strPostData .= ($strPostData == '' ? '' : ' ') . $key . ' ' . ($value) . "<br>";
//    $str .= "<p><strong>Заявка:</strong> <br/> " . ($strPostData) . "</p>\r\n";
//





/*


require 'PHPMailer/class.phpmailer.php';

$mail = new PHPMailer;

$mail->SMTPDebug = 3;
//$mail->SMTPDebug = true;

$mail->setFrom('marik86@inbox.ru', 'Mailer');
$mail->addAddress('darziyan@gmail.com', 'Joe User');     // Add a recipient
$mail->addAddress('marik86@inbox.ru');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Here is the subject';
$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}*/
