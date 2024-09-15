<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Update info</title>
<link rel="stylesheet" href="Style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body style=" margin:0;padding:0;font-family: sans-serif;background-color:#f7f7f7">


<div class="container">
<div class="login-box">
  <h2 style="color: orange">Update information</h2>
  <form action="updateserver.php" method="post">
    <div class="user-box">
      <input type="text" name="in1"  required="">
      <label>UserName</label>
    </div>
    <div class="user-box">
      <input type="password" name="in2" required="">
      <label>password</label>
    </div>
    <div class="user-box">
      <input type="text" name="in3" required="">
      <label>email</label>
    </div>
<div class="user-box">
  <input type="text" name="in4" required="">
  <label for="in4">Phone</label>


</div>
    <input class="login-box" style="color: aliceblue; margin-Top:130px;width: 70%" type="submit" value="Update" name="update">
    
        <a id="sina"style="color: white;" href="main.php"> Go back to main page !</a>

  </form>
</div>


	
</div>



</body>
</html>






