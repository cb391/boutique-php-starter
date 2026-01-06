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
    ]

];

// Accéder au nom du 3e produit
echo $products[2]["name"]; // Casquette

// Accéder au prix du 1er produit
echo $products[0]["price"]; // 29.99

// Accédez au stock du dernier produit
echo $products[4] ["stock"]; // 40

// modifier la valeur du stock du 2e produit
$products[1]["stock"]= 40;
echo $products[1] ["stock"]; // 40

        ?>
    </body>

</html>


