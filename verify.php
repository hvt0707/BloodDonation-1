<?php
session_start();
    
?>
<html>
    <body>
        <form method="POST" action="">
            <input type="text" name="otp" placeholder="enter otp here">
            <input type="submit" name="verification">
</form>
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'vendor/autoload.php';

function smtp_mailer($to,$subject,$msg){

    $mail=new PHPMailer(true);
$mail->SMTPDebug = 0; //SMTP::DEBUG_SERVER;                      //Enable verbose debug output
$mail->isSMTP();                                            //Send using SMTP
$mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
$mail->Username   = 'jariwalavaishnavi52@gmail.com';                     //SMTP username
$mail->Password   = 'uvtcwpyxwyaomkfm';                               //SMTP password
$mail->SMTPSecure =  'TLS';//PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
$mail->Port       = 587;                //465;  

$mail->setFrom('jariwalavaishnavi52@gmail.com');
$mail->addAddress($to);     //Add a recipient
$mail->isHTML(true);                                  //Set email format to HTML
$mail->Subject = $subject;
$mail->Body    = $msg;
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

$mail->send();
if(!$mail->Send()){
    return 0;
}
else{
    return 1;
}
}
if(isset($_POST['otp_send'])){
    $email=$_POST["email"];
    $html="Your otp verification code is ".$_SESSION['otp'];
    smtp_mailer($email,'OTP Verification',$html);
    }
if(isset($_POST['verification'])){
    
    if($_SESSION['otp']==$_POST['otp']){
        echo "otp matches";
    }
    else{
        echo "otp does not match";
    }
}
?>
</body>
</html>