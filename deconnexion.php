<?php 
 
  if(!isset($_SESSION['user'])){
     
     header("location:formulaire_login.php");
  }
   session_destroy();
   header("Location:formulaire_login.php");
?>