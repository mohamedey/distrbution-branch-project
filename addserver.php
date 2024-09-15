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

$name = $_POST['in1'];
$num = $_POST['in2'];
$date = $_POST['in3'];
$cost = $_POST['in4'];
$costper1 = $_POST['in6'];
$costper2 = $_POST['in7'];

$madein = $_POST['in5'];

$login = $_POST['add'];


?>
<script>
    var r = confirm("Are you sure you want to add this product?");
    if (r == true) {
        <?php
        $insert = "INSERT INTO importproduct (product_name,num,arrival_date, cost,made_in,Parts_cost,sale_price) VALUES ('$name', '$num', '$date', '$cost', '$madein','$costper1',$costper2)";

        $res = mysqli_query($con, $insert);
        if ($res) {
            if (mysqli_affected_rows($con) > 0) {
                ?>
                    alert("The product has been added successfully !!") 
                        window.location.href = "import.php"
                
                <?php
            } else {
                echo "<h1>Something goes wrong</h1>";
              
            }
        } else {
            die("Error: " . mysqli_error($con));
        }
        ?>
    } else {
        alert("The product was not added");
        window.location.href = "import.php"

    }

</script>
<?php
mysqli_close($con);
?>