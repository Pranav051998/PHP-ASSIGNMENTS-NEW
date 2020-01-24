<?php
session_start();
$_SESSION['value3']="";
if ($_SERVER["REQUEST_METHOD"]=="POST") 
  {    ob_start();
                   $string=preg_replace( "/[\r\n]+/", "\n", $_POST["comments"] );
                   //This Function will replace '|' symbol with new line
                   $string=preg_replace("/[|]/", "\n", $string);
                   $string=trim($string);
                   //Explode function will break the String after every  new line and covert to array      
                   $case=explode("\n", $string);


                   echo "<table class border='1' cellpadding='5' cellspacing='5'>";
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
?>