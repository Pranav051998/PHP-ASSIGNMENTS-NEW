<?php
 session_start();
         header("Content-type: application/vnd.ms-word");
         header("Content-Disposition: attachment;Filename=document_name.doc");
          echo $_SESSION['value2'];
          echo $_SESSION['value'];
          echo $_SESSION['value3'];
          echo $_SESSION['value4'];
          echo $_SESSION['value5'];
          $content=$_SESSION['value2'].$_SESSION['value'].$_SESSION['value3'].$_SESSION['value4'].$_SESSION['value5'];
           $file='/var/www/html/upload/'.$_SESSION['filename'].'.doc';
           $fp=fopen($file, 'w');//opening the file in write mode
            fwrite($fp, $content);

  ?>