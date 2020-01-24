<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css1.css">
</head>
<body class="beforeTelephone">
  <form action="login4.php" method="POST" enctype="multipart/form-data">
  	  <div class="Telephone">
      Telephone :<input type="tel" name="phone" pattern="[+91]{3}[1-9]{1}[0-9]{9}" maxlength="13" required>
                 <input type="Submit" name="upload" value="Submit">
      </div>
  </form>
</body>
</html>
<?php
 session_start();
 if(!isset($_SESSION['username']) && !isset($_SESSION['password']))
  { header("location:login.php");
  }
  ?>

