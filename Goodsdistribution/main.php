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

    <title>Main page</title>
    <style>
        .linecolor{
            color: black;
        }
    </style>
</head>
<body style="background-color:#f7f7f7">
<nav class="navbar bg-body-tertiary bg-dark fixed-top">
    <div class="container-fluid">
      <h2 style="color: orange; margin-left: 50px; font-size: 25px" class="navbar-brand " href="#"><b>Mo System</b></h2>
      <form class="d-flex  mt-3" role="search" method="post" action="search.php">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search">
            <input class="btn btn-warning" type="submit" value="Search" name="ser">
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
              <a class="nav-link linecolor" href="#about"><i class="bi bi-info-circle-fill"></i>   <b>About System</b></a>
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

<div class="container-fluid">
<section class="main">
<div>
    <h2 style="color: orange;"><b>Hello,This system</b> <br> <span style="color: black"> <b>Developed by Mohamed Badawi</b></span><img src="img/ll.gif" alt="logo" width="100" height="50">
    </h2>


<div class="social-icons">
        <a style="color: orange;" href="https://www.facebook.com/mohamad.ebadawi.16?mibextid=ZbWKwL" target="_blank"><i class="fa-brands fa-facebook"></i></a>
        <a style="color: orange;" href="https://www.instagram.com/mohamadebadawi?igsh=MTBvMjA0cjhwNzM1dg==" target="_blank"><i class="fa-brands fa-instagram"></i></a>
        <a style="color: orange;" href="https://www.linkedin.com/in/mo-badawi-651080243?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" target="_blank"><i class="fa-brands fa-linkedin"></i></a>

    </div>
    <img  src="img/h.gif" alt="photo gif" width="100%" height="400px">
    <br>
</div>
</section>
<div class="about" id=about>
        <h1 style="color: orange;" >About System</h1>
        <div class="container">
            <p>      
                     This system is designed to assist large retail businesses with multiple 
                     branches to document the distribution and import of goods by integrating them into the system.

                     It allows you to enter branches, distribute the goods to each branch, and calculate the profit values ​​from the goods sold.
            </p>
        </div>
</div>


<section class="cards text-dark" id="services">
        <h1 style="color: orange;" class="title"><b>Services</b></h1>

        <div class="content container">

        <a href="import.php" style="text-decoration:none; color:black">
            <div class="card">
                <div class="icon" style="color:orange">
                <i class="bi bi-arrow-down-circle-fill"></i>
               </div>
                <div class="info">
                    <h2 style="color:orange">Import</h2>
                    <p>You can add imported goods to the database</p>
                </div>
            </div>
            </a>

            
        <a href="exportpage.php" style="text-decoration:none; color:black">
            <div class="card">
                <div class="icon" style="color:orange">
                <i class="bi bi-truck"></i>
                </div>
                <div class="info">
                    <h3 style="color:orange">Exporting goods to branches</h3>
                    <p>You can  exporting goods to the branches</p>
                </div>
            </div>
            </a>

            <a href="branches.php" style="text-decoration:none; color:black">
            <div class="card">
                <div class="icon" style="color:orange">
                  <img src="img/q.png" width="200" height="170">
               </div>
                <div class="info">
                    <h2 style="color:orange">Our branches</h2>

                    <p>You can view the branches and modify them.</p>
                </div>
            </div>
            </a>
           

            <a href="statestic.php" style="text-decoration:none; color:black">
            <div class="card">
                <div class="icon" style="color:orange">
                  <img style="border-radius:3px;" src="img/t.png" width="250" height="180">
               </div>
                <div class="info">
                    <h2 style="color:orange">Statistic option</h2>

                    <p>It is displayed The export percentage of the branches and the expected profit.</p>
                </div>
            </div>
            </a>
           
          
        </div>

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