<?php
class connection_project{

function connect(){
 $hostname='sql452.main-hosting.eu:3306';
 $username='u159657273_admin1';
 $password='Team12345';
 $database='u159657273_bloodDonation';
$con=mysqli_connect($hostname,$username,$password,$database);
if($con){
    return $con;
}
else{
    echo "Problem in connection";
    echo mysqli_connect_error();
}
}
}
?>