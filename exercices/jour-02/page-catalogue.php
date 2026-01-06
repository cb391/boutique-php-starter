<!DOCTYPE html>
<html>
    <head>
        <title>Test PHP</title>
    </head>
    <body>
        <?php 
    $products = [
    [
        "name" => "T-shirt",
        "price" => 29.99,
        "stock" => 50
    ],
    [
        "name" => "Jean",
        "price" => 79.99,
        "stock" => 30
    ],
    [
        "name" => "Casquette",
        "price" => 19.99,
        "stock" => 100
    ],
    [
        "name" => "Veste",
        "price" => 49.99,
        "stock" => 80
    ],
    [
        "name" => "Echarpe",
        "price" => 10.99,
        "stock" => 40
    ],

    [
        "name" => "Gants",
        "price" => 15.99,
        "stock" => 20
    ]
    ]
        ?>

<h1>Consultez nos produits</h1>

<div class="T-Shirt">
    <h2><?= $products[0]["name"] ?></h2>
    <p class="prix"><?= $products[0]["price"] ?> €</p>
    <p class="stock">Stock : <?= $products[0]["stock"] ?></p>
</div>

<div class="Jean">
    <h2><?= $products[1]["name"] ?></h2>
    <p class="prix"><?= $products[1]["price"] ?> €</p>
    <p class="stock">Stock : <?= $products[1]["stock"] ?></p>
</div>

<div class="Casquette">
    <h2><?= $products[2]["name"] ?></h2>
    <p class="prix"><?= $products[2]["price"] ?> €</p>
    <p class="stock">Stock : <?= $products[2]["stock"] ?></p>
</div>

<div class="Veste">
    <h2><?= $products[3]["name"] ?></h2>
    <p class="prix"><?= $products[3]["price"] ?> €</p>
    <p class="stock">Stock : <?= $products[3]["stock"] ?></p>
</div>

<div class="Echarpe">
    <h2><?= $products[4]["name"] ?></h2>
    <p class="prix"><?= $products[4]["price"] ?> €</p>
    <p class="stock">Stock : <?= $products[4]["stock"] ?></p>
</div>

<div class="Gants">
    <h2><?= $products[5]["name"] ?></h2>
    <p class="prix"><?= $products[5]["price"] ?> €</p>
    <p class="stock">Stock : <?= $products[5]["stock"] ?></p>
</div>



    </body>
</html>