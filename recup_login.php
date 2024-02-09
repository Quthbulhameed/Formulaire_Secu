<?php
ini_set('display_errors', 0);
session_start();
?>
    <?php 
    @$valider = $_POST["button_con"];
    @$email = htmlspecialchars($_POST["email"]); 
    @$password = htmlspecialchars($_POST["password1"]);
    
//////////////////

       if(isset($valider)){

           include "db/connexion_bdd.php"; 
//////////////////

           if(!empty($email) && !empty($password)){

            $email_escape = mysqli_real_escape_string($con, $email);
            
              $verification = mysqli_prepare($con , "SELECT mdp FROM utilisateurs WHERE email = ?");
               mysqli_stmt_bind_param($verification, "s",  $email_escape);
               mysqli_stmt_execute($verification);
               $res = mysqli_stmt_get_result($verification);

               $utilisateur = mysqli_fetch_assoc($res);
               
////////////////////

               if($utilisateur) {
                $hash_from_database = $utilisateur['mdp'];
///////////////////

               if(password_verify($password, $hash_from_database)){
               
                   $_SESSION['user'] = $email ;
                
                   header("location:chat.php");
                   unset($_SESSION['message']);
               } else {
                   $error = "Email ou mot de passe incorrect";
                   header("Location: formulaire_login.php");
               }
            }
            else {
                $error = "Utilisateur Introuvable"; 
                header("Location: formulaire_login.php");
            }


           } else {
               $error = "Veuillez remplir tous les champs" ;
               header("Location: formulaire_login.php");
           }
       }

       $_SESSION['error'] = $error;

    ?>
    