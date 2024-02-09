<?php 
 
  session_start();
  if(!isset($_SESSION['user'])){
    
     header("location:index.php");
  }
  $user = $_SESSION['user'] 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <title> <?=$user?></title>
    <link rel="stylesheet" href="CSS/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
</head>
<body>
    <div class="chat">
        <div class="button-email">
            <span> <?=$user?> </span>
            <a href="deconnexion.php" class="Deconnexion_btn">Déconnexion</a>
        </div>
    </div>


</body>
</html>