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
    background-image: url('img/importbg.jpg');
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
  <h2 style="color: orange">Create account</h2>
  <form action="serversingup.php" method="post">
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
      <label>Phone number</label>
    </div>


    <input class="login-box" style="color: aliceblue; margin-Top:130px;width: 70%" type="submit" value="Create" name="signup">
    
        <a id="sina"style="color: aliceblue;" href="login.php"> I have an account! Back to Login page</a>

  </form>
</div>


	
</div>



</body>
</html>






