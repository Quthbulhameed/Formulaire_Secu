<?php 
$iniPath = __DIR__ . '/bdd.ini';

$config = parse_ini_file($iniPath);

$con = mysqli_connect("localhost", $config['nomUtili'], $config['PASSWD'], $config['db']);
if (!$con) {
    die("Connexion echouee");
}


?>