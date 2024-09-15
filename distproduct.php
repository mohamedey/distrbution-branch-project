<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Import</title>
<link rel="stylesheet" href="Style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<style>
  body{
    background-image: url('img/pr.png');
    margin:0;
    padding:0;
    font-family: sans-serif;
    background-size: 100% 100%;
    background-attachment: fixed;
    background-repeat: no-repeat;
  }
  a{
    text-decoration: none;
    color: aliceblue;
    font-size: 20px;
    margin-left: 15px;
    font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif
  }
</style>

</head>

<body>


<div class="container">
<div class="login-box">
  <h2 class="text-warning" style=" font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">Distribution info </h2>
  <form action="sidtserver.php" method="post">
  <div class="user-box">
      <input type="date" name="in1"  required>
    </div>
    <div class="user-box">
      <input type="text" name="in2" required="">
      <label>Quantity sent</label>
    </div>
    <div class="user-box">
      <input type="text" name="in3" required="">
      <label>Enter the id_product</label>

    </div>
    

    <input class="btn btn-warning " style="color: aliceblue; margin-Top:10px;margin-left: 25px;width: 80%" type="submit" value="GO" name="go">
  <input type="button" class="btn btn-outline-warning" style="color: aliceblue; margin-Top:10px;margin-left: 25px;width: 80%" onclick="document.location.href='main.php'" value="Back To main page">
<a href="distrpution.php">Back to Previous page!!</a>
  </form>
</div>


	
</div>



</body>
</html>






