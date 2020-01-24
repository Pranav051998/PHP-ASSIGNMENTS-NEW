<?php
session_start();
$_SESSION['value']="";
$_SESSION['filename']="";
  if ($_SERVER["REQUEST_METHOD"]=="POST") 
{     ob_start();
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
}
?>