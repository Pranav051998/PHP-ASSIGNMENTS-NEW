<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="login6.php" method="POST" enctype="multipart/form-data">
		<div>
	       <h2>Click Below</h2>
	       <input type="Submit" name="upload" value="Download">
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