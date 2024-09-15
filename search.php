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

$sql = "SELECT * FROM branch WHERE (branch_name) LIKE ('%$search%') OR (branch_loc) LIKE ('%$search%')";
$res = $con->query($sql);
if ($res->num_rows > 0) {
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <title>Branch Details</title>
        <style>
            .content {
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column;
                margin: 20px;
            }
            .card {
                border: 1px solid #ccc;
                border-radius: 10px;
                padding: 20px;
                margin: 20px;
                box-shadow: 1px 2px 5px rgba(0, 0, 0, 0.1);
                max-width: 320px;
                text-align: center;
            }
            .card img {
                width: 100%;
                border-radius: 10px;
            }
            .card h3, .card h4,.card h2 {
                margin: 4px 0;
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
            
#btn{
  background-color: orange;
  color: #f7f7f7;
  width: 30px;
  height: 25px;
  border-radius: 2px;
}
        </style>
    </head>
    <body>
    <button class="btn btn-warning my-2" style="width: 200px;height: 50px; color: black;margin-left: 50px" onclick="window.location.href='branches.php'"><i class="bi bi-box-arrow-left"></i>  <b>Back</b></button>

        <div class="content container">
          
            <?php
            while ($row = mysqli_fetch_assoc($res)) {
              echo '<div class="container-fluid">';
    echo '<div class="content container">';

    echo '<form method="post" action="branches.php">';
    echo '<div class="card" >';
    echo '<h4 class="card-head" name="n3">' . "<span style='color:balck;'>ID_branch : <b>" . $row["id"] . "</b></span>" . '</h4>';

    echo '<h3 class="card-head" name="n3">' . "<span style='color:orange;'> <b>" . $row["branch_name"] . "</b></span>" . '</h3>';

    echo '<img class="card-media" src="img/' . $row['img'] . '" alt="branch image" name="n2">';
    echo '<h3 class="card-head" name="n3">' . "<span style='color:orange;'> location: </span>" . $row["branch_loc"] . '</h3>';
    echo "<br>";

    echo '<div class="d-flex justify-content-center gap-3">';
    echo '<button style="color:blue" id="btn" type="button" name="add" onclick="window.location.href=\'addbranches.php\';">
          <i class="bi bi-plus-circle"></i></button>';

          echo '<form method="post" action="branches.php">';
          echo '<input type="hidden" name="branch_id" value="' . $row["id"] . '">';
          echo '<button id="btn" style="color:red" type="submit" name="delete_branch" ><i class="bi bi-trash3-fill"></i></button>';
          echo '</form>';

          echo '<button style="color:green" id="btn" type="button" name="add" onclick="window.location.href=\'updatebr.php\';"><i class="bi bi-gear-fill"></i></button>';


    echo '</div>';
    echo '</form>';
    echo '</div>';
    echo '</div>';
            }
            ?>
        </div>
    </body>
    </html>
    <?php
} else {
    echo "<h1>Something goes wrong :(</h1>";
    echo "<h3>Your search did not return any results. Please try again.</h3><br>";
    echo '<a href="main.php"><h3>Go back to Main page</h3></a>';
}

$con->close();
?>
