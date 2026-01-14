<form method="GET" action="recherche.php">
    <input type="text" name="search"placeholder="Recherche">
    <select name="category" placeholder="filtrer">
        <option value=""> -- Choisissez une catégorie</option>
        <option value="vetement">Vêtements</option>
        <option value="bureau">Bureau</option>
    </select>
    <input type="number" name="priceMax" placeholder="Prix max">
    <text> En stock uniquement</text><input type="checkbox" name="stock"> 
    <button type="submit">Rechercher</button>
</form>

<?php

$products = [
    1 => ["name" => "t-shirt", "price" => 29.99, "category"=> "vetement", "inStock" => 3, ],
    2 => ["name" => "jean", "price" => 79.99 ,"category"=> "vetement", "inStock" => 45,],
    3 => ["name" => "ceinture", "price" => 20,"category"=> "vetement", "inStock" => 79,],
    4 => ["name" => "gants", "price" => 30,"category"=> "vetement", "inStock" => 43,],
    5 => ["name" => "pull", "price" => 40, "category"=> "vetement", "inStock" => 12,],
    6=> ["name"=> "casquette", "price" => 18, "category"=> "vetement", "inStock" => 79,],
    7=> ["name"=> "debardeur", "price" => 38, "category"=> "vetement", "inStock" => 13,],
    8=> ["name"=> "short", "price"=> 154, "category"=> "vetement", "inStock" => 15,],
    9=> ["name"=> "chausette", "price" => 789, "category"=> "vetement", "inStock" => 46,],
    10=> ["name"=> "chaussure", "price" => 43, "category"=> "vetement", "inStock" => 47,],
    11=> ["name"=> "livre", "price"=> 45, "category"=> "bureau", "inStock" => 48,],
    12=> ["name"=> "crayon", "price"=> 78, "category"=> "bureau", "inStock" => 96,],
    13=> ["name"=> "gomme", "price"=> 23, "category"=> "bureau", "inStock" => 85,],
    14=> ["name"=> "stylo", "price"=> 56, "category"=> "bureau", "inStock" => 81,],
    15=> ["name"=> "cahier", "price"=> 79, "category"=> "bureau", "inStock" => 36,],
];

// récupération des filtres GET

$search   = $_GET['search'] ?? '';
$category = $_GET['category'] ?? '';
$priceMax = $_GET['priceMax'] ?? '';
$stock    = isset($_GET['stock']);

$found = false;

foreach ($products as $product) { // mutualiser une seule boucle foreach pour ensuite appliquer les conditions

    // search
    if ($search != '' && stripos($product['name'], $search) === false) { // on fonctionne par élimination
        continue;
    }

    // category
    if ($category != '' && $product['category'] != $category) {
        continue;
    }

    // prixmax
    if ($priceMax != '' && $product['price'] > $priceMax) {
        continue;
    }

    // stock
    if ($stock && $product['inStock'] <= 0) {
        continue;
    }

    // Si le produit passe tous les filtres
    echo $product['name'] . " - " . $product['price'] . " €";
    echo $product['category'];
    echo " Stock : " . $product['inStock'];

    $found = true;
}

if (!$found) {
    echo "<p>Aucun produit trouvé</p>";
}
?>
