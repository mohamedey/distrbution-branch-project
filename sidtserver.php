<?php

$user_name = "root";
$password = "";
$database = "projectweb";
$server = "localhost";

$con = mysqli_connect($server, $user_name, $password, $database);

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

$date = $_POST['in1'];
$quantity = $_POST['in2'];
$id_pr = $_POST['in3'];

if (isset($_POST['go'])) {
    $sql = "SELECT num FROM importproduct WHERE id = $id_pr";
    $result = $con->query($sql);
    $row = $result->fetch_assoc();
    $num = $row['num'];

    if ($quantity > $num) {
        echo "
            <script>
                alert('The quantity you want to send is more than the available quantity in the stock. Please enter a value less than or equal to $num');
                window.location.href = 'distproduct.php';
            </script> ";

    } else {
        $sql = "INSERT INTO distrpution (Delivery_date, Quantity_sent, id_product) VALUES ('$date', '$quantity', '$id_pr')";
        $res = $con->query($sql);
        $Profit="SELECT cost FROM importproduct WHERE id = $id_pr";

        $result = $con->query($Profit);
        $row = $result->fetch_assoc();
        $cost = $row['cost'];
        $profit = $quantity * ($cost / $num) *1.5;

        
        if ($res) {
            if (mysqli_affected_rows($con) > 0) {
                $sum = $num - $quantity;
                $update = "UPDATE importproduct SET num = $sum WHERE id = $id_pr";
                $res = $con->query($update);
               

                $sql = "SELECT Parts_cost FROM importproduct WHERE id = $id_pr";
                $result = $con->query($sql);
                $row = $result->fetch_assoc();
                $x = $row['Parts_cost'];
                $costparts = $quantity * $x; ;


                echo "
                    <script>
                        alert('The product sent successfully! you can send another product');
                        alert('The total cost of the number of pieces exported to the branch is $costparts');
                        alert('Your profit is $profit');
                        window.location.href = 'distproduct.php';
                    </script>
                ";
            } else {
                echo "<h1>Something goes wrong</h1>";
            }
        } else {
            echo "<h1>Something goes wrong</h1>";
            echo "The value of id_product is Incorrect. (Please re-enter the values correctly)";
            echo "<a href='distproduct.php'>Go back</a>";
        }
    }
}

$con->close();
?>