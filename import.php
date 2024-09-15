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
    background-image: url('img/mm.png');
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
  <h2 class="text-warning" style=" font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">Add products</h2>
  <form action="addserver.php" method="post">
    <div class="user-box">
      <input type="text" name="in1"  required="">
      <label>Product Name</label>
    </div>
    <div class="user-box">
      <input type="text" name="in2" required="">
      <label>Number of products</label>
    </div>
    <div class="user-box">
      <input type="date" name="in3" required="">
    </div>
    <div class="user-box">
      <input type="text" name="in4" required="">
      <label>Total cost</label>
    </div>

    <div class="user-box">
      <input type="text" name="in6" required="">
      <label>Cost per piece</label>
    </div>
    <div class="user-box">
      <input type="text" name="in7" required="">
      <label>Sale_price</label>
    </div>
    <div class="user-box">
      <input type="text" name="in5" required="">
      <label>Place of manufacture</label>
    </div>

    <input class="btn btn-warning " style="color: aliceblue; margin-Top:10px;margin-left: 25px;width: 80%" type="submit" value="Add" name="add">
  <input type="button" class="btn btn-outline-warning" style="color: aliceblue; margin-Top:10px;margin-left: 25px;width: 80%" onclick="document.location.href='main.php'" value="Back">

  </form>
</div>


	
</div>



</body>
</html>






