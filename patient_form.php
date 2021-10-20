<?php
session_start();
 $otp=rand(11111,99999);
 $_SESSION['otp']=$otp;

?>
<html>
	<head>
		<title>Patient Form</title>
        <script src="validation.js"></script>
        <script src = "cities.js"></script> 
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
        <form method = "POST">
        <label>First Name:</label>
        <input type="text" placeholder="*" name = "firstName"></input>
        <br><br>
        <label>Last Name:</label>
        <input type="text" placeholder="*" name = "lastName"></input>
        <br><br>
        <label>Gender:</label>
        <input type="radio" name="gender" value = "male" id = "male">Male</input>
        <input type="radio" name="gender" value = "female" id = "female">Female</input>
        <input type="radio" name="gender" value = "other" id = "other">Other</input>
        <br><br>
        <label>Date of Birth:</label>
        <input type="date" id="DOB" onchange="calculateAge()" name = "dob"></input>
        <br><br>
        <label>Age:</label>
        <input type="text" id="age" name="age"></input><br><br>
        <label>Blood Group:</label>
        <select  name = "bloodGroup">
        <option value="A +ve">A +ve</option>
                    <option value="A-">A -ve</option>
                    <option value="B+">B +ve</option>
                    <option value="B-">B -ve</option>
                    <option value="AB+">AB +ve</option>
                    <option value="AB-">AB -ve</option>
                    <option value="A1+">A1 +ve</option>
                    <option value="A1-">A1 -ve</option>
                    <option value="A2+">A2 +ve</option>
                    <option value="A2-">A2 -ve</option>
                    <option value="A1B+">A1B +ve</option>
                    <option value="A1B-">A1B -ve</option>
                    <option value="A2B+">A2B +ve</option>
                    <option value="A2B-">A2B -ve</option>
                    <option value="O+">O +ve</option>
                    <option value="O-">O -ve</option>
        </select>
        <br><br>
        <label>Address: </label>
        <textarea rows="1" cols="30" name = "address"></textarea>
        <br><br>
        <label>State: </label>
        <select onchange="print_city('state', this.selectedIndex);" id="sts" name ="state" class="form-control" required></select>
        <br><br>
        <label for="">City: </label>
        <select id ="state" class="form-control" name = "city" required></select>
        <script language="javascript">print_state("sts");</script>
        <br><br>
        <label >Contact Number: </label>
        <input id="phonenumber" type="tel" name = "phone"></input>
        <br><br>
        <label>Email ID: </label>
        <input type="email" id="email" name="email"></input>
        <br><br>
        <label>Password: </label>
        <input type="password" id="pass" placeholder="*" name = "pass">
        <br><br>
        <label>Confirm password: </label>
        <input type="password" id="conf_pass" placeholder="*" name = "cpass"><br><br>

        <input type="submit" name="submit_form" value="Send OTP" onclick="JavaScript: return validator()">
        </form>     
        <?php
    if(isset($_POST['submit_form'])){
        include("connection_project.php");
        $db=new connection_project();
        $conn=$db->connect();
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $gender = $_POST['gender'];
        $dob = $_POST['dob'];
        $bloodGroup = $_POST['bloodGroup'];
        $address = $_POST['address'];
        $state = $_POST['state'];
        $city = $_POST['city'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $cpass = $_POST['cpass'];
        $age = $_POST['age'];//date_diff(date_create($dob), date_create('now'))->y;
        $formType = "patient";
        echo $dob;
        function validate_mobile($mobile)
        {
            return preg_match('/^[6-9][0-9]{9}$/', $mobile);
        }
        function validate_email($email){
            return preg_match('/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/',$email);
        }
        if(!validate_mobile($phone)){
            echo '<script>alert("Please enter a valid phone number")</script>';
            return;
        }
        else if(!validate_email($email)){
            echo "Please enter a valid email id";
            return;
        }
        else if($pass!==$cpass){
            echo "Passwords don't match";
            return;
        }
        else{
            $res=mysqli_query($conn, "insert into patient(fname,lname,age,gender,dob,bloodGroup,address,city,state,contact,email,password) values('$firstName', '$lastName', '$age', '$gender', '$dob', '$bloodGroup', '$address', '$city', '$state', '$phone','$email','$pass')");
            $res2=mysqli_query($conn, "insert into login_details values('$email', '$pass', '$formType')");
            if($res){
                echo "successfully inserted";
            }
            else{
                echo "error";
            }
        }
    }
?>  
    </body>
</html>



