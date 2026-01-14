<form method="POST" action="traitement.php">
    <input type="text" name="name"required minlength="3-20" placeholder="Nom" >

    <input type="email" name="email" required placeholder="Email">

    <input id="mdp" type="password" name="password" required minlength="8" placeholder="Mot de passe"> 

    <input id="confirm" type="password" name="confirmation" required minlength="8" placeholder="Confirmez votre mdp"> 
    <button type="submit">Connexion</button>
</form>

<?php

// traitement.php
$email = $_POST["email"];
$password = $_POST["password"];
$confirm = $_POST["confirmation"];

echo 'Bonjour ' . htmlspecialchars($_POST["name"]);
echo nl2br(string: "\n"); // pour saut de ligne

echo 'Voici votre email : ' . htmlspecialchars($_POST["email"]);
echo nl2br(string: "\n"); // pour saut de ligne

echo 'Voici votre mot de passe : ' . htmlspecialchars($_POST["password"])."\n";
echo nl2br("\n"); // pour saut de ligne
    
if (preg_match($confirm, $password)) {
    echo "Mot de passe identique";
}
else {
        echo "Les deux mots de passe ne sont pas identiques"; 
    };

?>