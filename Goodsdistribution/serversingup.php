<?php
$user_name = "root";
$password = "";
$database = "projectweb";
$server = "localhost";

$con = mysqli_connect($server, $user_name, $password, $database);

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

mysqli_select_db($con, $database);

$username = $_POST['in1'];
$password = $_POST['in2'];
$email = $_POST['in3'];
$phone = $_POST['in4'];

$send = $_POST['signup'];

$insert = "INSERT INTO user (name,email, pass, phone) VALUES ('$username','$email' , '$password', ' $phone')";
$res=$con->query($insert);
if($res->num_rows== 0){
    
    header("Location: login.php");


}else{
    echo"<h1>Something goes wrong</h1>";
    ?>
    <a href="signup.php"><h3>Go back to Signup page</h3></a>
    <?php



}
$con->close();
