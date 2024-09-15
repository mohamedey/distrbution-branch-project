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
$login = $_POST['update'];

$update = "UPDATE user SET name='$username', pass='$password', email='$email', phone='$phone' WHERE phone='$phone' or email='$email'";
$res = mysqli_query($con, $update);

if ($res) {
    if (mysqli_affected_rows($con) > 0) {
        ?>
        <script>
       if (confirm("Your information Updated Successfully")) {
           window.location.href = "main.php"}
        exit;
        </script>
        <?php
          
    } else {
        echo "<h1>Something goes wrong :(</h1>";
        ?>
        <a href='update.php'><h3>Go back to the update page</h3></a>;
        <?php
    }
} else {
    die("Error: " . mysqli_error($con));
}

mysqli_close($con);
?>