<html>
<title>First PhP</title>
<head>
	<link rel="stylesheet" type="text/css" href="css1.css">
</head>
<body class="beforeSecondform">
  <form action="login2.php" method="POST" enctype="multipart/form-data">
  	  <div class="Secondform">
      Image     :<input type="file" name="file" id="pic" required>
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
