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

$update = "UPDATE user SET  pass='$password' WHERE  email='$email'";
$res = mysqli_query($con, $update);

if ($res) {
    if (mysqli_affected_rows($con) > 0) {
        ?>
        <script>
       if (confirm("Your password has been reset successfully ")) {
           window.location.href = "login.php"}
        exit;
        </script>
        <?php
          
    } else {
        echo "<h1>Something goes wrong ! Rewrite your email correctly</h1>";
        ?>
        <a href='forgetpassword.php'><h3>Go back to the Rest page page</h3></a>;
        <?php
    }
} else {
    die("Error: " . mysqli_error($con));
}

mysqli_close($con);
?>