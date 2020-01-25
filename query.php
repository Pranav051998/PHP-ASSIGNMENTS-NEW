<?php
if(isset($_GET["q"]))
 {$variable=$_GET["q"];
    if($variable=="1")
      header("Location:first.php");
    else if($variable=="2")
      header("Location:Second.php");
    else if($variable=="3")
      header("Location:Third.php");
    else if($variable=="4")
      header("Location:Fourth.php");
    else if($variable=="5")
      header("Location:Five.php"); 
  }
  ?>