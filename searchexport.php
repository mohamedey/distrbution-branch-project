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

$search = $_POST['search'];
$send = $_POST['ser'];

$sql = "SELECT d.id, d.Delivery_date, d.Quantity_sent, d.id_product, i.product_name 
        FROM distrpution d
        JOIN importproduct i ON d.id_product = i.id
        WHERE d.Delivery_date LIKE '%$search%'";

$res = $con->query($sql);
if ($res->num_rows > 0) {
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <title>Distribution Details</title>
        <style>
            .content {
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column;
                margin: 20px;
            }
            .table-container {
                width: 90%;
                margin: auto;
            }
            th, td {
                text-align: center;
            }
        </style>
    </head>
    <body>
    <button class="btn btn-warning my-2" style="width: 200px;height: 50px; color: black;margin-left: 50px" onclick="window.location.href='distrpution.php'"><i class="bi bi-box-arrow-left"></i>  <b>Back</b></button>

        <div class="content container">
            <div class="table-container">
                <table class="table table-bordered table-striped">
                    <thead class="thead-dark">
                        <tr class="table-dark">
                            <th>ID</th>
                            <th>Delivery Date</th>
                            <th>Quantity Sent</th>
                            <th>ID Product</th>
                            <th>Product Name</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($row = mysqli_fetch_assoc($res)) {
                            echo '<tr>';
                            echo '<td>' . $row["id"] . '</td>';
                            echo '<td>' . $row["Delivery_date"] . '</td>';
                            echo '<td>' . $row["Quantity_sent"] . '</td>';
                            echo '<td>' . $row["id_product"] . '</td>';
                            echo '<td>' . $row["product_name"] . '</td>';
                            echo '</tr>';
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </body>
    </html>
    <?php
} else {
    echo "<h1 style='color:red'> !! There are no goods exported on date $search</h1>";
    echo "<h3>Your search did not return any results. Please try again.</h3><br>";
    echo '<a href="distrpution.php"><h3>Go back to previous page</h3></a>';
}

$con->close();
?>
