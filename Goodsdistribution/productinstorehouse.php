<?php
$servername="localhost";
$username="root";
$password="";
$databace="projectweb";


$conn=mysqli_connect($servername,$username,$password,$databace);
if(!$conn){
    die("Conection faild".mysqli_connect_error());
}
else{
eCHO"conected succesfuly <br><br><br>";

$sql="SELECT * from importproduct  ORDER BY  id  ";

}

$tabledata="

<table>
<tr>
<th>Id</th>
<th>Product_Name</th>
<th>number of product</th>
<th>arrival date</th>
<th>Total cost</th>
<th>Price per piece</th>
<th>Made in</th>


</tr>



";

$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){

    while($row = mysqli_fetch_assoc($result)){

      $tabledata=$tabledata . "
      <tr>
       
      <td> " .$row["id"] . " </td>
      <td> " .$row["product_name"] . " </td>
      <td> " .$row["num"] . " </td>
      <td> " .$row["arrival_date"] . " </td>
      <td> " .$row["cost"] . " </td>
       <td> " .$row["Parts_cost"] . " </td>
      <td> " .$row["made_in"] . " </td>
      


      </tr>
      
      ";



    }
    $tabledata=$tabledata . "</table>";
}
else{
    echo"<h1 style='text-align: center;color:red'>You don't have any product in the storehouse!!</h1>";}

$conn->close();

?> 


















<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <title>Storehouse page</title>
    <style>
        .linecolor{
            color: black;}

        table , th ,td {
            border: 3px solid black;
        }
        th{
            background-color: black;
            color: orange;
            text-align: center;
            padding: 10px;
        }
        td{
          background-color: orange;
          color: black;
          text-align: center;
          padding: 10px;
        }
      table{
        width: 100%;
        text-align: center;
        border-collapse: collapse;
        margin-top: 100px;

      
      }
        
    </style>
</head>
<body style="background-color:#f7f7f7">
<nav class="navbar bg-body-tertiary bg-dark fixed-top">
    <div class="container-fluid">
      <h2 style="color: orange; margin-left: 50px; font-size: 25px" class="navbar-brand " href="#"><b>Mo System</b></h2>
      <form class="d-flex  mt-3" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button style="color:white;" class="btn btn-outline-success bg-warning" type="submit">Search</button>
          </form>


      <button class="navbar-toggler bg-warning" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <i class="bi bi-list-ul"></i>
      </button>
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <h4 class="offcanvas-title text-warning" id="offcanvasNavbarLabel"><b>Mo System</b> </h4>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link active linecolor " aria-current="page" href="main.php"><i class="bi bi-house-door-fill"></i>   <b>Home</b></a>
            </li>
            <li class="nav-item">
              <a class="nav-link linecolor" href="main.php#about"><i class="bi bi-info-circle-fill"></i>   <b>About System</b></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle linecolor" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
             <b> <i class="bi bi-three-dots-vertical"></i>    Menu</b>
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="update.php"><i class="bi bi-person-fill-gear"></i>   <b>Update your information</b></a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="login.php"><i class="bi bi-box-arrow-right"></i>   <b>Logout</b></a></li>
              </ul>
            </li>
          </ul>
         
        </div>
      </div>
    </div>
  </nav>



<div class="container-fluid ">
  <button class="btn btn-warning my-2" style="width: 200px;height: 50px; color: black" onclick="window.location.href='exportpage.php'"><i class="bi bi-box-arrow-left"></i>  <b>Back</b></button>
</div>
<h1 style="text-align: center;"><b>All products in the main warehouse</b></h1>
<div class="container-fluid">
<?php
echo $tabledata;
echo"<br><br>";

    ?>
</div>

</body>
</html>