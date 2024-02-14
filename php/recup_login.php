<?php
ini_set('display_errors', 0);
// ini_set('display_errors',  1);
// ini_set('display_startup_errors',  1);
// error_reporting(E_ALL);

session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!isset($_POST['csrf_token']) || !hash_equals($_SESSION['csrf_token'], $_POST['csrf_token'])) {
        die("Token invalide");
    }

    LoginForm();
} else {
    die("invalide");
}


function LoginForm() {

if (isset($_POST["button_con"])) {


    $email = htmlspecialchars($_POST["email"]); 
    $password = htmlspecialchars($_POST["password1"]);

    if (!empty($email) && !empty($password)) {
        include "../db/connexion_bdd.php";


        $email_escape = mysqli_real_escape_string($con, $email);

        $verification = mysqli_prepare($con , "SELECT mdp FROM utilisateurs WHERE email = ?");
        mysqli_stmt_bind_param($verification, "s",  $email_escape);
        mysqli_stmt_execute($verification);
        $res = mysqli_stmt_get_result($verification);

        $utilisateur = mysqli_fetch_assoc($res);

        if ($utilisateur) {
            $hash_from_database = $utilisateur['mdp'];

            if (password_verify($password, $hash_from_database)) {
                $_SESSION['user'] = $email;
                unset($_SESSION['message']);
                $_SESSION['success'] = "Vous etes connecté avec succes en tant que $email";
                header("Location: ../index.php");

            } else {
                $error = "Email ou mot de passe incorrect";
                header("Location: ../index.php");
            }
        } else {
            $error = "Utilisateur introuvable"; 
            header("Location: ../index.php");

        }
        //ferme
        mysqli_stmt_close($verification);
        mysqli_close($con);
    } else {
        $error = "Veuillez remplir tous les champs";
        header("Location: ../index.php");
    }

    $_SESSION['error'] = $error;
    exit;
}

}
?>