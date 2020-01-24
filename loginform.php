<?php 
  session_start();
  $_SESSION['username']='Pranav';
  $_SESSION['password']='12345';
  if(($_POST["name"]==$_SESSION['username'])&&($_POST["password1"]==$_SESSION['password']))
    {  header("Location:choose.php"); }
  else
  {
    header("Location:login.php");
   }
   ?>
