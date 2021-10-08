<?php
session_start();
 /*$_SESSION['fname']=$_POST["fname"];
 $_SESSION['email']=$_POST["email"];
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
 //$_SESSION['email']=$_POST["email"];
 $_SESSION['pass1']=md5($_POST["pass"]); //sai786gaja
 $_SESSION['pass2']=md5($_POST["conf_pass"]);*/
 
 //$email=$_POST["email"];
 $otp=rand(11111,99999);
 $_SESSION['otp']=$otp;

?>
<!DOCTYPE HTML>
<html lang="en-us">
	<head>
		<meta charset="utf-8">
		<title>Donor form</title>
        <script src="validation.js"></script>
        <link rel="stylesheet" href="donor_form.css">
	</head>
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
        <form method="POST" action="verify.php"> 
            <div>
                <label>First Name:</label>
                <input type="text" name="fname" placeholder="*" required></input>
            </div>
            <br>

            <div>
                <label>Last Name:</label>
                <input type="text" name="lname" placeholder="*" required></input>
            </div>
            <br>

            <div>
                <label>Age:</label>
                <input type="tel" name="age" id="age"></input>
            </div>
            <br>
            <div>
                <label>Gender:</label>
                <input type="radio" value="Male" name="gender">Male</input>
                <input type="radio" value="Female" name="gender">Female</input>
                <input type="radio" value="other" name="gender">Other</input>
            </div>
            <br>
            <div>
                <label>Date of Birth:</label>
                <input type="date" name="dob" id="DOB" onchange="calculateAge()" required></input>
            </div>
            <br>
            <div>
                <label>Blood Group:</label>
                <select name="blood_group" >
                    <option value="A+">A+</option>
                    <option value="A-">A-</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="AB+">AB+</option>
                    <option value="AB-">AB-</option>
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>
                </select>
            </div>
            <br>
            <div>
                <label>Have you donated blood before? </label>
                <input type="radio" value="Yes" name="predonated">Yes</input>
                <input type="radio" value="No" name="predonated">No</input>
            </div>
            <br>
            <div>
                <label>If yes, what did you donate last time?</label>
                <input type="radio" value="Plasma" name="donate_value">Plasma</input>
                <input type="radio" value="Platelets" name="donate_value">Platelets</input>
                <input type="radio" value="Red Cells" name="donate_value">Red Cells</input>
                <input type="radio" value="Whole Blood" name="donate_value">Whole Blood</input>
                <input type="radio" value="None" name="donate_value">None</input>
            </div>
            <br>
            <div>
                <label>Did you encounter any problem in your last donation? </label>
                <input type="radio" value="Yes" name="problem">Yes</input>
                <input type="radio" value="No" name="problem">No</input>
            </div>
            <br>
            <div>
                <label>If yes, what was the problem?</label>
                <input type="radio" value="Fainting" name="yes_problem">Fainting</input>
                <input type="radio" value="Bruise" name="yes_problem">Bruise</input>
                <input type="radio" value="Difficulty in finding vein" name="yes_problem">Difficulty in finding vein</input>
                <input type="radio" value="Other blood" name="yes_problem">Other Blood</input>
                <input type="radio" value="None" name="yes_problem">None</input>
            </div>
            <br>
            <div>
                <label>Address: </label>
                <textarea name="address" rows="2" cols="30" required></textarea>
            </div>
            <br>
            <div>
                <label>City: </label>
                <input type="text" name="city" placeholder="*" required></input>
            </div>
            <br>
            <div>
                <label>State/UT: </label>
                <select name="state" >
                    <option value="AP">Andhra Pradesh</option>
                    <option value="Arunachal">Arunachal Pradesh</option>
                    <option value="Assam">Assam</option>
                    <option value="Bihar">Bihar</option>
                    <option value="Chhattisgarh">Chhattisgarh</option>
                    <option value="Goa">Goa</option>
                    <option value="Gujarat">Gujarat</option>
                    <option value="Haryana">Haryana</option>
                    <option value="Himachal">Himachal Pradesh</option>
                    <option value="JK">Jammu and Kashmir</option>
                    <option value="Jharkhand">Jharkhand</option>
                    <option value="Karnataka">Karnataka</option>
                    <option value="Kerala">Kerala</option>
                    <option value="Madhya Pradesh">Madhya Pradesh</option>
                    <option value="Maharashtra">Maharashtra</option>
                    <option value="Manipur">Manipur</option>
                    <option value="Meghalaya">Meghalaya</option>
                    <option value="Mizoram">Mizoram</option>
                    <option value="Nagaland">Nagaland</option>
                    <option value="Odisha">Odisha</option>
                    <option value="Punjab">Punjab</option>
                    <option value="Rajasthan">Rajasthan</option>
                    <option value="Sikkim">Sikkim</option>
                    <option value="TN">Tamil Nadu</option>
                    <option value="Telangana">Telangana</option>
                    <option value="Tripura">Tripura</option>
                    <option value="Uttarakhand">Uttarakhand</option>
                    <option value="UP">Uttar Pradesh</option>
                    <option value="WB">West Bengal</option>
                    <option value="Nicobar">Andaman and Nicobar Islands</option>
                    <option value="Chandigarh">Chandigarh</option>
                    <option value="DadraandNagar">Dadra and Nagar Haveli</option>
                    <option value="Daman">Daman and Diu</option>
                    <option value="Delhi">Delhi</option>
                    <option value="Lakshadweep">Lakshadweep</option>
                    <option value="Puducherry">Puducherry</option>
                </select>
            </div>
            <br>
            <div>
                <label>Contact Number: </label>
                <input name="contact" type="tel" required></input>
            </div>
            <br>
            <div>
                <label>Email ID: </label>
                <input name="email" id="email" type="email" required></input>
            </div>
            <br>
            <label>Password: </label>
        <input type="password" name="pass" id="pass"  placeholder="*" required>
        <br><br>
        <label>Confirm password: </label>
        <input type="password" name="conf_pass" id="conf_pass" placeholder="*" required><br><br>
        <!--<label>Enter OTP: </label>
        <input type="text" name="otp_text" placeholder="*enter otp"><br><br>
        <input type="submit" name="submit" id="sub">-->
        <input type="submit" name="otp_send" value="Send OTP">
            
        </form> 
    
            

        <?php
       
        //$db=new connection_project();
        //$conn=$db->connect();
        
        //$res=mysqli_query($conn,"select * from user where email='$email'");
        
        
        /*if(isset($_POST['submit'])){
            include("connection_project.php");
        $db=new connection_project();
        $conn=$db->connect();
        function validate_mobile($mobile)
        {
            return preg_match('/^[6-9][0-9]{9}$/', $mobile);
        }
        function validate_email($email){
            return preg_match('/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/',$email);
        }
            

        $name=$_POST["fname"];
        $lname=$_POST["lname"];
        $age=$_POST["age"];
        $gender=$_POST["gender"];
        $address=$_POST["address"];
        $dob=$_POST["dob"];
        $city=$_POST["city"];
        $bloodgroup=$_POST["blood_group"];
        $donates=$_POST["predonated"];
        $donatedvalue=$_POST["donate_value"];
        $problem=$_POST["problem"];
        $problemdesc=$_POST["yes_problem"];
        $state=$_POST["state"];
        $contact=$_POST["contact"];
        $email=$_POST["email"];
        $pass=md5($_POST["pass"]); //sai786gaja
        $pass2=md5($_POST["conf_pass"]);
        
        if(!validate_mobile($contact)  )
        {
            echo '<script>alert("Please enter a valid phone number")</script>';
            return;
        }
        else if(!validate_email($email)){
            echo "Please enter a valid email id";
            return;
        }
        else if($pass!==$pass2){
            echo "Passwords don't match";
            return;

        }
        else{
        $res=mysqli_query($conn,"insert into donor values('$contact','$name','$lname','$age','$gender','$bloodgroup','$donates','$problem','$donatedvalue','$problemdesc','$address','$city','$state','$email','$pass','$dob')");
        if($res){
            echo "successfully inserted";
        }
        else{
            echo "error";
        }
    }
    }*/
    
        ?>  

    </body>
</html>