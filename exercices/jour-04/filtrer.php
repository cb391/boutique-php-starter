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
        "stock" => 0
    ],

    [
        "name" => "Echarpe",
        "price" => 10.99,
        "stock" => 40
    ],

    [
        "name" => "Chaussette",
        "price" => 9.99,
        "stock" => 32
    ],
    [
        "name" => "short",
        "price" => 39.99,
        "stock" => 18
    ],
    [
        "name" => "Débardeurs",
        "price" => 5.99,
        "stock" => 10
    ],
    [
        "name" => "Doudoune",
        "price" => 149.99,
        "stock" => 57
    ],
    [
        "name" => "Gants",
        "price" => 17.99,
        "stock" => 0
    ]
];

$total = count($products); // nombre total de produit
$trouves = 0; // nombre de produits affichés

foreach ($products as $product):


if ($product ["stock"] <= 0) { // il faut aller a l'inverse de la consigne, car on élimine les produits en rupture
    $enStock ++;
    continue; // on saute le produit

} 

elseif ($product['price'] >= 50) { // idem ci-dessus
    $moins50++ ;
    continue;
}

echo "<p>";
echo $product ["name"] ."". $product ["price"] ."euro". $product ["stock"] ."produits en stock";
echo "</p>";

$trouves++;

endforeach;

echo "Les articles affichés sont au nombre de :" .($trouves)."sur".$total; 


?>

    </body>

</html>
