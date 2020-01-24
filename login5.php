<?php
session_start();
$_SESSION['value5']="";
if ($_SERVER["REQUEST_METHOD"]=="POST") 

       {    ob_start();
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
        }
?>