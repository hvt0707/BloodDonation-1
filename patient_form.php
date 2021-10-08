<?php
    if(isset($_POST['submit'])){
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
        $age = date_diff(date_create($dob), date_create('now'))->y;
        echo "$dob";
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
            $res=mysqli_query($conn, "insert into patient values('$email', '$firstName', '$$lastName', '$age', '$gender', '$dob', '$bloodGroup', '$address', '$city', '$state', '$phone', '$pass')");
            if($res){
                echo "successfully inserted";
            }
            else{
                echo "error";
            }
        }
    }
?>