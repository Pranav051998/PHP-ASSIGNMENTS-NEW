<?php
 session_start();
  if(($_POST["name"]==$_SESSION['username'])&&($_POST["password1"]==$_SESSION['password']))
  {
  	 header("location:first.html");

  }
  else
  {
  	header("location:login.html");
  }
  ?>