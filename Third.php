<?php
    include "link.php";
    include  "query.php";
    echo "<link rel='stylesheet'type='text/css' href='css2.css?v=2'>";
    $_SESSION['value3']="";
          if ($_SERVER["REQUEST_METHOD"]=="POST") 
             {if($_POST["textarea"]!="")
                {    ob_start();
                     echo "<div class='Thirdphp'>";
                       $string=preg_replace( "/[\r\n]+/", "\n", $_POST["textarea"] );
                       //This Function will replace '|' symbol with new line
                        $string=preg_replace("/[|]/", "\n", $string);
                        $string=trim($string);
                       //Explode function will break the String after every  new line and covert to array      
                        $case=explode("\n", $string);


                         echo "<table class border='2' cellpadding='0' class='stats'>";
                         echo "<tr>";
                         echo "<th>Subject</th>";
                         echo "<th>Marks</th>";
                         echo "</tr>";
                        for($i=0;$i<count($case);$i++) 
                           {  echo "<tr>";
                              echo "<td>".$case[$i]."</td>";
                              $i++;
                              echo "<td>".$case[$i]."</td>";
                              echo "</tr>";
                               }
                               echo "</table>";
                              $_SESSION['value3']=ob_get_contents();
                          }
                    else
                    {
                      echo "Please giveright values.";
                    }
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
<body class="beforeTextarea">
  <div class="Textarea">
      <h2 class="Textareaheading">Please Enter Marks in Subject|Marks Format</h2>
      <form action="" method="POST" enctype="multipart/form-data">
  	  
      Text Area:<textarea name="textarea" rows="5" cols="30" id="para1" pattern="[a-zA-Z]+[|]+[0-9]+$" required></textarea><br>
               <input type="Submit" name="upload" value="Submit">
               <a class="Button" href="logout.php">logout</a>
      </form>
    </div>
</body>
</html>
