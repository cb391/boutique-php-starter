<?php
session_start(); // TOUJOURS en première ligne

if (isset($_GET['reset'])) {
    $_SESSION['visits'] = 0;
};

    if (!isset($_SESSION['visits'])) { // est-ce que le compteur existe déjà ?, Le ! signifie NON: Donc : Si le compteur n’existe PAS encore… (1ere visite)
    $_SESSION['visits'] = 1; // on créé la variable et on met "1"
} else {
    $_SESSION['visits']++; // les visites suivantes on ajoute 1
};

echo 'Vous avez visité la page '.$_SESSION['visits'].' fois';
?>
<a href="?reset=1">Réinitialiser</a> </a> 