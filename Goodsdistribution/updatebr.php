<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update Branch</title>
  <link rel="stylesheet" href="Style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

  <style>
    body{
      background-image: url('img/iu.jpg');
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
      <h2 style="color: white">UPDATE BRANCH INFO</h2>
      <form action="updatebranch.php" method="post" >
      <div class="user-box">
          <input type="text" name="in4" required="">
          <label>ID of Branch</label>
        </div>
        <div class="user-box">
          <input type="text" name="in1" required="">
          <label>Branch Name</label>
        </div>
        <div class="user-box">
          <input type="file" name="in2" required="">
        </div>
        <div class="user-box">
          <input type="text" name="in3" required="">
          <label>Branch Location</label>
        </div>
        <input class="login-box" style="color: aliceblue; margin-Top:160px;width: 70%" type="submit" value="Update" name="update">

        
        <a id="sina" style="color: aliceblue;" href="branches.php"> Back to Previous page </a>
      </form>
    </div>
  </div>
</body>
</html>