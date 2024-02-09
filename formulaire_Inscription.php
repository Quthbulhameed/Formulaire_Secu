<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/formulaire_Inscription.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-e7Iq0f3sa8VCfDknBzl5zxh9Sfn6AwezMePj4N54CmfYQSkE1woYF9or3SLA2ZRf" crossorigin="anonymous">
</head>

<body>
    <form action="recup_Inscription" method="POST" class="form_connexion_inscription">

    <div class="logoP8">
        <img src="img/logop8.png" alt="Logo Ogop8">
    </div>

        <h1>Inscription</h1>

    <div class="champ">
    <label for="email">Email</label>
    <input type="email" name="email" pattern=".+@univ-p8\.com" placeholder="E-mail@univ-p8.fr" >
    </div>

    <div class="champ">
    <label for="password">Mot de passe</label>
       <input type="password" name="mdp1" placeholder="*********" oncopy="return false" onpaste="return false" drop="return false"    
     oncut="return false" minlength="6" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" >
    </div>

    <div class="champ">
    <label for="password">Confirmation mot de passe</label>
       <input type="password" name="mdp2" placeholder="*********" oncopy="return false" onpaste="return false" drop="return false"    
     oncut="return false" minlength="6" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" >
    </div>

    <div class="cont_button">
        <input type="submit" value="Inscription" name="button_inscription" class="button_inscription" tabindex="5">  <br/>
        <input type="reset" value="EFFACER" class="button_clear" tabindex="5"> <br/>
    </div>

        <?php
            session_start();
            if(isset($_SESSION['error']) && $_SESSION['error'] != ""){
                echo '<div class="error" style="color: red;">'.$_SESSION['error'].'</div>';
                unset($_SESSION['error']);
            }
        ?>

    <div id="footer">
        <p class="link">Vous avez un compte ? <a href="formulaire_login.php" class="button_se" >Se connecter</a></p>
    </div>


    <div id="msgsecu">
         <p>Msg Important: Votre E-mail doit être sous la forme ...@univ-p8 et le mot de passe doit contenir au moins 6 caractères, 1 lettre, 1 chiffre et une majuscule.</p>
    </div>
        
</form>
</body>
</html>
