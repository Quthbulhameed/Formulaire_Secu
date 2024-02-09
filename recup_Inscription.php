<?php
    ini_set('display_errors', 0);
    session_start();
?>

<?php
    $valider = isset($_POST["button_inscription"]) ? $_POST["button_inscription"] : null;
    $email = isset($_POST["email"]) ? htmlspecialchars($_POST["email"]) : null;
    $mdp1 = isset($_POST["mdp1"]) ? htmlspecialchars($_POST["mdp1"]) : null;
    $mdp2 = isset($_POST["mdp2"]) ? htmlspecialchars($_POST["mdp2"]) : null;
    $password_hash = password_hash($mdp1, PASSWORD_DEFAULT);

///////////////
    if(isset($valider)){
        include "db/connexion_bdd.php";
   ///////////////
        if(!empty($email) && !empty($mdp1) && !empty($mdp2)){
     
            if($mdp2 != $mdp1){
                 $error = "Les mots de passe ne correspondent pas !";
                 header("Location: formulaire_Inscription.php");
            } else {
                
                $email_escape = mysqli_real_escape_string($con, $email);

                $req = mysqli_prepare($con, "SELECT * FROM utilisateurs WHERE email = ?");
                mysqli_stmt_bind_param($req, "s",  $email_escape);
                mysqli_stmt_execute($req);
                $res = mysqli_stmt_get_result($req);


/////////////////////
                if(mysqli_num_rows($res) == 0){
                  
                    $reqIns = mysqli_prepare($con, "INSERT INTO utilisateurs VALUES (NULL, ?, ?)");
                    mysqli_stmt_bind_param($reqIns,"ss",  $email_escape, $password_hash);
                    mysqli_stmt_execute($reqIns);
                    
////////////////////////////:
                    if($reqIns){
                        header("Location:formulaire_login.php") ;
                    } else {
                         $error = "Inscription echoue";
                         header("Location: formulaire_Inscription.php");
                    }
                } else {
                     $error = "Cet email existe deja";
                     header("Location: formulaire_Inscription.php");
                
                }
            }
        } else {
             $error = "Veuillez remplir tous les champs" ;
             header("Location: formulaire_Inscription.php");
             
        }
    }
    $_SESSION['error'] = $error;
?>
