<?php
    include "link.php";
    include "query.php";
    echo "<link rel='stylesheet'type='text/css' href='css2.css?v=2'>";
    $_SESSION['value2']="";
       if ($_SERVER["REQUEST_METHOD"]=="POST") 
      {     ob_start();
            echo "<div class='Secondphp'>";
            //Checking through isset whether image is avialable or not
            if (isset($_POST["upload"]))
                  { $file_name= $_FILES['file']['name'];
                    $file_type= $_FILES['file']['type'];
                    $file_size= $_FILES['file']['size'];
                    $file_tem_Loc= $_FILES['file']['tmp_name'];
                    $file_store= "/var/www/html/upload/".$file_name;
                    move_uploaded_file($file_tem_Loc,$file_store);//this function is used to upload file from temporary storage to your device
                    echo "<img src=".$file_store.">";///for printing the image that the user takes
                  }
              $_SESSION['value2']=ob_get_contents();
                         echo "<div class='links'>";
                             echo "<a href='first.php'>1</a>";
                             echo "<a href='Second.php'>2</a>";
                             echo "<a href='Third.php'>3</a>";
                             echo "<a href='Fourth.php'>4</a>";
                             echo "<a href='Five.php'>5</a>";
                             echo "<a href='Six.php'>6</a>";
                             echo "</div>";
                          echo "</div>";
      
      } 
?>
<html>
<title>First PhP</title>
<head>
	<link rel="stylesheet" type="text/css" href="css2.css?v=2">
</head>
<body class="beforeSecondform">
      <div class="Secondform">
      	<h2 class="Secondformheading">Upload the Image</h2>
       <form action="" method="POST" enctype="multipart/form-data">
		      Image     :<input type="file" name="file" id="pic" required>
		                  <input type="Submit" name="upload" value="Submit">
                      <a  class="Button" href="logout.php">logout</a>
       </form>
      </div>
</body>
</html>

