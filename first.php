<?php
    include "link.php";
    include  "query.php";
    echo "<link rel='stylesheet'type='text/css' href='css2.css?v=2'>";
    $_SESSION['value']="";
    $_SESSION['filename']="";
  if ($_SERVER["REQUEST_METHOD"]=="POST") 
          {     ob_start();
                echo "<div class='firstphp'>";
                   $firstname = $_POST["fname"];//takes the input which user enters in firstname
                           if (preg_match("/^[a-zA-Z ]*$/",$firstname)) 
                           
                          { 
                             $lastname = $_POST["lname"]; 
                             if(preg_match("/^[a-zA-Z]*$/",$lastname))
                               {
                                $Fullname=$firstname." ".$lastname;
                                echo "<br>";
                                echo "Firstname:".$firstname."<br><br>";
                                echo "Lastname:" .$lastname."<br><br>";
                                echo "Fullname:".$Fullname."<br><br>";//prints the full name of user if condition satisfies 
                                $_SESSION['filename']=$Fullname;
                                }
                          }
                          $_SESSION['value']=ob_get_contents();
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
      <script src="demo.js?v=1"></script>
      <link rel="stylesheet" type="text/css" href="css2.css?v=2">
</head>
<body class="beforefirstform">
           <div class="firstform">
            <div class="heading">
                <h2 class=firstformheading>Enter Personal details</h2>
                <a  class="Button" href="logout.php">logout</a>
	          </div>    
                <form action="" method="POST" enctype="multipart/form-data" >
                     First Name:<input type="text" name="fname" id="fname" pattern="[a-zA-Z]{1,}$" required> <h6>*only alphabets are allowed</h6><br>
                     Last  Name:<input type="text" name="lname" id="lname" onkeyup="Solution()" pattern="[a-zA-Z]{1,}$" required><h6>*only alphabets are allowed</h6><br>
                     Full  Name:<input type="text" name="Fulname" id="Pranav"  disabled="disabled"><br>
                                <input type="Submit" name="upload" value="Submit">
                </form>
            </div>
</body>
</html>

