
# DJIAVOUDINE
# Quthbulhameed
# M1 INFO

### Projet 1 : formulaire d'identification sécurisé

Pour ce projet, j'ai décidé d'utiliser les langages suivants : HTML5, CSS3, PHP8, ainsi que MySQL pour la base de données.

#### Formulaire de Connexion (formulaire_login.php) 
- Le formulaire de connexion permet aux utilisateurs de se connecter à leur compte en saisissant leur adresse e-mail et leur mot de passe. 
Si les informations fournies sont incorrectes ou si tous les champs ne sont pas remplis, un message d'erreur approprié est affiché.

##### Contenu du formulaire de connexion 

1. Un fichier HTML contenant la structure du formulaire.
2. Un fichier CSS pour définir le style.
3. un fichier de login PHP qui va vérifie les champs de formulaire si ils correspondent aux valeurs de la table dans la base de données.
4. Un fichier PHP principal et de déconnexion.

#### Formulaire d'Inscription (formulaire_Inscription.php)

- Ce formulaire permet aux utilisateurs de créer leur propre compte en saisissant leur adresse e-mail au format email@univ-p8, leur mot de passe et la confirmation du mot de passe. Si des informations incorrectes sont saisies ou si certains champs sont laissés vides, un message d'erreur approprié est affiché.

#### Solutions de sécurité implémentées :

- Utilisation de requêtes SQL préparées pour prévenir les injections SQL.
- Protection contre les attaques XSS grâce à la fonction htmlspecialchars.
- Utilisation de mysqli_real_escape_string pour échapper les caractères spéciaux dans les adresses e-mail.
- Conditions sur les champs d'identification
- E-mail doit être sous la forme ...@univ-p8
- le mot de passe doit contenir au moins 6 caractères, 1 lettre, 1 chiffre et une majuscule.
- Bloquer copie - colle du mot de passe
- ini_set('display_errors', 0)
- Cacher le contenu des dossiers
- Token ou jeton de sécurité

#### Guide d'exécution en local
1. Installer un serveur local tel que Wamp/Mamp.
2. Ensuite, créez la base de données et téléchargez le fichier connexion_bdd.sql. Exécutez ensuite la requête SQL.
3. Après cela dans le dossier, vous devez pouvoir vous connecter à la base de données en fournissant les informations suivantes :
  - `Adresse du serveur MySQL : localhost`
  - `username`
  - `password`
  -  `nom de la base de donnee`
4. Enfin, lancez votre serveur local et accédez au répertoire contenant le site.
5. Puis, ouvrez le fichier principal `formulaire_login.php.`

  
