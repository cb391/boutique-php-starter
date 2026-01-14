<?php 

session_start();

// Vérifier si l'utilisateur est connecté
if (!isset($_SESSION["user"])) {
    header("Location: login.php");
    exit;
}

$userName = $_POST['username'] ?? '';
$passWord = $_POST['password'] ?? '';

    if ($userName === 'admin' && $passWord === '1234') {
        $_SESSION['user'] = $userName;
        echo 'Vous êtes connecté';
        header('Location: dashboard.php');
    } else {
        echo 'Identifiants incorrects';
        
    }



?>

<form method="POST" action="login.php">
    <input type="text" name="username" required placeholder="Username">
    <input type="password" name="password" required placeholder="mot de passe"> 
    <button type="submit">Connexion</button>
</form>