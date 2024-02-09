<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connection</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/formulaire_login.css">
</head>

<div class="logoP8">
        <img src="img/logop8.png" alt="Logo Ogop8">
    </div>

<body>
    <form action="recup_login.php" method="POST" class="form_connexion_inscription">

        <h1>Connection</h1>

    <div class="champ">
        <label for="email">Email</label>
        <input type="email" name="email" placeholder="E-mail ...@univ-p8.fr">
    </div>

    <div class="champ">
        <label for="password">Mot de passe</label>
    <input type="password" name="password1" placeholder="*********" oncopy="return false" onpaste="return false" drop="return false"    
     oncut="return false">
    </div>


    <div class="cont_button">
        <input type="submit" value="GOOOO!!!" name="button_con" class="button_connexion">
        <input type="reset" value="EFFACER" class="button_clear" tabindex="5">
    </div>

        <?php
            session_start();
            if(isset($_SESSION['error'])){
                echo '<div class="error" style="color: red;">'.$_SESSION['error'].'</div>';
                unset($_SESSION['error']);
            }
        ?>

    <div id="footer">
        <p class="link">Vous n'avez pas de compte ? <a href="formulaire_Inscription.php">Créer un compte</a></p>
    </div>

    <div id="msgsecu">
        <p>Sécurité : déconnectez-vous et fermez votre navigateur après usage des services authentifiés.</p>
    </div>
      
    </form>
</body>

</html>
