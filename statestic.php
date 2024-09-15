<?php
$user_name = "root";
$password = "";
$database = "projectweb";
$server = "localhost";

$db = new mysqli($server, $user_name, $password, $database);

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

$importData = array();
$sql = "SELECT id, num, product_name FROM importproduct"; 
$resultImport = $db->query($sql);

if ($resultImport->num_rows > 0) {
    while ($rowImport = $resultImport->fetch_assoc()) {
        $importData[$rowImport['product_name']] = $rowImport['num']; 
    }
} else {
    echo "No data found in import table";
}

$exportData = array();
$sqlExport = "SELECT d.id, d.Quantity_sent, i.product_name FROM distrpution d
              JOIN importproduct i ON d.id = i.id"; 
$resultExport = $db->query($sqlExport);

if ($resultExport->num_rows > 0) {
    while ($rowExport = $resultExport->fetch_assoc()) {
        $exportData[$rowExport['product_name']] = $rowExport['Quantity_sent'];
    }
} else {
    echo "No data found in export table";
}

$productData = array();
$sqlProducts = "SELECT id, sale_price, Parts_cost, product_name FROM importproduct"; 
$resultProducts = $db->query($sqlProducts);

if ($resultProducts->num_rows > 0) {
    while ($rowProduct = $resultProducts->fetch_assoc()) {
        $productData[$rowProduct['product_name']] = array(
            'sale_price' => $rowProduct['sale_price'],
            'Parts_cost' => $rowProduct['Parts_cost']
        );
    }
} else {
    echo "No data found in import product table";
}

$tableData = array();

foreach ($importData as $product_name => $importQuantity) {
    $row = array();
    $row['product_name'] = $product_name; 
    $row['num'] = $importQuantity;

    if (isset($exportData[$product_name])) { 
        $exportQuantity = $exportData[$product_name];
    } else {
        $exportQuantity = 0;
    }

    $row['Quantity_sent'] = $exportQuantity;
    $row['net_quantity'] = $importQuantity - $exportQuantity;

    if (isset($productData[$product_name])) {
        $salePrice = $productData[$product_name]['sale_price'];
        $cost = $productData[$product_name]['Parts_cost'];

        $row['sale_price'] = $salePrice;
        $row['Parts_cost'] = $cost;

        $netProfit = $row['Quantity_sent'] * ($salePrice - $cost);
        $row['net'] = $netProfit; 
        $tableData[] = $row; 
    }
}

$db->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <title>ٍStatestic page</title>
    <style>
        table {
            margin-top: 50px;
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            text-align: center;
            padding: 8px;
            border: 2px solid black;
        }

        th {
            background-color: #f0f0f0;
        }
    </style>
</head>
<body style="background-color:#f7f7f7">
<h3 style="text-align: center; color: orange">Here there is a quantity of import quantity of export, profitability and profitability of goods!</h3>
<button class="btn btn-warning my-3" style="width: 200px;height: 50px; color: black;margin-top: 30px;margin-left: 30px" onclick="window.location.href='main.php'"><i class="bi bi-box-arrow-left"></i>  <b>Back</b></button>

<div class="container-fluid">
    <table>
        <tr>
            <th style="background-color: orange;">اسم المنتج</th>
            <th style="background-color: orange;">كمية الاستيراد</th>
            <th style="background-color: orange;">كمية التصدير</th>
            <th style="background-color: orange;">الكمية الصافية</th>
            <th style="background-color: orange;">تكلفة المنتج</th>
            <th style="background-color: orange;">سعر البيع</th>
            <th style="background-color: #84D1AB;">صافي الربح</th>
        </tr>

        <?php foreach ($tableData as $row): ?>
        <tr>
            <td style ="text-align: center;"><b><?php echo $row['product_name']; ?></td>
            <td><?php echo $row['num']; ?></td>
            <td><?php echo $row['Quantity_sent']; ?></td>
            <td><?php echo $row['net_quantity']; ?></td>
            <td><?php echo $row['Parts_cost']; ?></td>
            <td><?php echo $row['sale_price']; ?></td>
            <td><?php echo $row['net']; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>

</body>
</html>
