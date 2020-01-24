<html>
<head>
	<link rel="stylesheet" type="text/css" href="css1.css">
</head>
<body class="beforeTextarea">
  <div class="Textarea">
    <form action="login3.php" method="POST" enctype="multipart/form-data">
  	  
      Text Area:<textarea name="comments" rows="5" cols="30" id="para1" pattern="/[a-zA-Z]+[|]+[0-9]+/$" required>
                </textarea><br>
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
