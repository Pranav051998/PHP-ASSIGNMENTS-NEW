<?php
session_start();
$_SESSION['value4']="";
if ($_SERVER["REQUEST_METHOD"]=="POST") 
     {    ob_start();         
     	     $telephone=$_POST["phone"];

                           if(preg_match("/^[+91]{3}[1-9]{1}[0-9]{9}$/",$telephone))
                               {echo "Mobile:".$telephone."<br>";
                               
                        }
                        $_SESSION['value4']=ob_get_contents();

      }
 ?>