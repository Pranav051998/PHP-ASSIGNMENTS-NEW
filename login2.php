<?php
session_start();
$_SESSION['value2']="";
 if ($_SERVER["REQUEST_METHOD"]=="POST") 
{     ob_start();
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
} 

?>