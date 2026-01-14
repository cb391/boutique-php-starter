<?php 

require_once __DIR__ . '/login.php';

session_start();

// Vérifier si l'utilisateur est connecté
if (!isset($_SESSION["user"])) {
    echo"Bonjour ".$userName;
}
else {
    echo "Vous allez être redirigé.";
    header("Location: login.php");
};
?>

