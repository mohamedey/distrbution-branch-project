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

$email = $_POST['in1'];
$password = $_POST['in2'];

$send = $_POST['login'];


$login="select * from user where email='$email' AND pass='$password'  ";
$name="select name from user where email='$email' AND pass='$password'  ";
$r=$con->query($name);

$res=$con->query($login);
if($res->num_rows==1){
?>    
    <script>
  alert("Welcome " + "<?php echo $r->fetch_assoc()['name']; ?>") 
       window.location.href = "main.php"
    exit;
    </script>
    <?php

}else{
    echo"<h1>Something goes wrong :(</h1>";
    echo"<h3>your email or password is incorrect (Please refill the required information correctly) </h3><br>";
    ?>
    <a href="login.php"><h3>Go back to Login page</h3></a>
    <?php



}
$con->close();
