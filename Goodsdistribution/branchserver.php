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

$bname = $_POST['in1'];
$img = $_POST['in2'];
$loc = $_POST['in3'];

$send = $_POST['addbranch'];

$insert = "INSERT INTO branch (branch_name,img, branch_loc) VALUES ('$bname','$img' , '$loc')";

if (mysqli_query($con, $insert)) {
    
    ?>
    <script>
  alert("Branch Added Successfully") 
       window.location.href = "branches.php"
    exit;
    </script>
    <?php
} else {
    echo "<h1>Something went wrong</h1>";
    ?>
    <a href="addbranches.php"><h3>Go back to Add branch page</h3></a>
    <?php
}
$con->close();
?>