<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>SignUp</title>
<link rel="stylesheet" href="Style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>


<style>
  body{
    background-image: url('img/br.jpg');
    margin:0;
    padding:0;
    font-family: sans-serif;
    background-size: 100% 100%;
    background-attachment: fixed;
    background-repeat: no-repeat;
  }
</style>
</head>

<body>


<div class="container">
<div class="login-box">
  <h2 style="color: white">ADD NEW BRANCH</h2>
  <form action="branchserver.php" method="post">
    <div class="user-box">
      <input type="text" name="in1"  required="">
      <label>Branch_Name</label>
    </div>
    <div class="user-box">
      
      <input type="file" name="in2" required="">
    </div>
    
    <div class="user-box">
      <input type="text" name="in3" required="">
      <label>Branch_Location</label>
    </div>


    <input class="login-box" style="color: aliceblue; margin-Top:110px;width: 70%" type="submit" value="ADD" name="addbranch">
    
        <a id="sina"style="color: aliceblue;" href="branches.php"> Back to Previous page !</a>

  </form>
</div>


	
</div>



</body>
</html>






