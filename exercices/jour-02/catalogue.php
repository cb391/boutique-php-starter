<?php
// starter-project/public/catalogue.php
require_once __DIR__ . '/../app/data.php';
// $products est maintenant disponible
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Test PHP</title>
    </head>
    <body>

        <?php 
// Accéder au nom du 3e produit
echo $products[2]["Name"]; // Casquette

// Accéder au prix du 1er produit
echo $products[0]["Price"]; // 29.99

// Accédez au stock du dernier produit
echo $products[4] ["Stock"]; // 40

// modifier la valeur du stock du 2e produit
$products[1]["Stock"]= 40;
echo $products[1] ["Stock"]; // 40
        ?>


<h1>Consultez nos produits</h1>

<div class="T-Shirt">
    <h2><?= $products[0]["Name"] ?></h2>
    <p class="prix"><?= $products[0]["Price"] ?> €</p>
    <p class="stock">Stock : <?= $products[0]["Stock"] ?></p>
</div>

<div class="Jean">
    <h2><?= $products[1]["Name"] ?></h2>
    <p class="prix"><?= $products[1]["Price"] ?> €</p>
    <p class="stock">Stock : <?= $products[1]["Stock"] ?></p>
</div>

<div class="Casquette">
    <h2><?= $products[2]["Name"] ?></h2>
    <p class="prix"><?= $products[2]["Price"] ?> €</p>
    <p class="stock">Stock : <?= $products[2]["Stock"] ?></p>
</div>

<div class="Veste">
    <h2><?= $products[3]["Name"] ?></h2>
    <p class="prix"><?= $products[3]["Price"] ?> €</p>
    <p class="stock">Stock : <?= $products[3]["Stock"] ?></p>
</div>

<div class="Echarpe">
    <h2><?= $products[4]["Name"] ?></h2>
    <p class="prix"><?= $products[4]["Price"] ?> €</p>
    <p class="stock">Stock : <?= $products[4]["Stock"] ?></p>
</div>

<div class="Gants">
    <h2><?= $products[5]["Name"] ?></h2>
    <p class="prix"><?= $products[5]["Price"] ?> €</p>
    <p class="stock">Stock : <?= $products[5]["Stock"] ?></p>
</div>


    </body>

</html>


