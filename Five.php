
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css1.css">
</head>
<body class="beforeEmail">
  <form action="login5.php" method="POST" enctype="multipart/form-data">
  	  <div class="Email">
      Email     :<input type="text" name="emailaddress" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2, 4}$" required>
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
