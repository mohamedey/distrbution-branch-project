<!DOCTYPE html>
<head>
    <title>Login page</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="Style.css">  
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
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

<body >


<div class="container">
<div class="login-box">
  <h2 style="color: orange">LOGIN</h2>
  <form action= "server.php"  method="post">
    <div class="user-box">
      <input type="text" name="in1" required>
      <label>email</label>
    </div>
    <div class="user-box">
      <input type="password" name="in2" required >
      <label>password</label>
    </div>


    <input class="login-box" style="color: aliceblue;margin-bottom:50px ;width: 70%" type="submit" value="LOGIN" name="login">
    
        <a id="sina"style="color: aliceblue;margin-top: 170px" href="signup.php">Don't have an account? Create one !</a>
        <hr>
        <a style="font-size: 14px ;" href="forgetpassword.php">Forgot Password ! </a>


  </form>
</div>


</div>




</body>
</html>






