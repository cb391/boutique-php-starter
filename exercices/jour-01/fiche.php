<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

$name = "Mandarine";
$price = 29.99;
$stock = 3;
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title><?= $name ?></title>
</head>


<body>
    <h1> Les Mandarines</h1>
    <p> Les Mandarines coutent <?= $name ?> </p>
    <span>En stock</span>
</body>


</html>
