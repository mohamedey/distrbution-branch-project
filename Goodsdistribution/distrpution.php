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

    <title>Distribution page</title>
    <style>
        .linecolor{
            color: black;
            
        }
        img{
          border-radius: 20px;
          
        }

        .card{
        box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;
      }
     
      
.h:hover{
    transform: translateY(5px);
    transition: .5s;
  box-shadow: 0px 8px 15px rgba(235, 227, 10, 0.3);
}


      button {
  font-family: inherit;
  font-size: 18px;
  background: linear-gradient(to bottom, orange 0%,orange 100%);
  color: white;
  padding: 0.8em 1.2em;
  display: flex;
  align-items: center;
  justify-content: center;
  border: none;
  border-radius: 25px;
  box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.2);
  transition: all 0.3s;
}

button:hover {
  transform: translateY(-3px);
  box-shadow: 0px 8px 15px rgba(8, 23, 239, 0.3);
}

button:active {
  transform: scale(0.95);
  box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.2);
}


button svg {
  width: 18px;
  height: 18px;
  fill: white;
  transition: all 0.3s;
}

button .svg-wrapper {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 30px;
  height: 30px;
  border-radius: 50%;
  background-color: rgba(255, 255, 255, 0.2);
  margin-right: 0.5em;
  transition: all 0.3s;
}

button:hover .svg-wrapper {
  background-color: rgba(255, 255, 255, 0.5);
}

button:hover svg {
  transform: rotate(45deg);
}
        
    </style>
</head>
<body style="background-color:#f7f7f7">
  <div class="container-fluid">
<nav class="navbar bg-body-tertiary bg-dark fixed-top">
    <div class="container-fluid">
      <h2 style="color: orange; margin-left: 50px; font-size: 25px" class="navbar-brand " href="#"><b>Mo System</b></h2>
      <form class="d-flex  mt-3" role="search" method="post" action="searchexport.php">
            <input class="form-control me-2" type="date" placeholder="Enter date of export" aria-label="Search" name="search" >
            <input class="btn btn-outline-warning" type="submit" value="Search" name="ser">
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
  </div>




<section class="cards text-dark" id="services">

<div class="container-fluid ">
  <button class="btn btn-warning my-2" style="width: 200px;height: 50px; color: black" onclick="window.location.href='exportpage.php'"><i class="bi bi-box-arrow-left"></i>  <b>Back</b></button>
</div>



        
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

$sql = "SELECT * FROM branch";
$result = mysqli_query($con, $sql);


if (mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    echo'<div class="container-fluid">';
    echo'<div class="content container ">';

    echo '<form method="post" action="distrpution.php">';
      echo '<div class="card" >';
      echo '<h3 class="card-head" name="n3">'."<span style='color:orange;'> <b>". $row["branch_name"] ."</b></span>". '</h3>';
      echo '<img class="card-media" src="img/' . $row['img'] . '" alt="branch image" name="n2">';
      echo"<br>";
      echo '<button type="button" name="addall" onclick="window.location.href=\'distproduct.php\';">Next</button>';
      echo"</form>";
      echo'</div>';
      echo'</div>';

  }
} else {
  echo " Sorry Something goes wrong :(";
}

mysqli_close($con);
?>


    </section>



    <footer class="footer">
    <p class="footer-title">Copyrights by @ <span style="color: orange;">Mohammed Albadawi</span></p>
    <div>
        <h2 style="float: right; color: aliceblue; margin-right: 50px;">Contact with me:</h2>
    </div>
    <div style="clear: both;"></div>
    <pre style="color: rgb(170, 168, 168);">
        <b><i id="i" class="bi bi-house-fill"></i>  Home :</b> <i>Jordan-Amman (Airport Street)</i>
        <b><i id="i" class="bi bi-telephone-fill"></i>  Phone Number :</b> <i>0795960218</i>
        <b><i id="i" class="bi bi-envelope-fill"></i>  Email :</b> <i>mobadawi65@gmail.com</i>
    </pre>
    <pre style="color: rgb(170, 168, 168);">
        My name is Mohammad Eyad
        and I study computer science
        at Mu'tah University and
        I am a web developer.
        This is an online System that
        It allows you to enter branches, 
        distribute the goods to each branch.
    </pre>
</footer>



</div>



</body>
</html>