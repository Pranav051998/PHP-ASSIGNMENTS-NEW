<?php
 session_start();
 if(isset($_SESSION['username']) && (isset($_SESSION['password'])))
  {
    header("Location:choose.php");
  }
?>
<html>
<head>
	 <link rel="stylesheet" type="text/css" href="css1.css">
</head>
<body class="loginform">
    <form action="loginform.php" method="POST" enctype="multipart/form-data">
        <div>
    	<h1>LOGIN</h1>
    	<div class="first">
        Name:<input type="text" name="name"><br><br>
        </div>
        <div class="Second">
        Password:<input type="password" name="password1"><br><br>
        </div>
        <div class="Third">
                <input type="Submit" name="submit" value="Submit">
        </div>
    </div>
    </form>
</body>
</html>

