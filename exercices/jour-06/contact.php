<form method="POST" action="traitement.php">
    <input type="email" name="email" required>
    <input type="password" name="password" required minlength="10"> 
    <button type="submit">Connexion</button>
</form>

<?php

// traitement.php
$email = $_POST["email"];
$password = $_POST["password"];


echo 'Bonjour, voici votre email : ' . htmlspecialchars($_POST["email"]);
echo nl2br("\n"); // pour saut de ligne
echo 'Voici votre mot de passe : ' . htmlspecialchars($_POST["password"])."\n";


?>
