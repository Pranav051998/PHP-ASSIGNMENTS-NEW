<?php
    include "link.php";
    include "query.php";
    echo "<link rel='stylesheet'type='text/css' href='css2.css?v=2'>";
    $_SESSION['value4']="";
		if ($_SERVER["REQUEST_METHOD"]=="POST") 
		     {    ob_start(); 
		            echo "<div class='Fourthphp'>";        
		     	     $telephone=$_POST["phone"];
		                           // It will check whether phone Number matches with given format
		                           if(preg_match("/^[+91]{3}[1-9]{1}[0-9]{9}$/",$telephone))
		                               {echo "Mobile:".$telephone."<br>";
		                               
		                        }
		                        $_SESSION['value4']=ob_get_contents();
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
<head>
	<link rel="stylesheet" type="text/css" href="css2.css?v=2">
</head>
<body class="beforeTelephone">
	<div class="Telephone">
		 <h2 class="headingTelephone">Enter your Mobile number with Country code(+91)</h2>
         <form action="" method="POST" enctype="multipart/form-data">
		      Telephone :<input type="tel" name="phone" pattern="[+91]{3}[1-9]{1}[0-9]{9}" maxlength="13" required>
		                 <input type="Submit" name="upload" value="Submit">
		                 <a class="Button" href="logout.php">logout</a>
         </form>
    </div>
</body>
</html>

