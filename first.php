<html>
<head>
	  <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="demo.js?v=1"></script>
      <link rel="stylesheet" type="text/css" href="css1.css">
</head>
<body class="beforefirstform">
	<form action="login1.php" method="POST" enctype="multipart/form-data">
                 <div class="firstform">
                 First Name:<input type="text" name="fname" id="fname" pattern="[a-zA-Z]{1,}$" required> <h6>*only alphabets are allowed</h6><br>
                 Last  Name:<input type="text" name="lname" id="lname" onkeyup="Solution()" pattern="[a-zA-Z]{1,}$" required><h6>*only alphabets are allowed</h6><br>
                 Full  Name:<input type="text" name="Fulname" id="Pranav"  disabled="disabled"><br>
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
