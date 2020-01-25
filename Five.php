<?php
    include "link.php";
    include "query.php";
    echo "<link rel='stylesheet'type='text/css' href='css2.css?v=2'>";
    $_SESSION['value5']="";
		if ($_SERVER["REQUEST_METHOD"]=="POST") 

		       {    ob_start();
		       	      echo "<div class='Fivephp'>";
		             // set API Access Key
		              $access_key='97b511ae43058f03b8f933ca15060141';

		              // set email address
		              $email_address=$_POST["emailaddress"];

		              // Initialize CURL:
		              $ch = curl_init('http://apilayer.net/api/check?access_key='.$access_key.'&email='.$email_address.'');  
		              curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

		              // Store the data:
		              $json = curl_exec($ch);
		              curl_close($ch);

		              // Decode JSON response:
		              $validationResult = json_decode($json, true);

		              // Access and use your preferred validation result objects
		              if (($validationResult['format_valid']==1)&&($validationResult['smtp_check']==1)&&($validationResult['score']>=0)) 
		                 echo "<br>".$email_address." is a valid email";
		              else
		                 echo "<br>".$email_address." not a valid email";
		               $_SESSION['value5']=ob_get_contents();
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
<body class="beforeEmail">
	     <div class="Email">
	     	 <h2 class="headingEmail">Enter your Email</h2>
			 <form action="" method="POST" enctype="multipart/form-data">
					     Email     :<input type="text" name="emailaddress" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2, 4}$" required>
			 		                 <input type="Submit" name="upload" value="Submit">
			 </form>
			                 <a class="Button" href="logout.php">logout</a>
         </div>
</body>
</html>

