<?php
session_start();
    
?>
<html>
    <body>
    <ul class="top">
            <li class="l1"><a href="#"><img src="phonewhite.jpeg" id="logo0">&nbsp;7284056951</a></li>
            <li class="l1"><a href="#"><img src="emailwhite.png" id="logo1">&nbsp;queries@teamcadmus.com</a></li>
        </ul>
        <ul>
            <li class="l2"><a href="home.html">Home</a></li>
            <li class="l2"><a href="login.html">Login</a></li>
            <li class="l2"><a href="main_page.html">Search donor</a></li>
        </ul><br>
        <link rel="stylesheet" href="test.css">
        
        <form method="POST" action="">
            <h2 class="heading1">Enter the otp sent to you email</h2>
            <input type="text" style="font-size:medium;padding:5px 5px;" name="otp" placeholder="enter otp here"><br><br>
            <input type="submit" class="buttons" name="verification">
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
    $_SESSION['fname']=$_POST["fname"];
 
 $_SESSION['lname']=$_POST['lname'];
 $_SESSION['age']=$_POST["age"];
 $_SESSION['gender']=$_POST["gender"];
 $_SESSION['address']=$_POST["address"];
 $_SESSION['dob']=$_POST["dob"];
 $_SESSION['city']=$_POST["city"];
 $_SESSION['bloodgroup']=$_POST["blood_group"];
 $_SESSION['predonated']=$_POST["predonated"];
 $_SESSION['donate_value']=$_POST["donate_value"];
 $_SESSION['problem']=$_POST["problem"];
 $_SESSION['desc']=$_POST["yes_problem"];
 $_SESSION['state']=$_POST["state"];
 $_SESSION['contact']=$_POST["contact"];
 
 $_SESSION['pass1']=md5($_POST["pass"]); 
 $_SESSION['pass2']=md5($_POST["conf_pass"]);
    $_SESSION['email']=$_POST["email"];

    

 
    $email=$_SESSION['email'];
    $html="Your otp verification code is ".$_SESSION['otp'];
    smtp_mailer($_SESSION['email'],'OTP Verification',$html);
    }
    $name=$_SESSION['fname'];
 $lname=$_SESSION['lname'];
 $age=$_SESSION['age'];
 $gender=$_SESSION['gender'];
 $address=$_SESSION['address'];
 $dob=$_SESSION['dob'];
 $city=$_SESSION['city'];
 $bloodgroup=$_SESSION['bloodgroup'];
 $donates=$_SESSION['predonated'];
 $donatedvalue=$_SESSION['donate_value'];
 $problem=$_SESSION['problem'];
 $problemdesc=$_SESSION['desc'];
 $state=$_SESSION['state'];
 $contact=$_SESSION['contact'];
 $email=$_SESSION['email'];
 
 $pass=$_SESSION['pass1']; 
if(isset($_POST['verification'])){
    
    if($_SESSION['otp']==$_POST['otp']){
        echo "otp matches";
        include("connection_project.php");
        $db=new connection_project();
        $conn=$db->connect();
        $res=mysqli_query($conn,"insert into donor values('$contact','$name','$lname','$age','$gender','$bloodgroup','$donates','$problem','$donatedvalue','$problemdesc','$address','$city','$state','$email','$pass','$dob')");
        if($res){
            
            echo "successfully inserted";
            session_destroy();
        }
        else{
            echo "error";
        }
       
    }
    else{
        echo "otp does not match";
    }
}
?>
</body>
</html>