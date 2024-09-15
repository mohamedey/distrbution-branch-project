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
$branchId=$_POST['in4'];

$bname = $_POST['in1'];
$image=$_POST['in2'];
$loc = $_POST['in3'];
$update=$_POST['update'];




$update = "UPDATE branch SET branch_name='$bname',img='$image',branch_loc='$loc' WHERE id='$branchId'";
$res = mysqli_query($con, $update);

if ($res) {
    if (mysqli_affected_rows($con) > 0) {
        ?>
        <script>
       if (confirm("Branch information Updated Successfully")) {
           window.location.href = "branches.php"}
        exit;
        </script>
        <?php
          
    } else {
        echo "<h1>Something goes wrong :(</h1>";
        ?>
        <a href='updatebr.php'><h3>Go back to the update page</h3></a>;
        <?php
    }
} else {
    die("Error: " . mysqli_error($con));
}

mysqli_close($con);
?>