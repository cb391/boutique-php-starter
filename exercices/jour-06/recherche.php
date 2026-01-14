<form method="GET" action="recherche.php">
    <input type="email" name="email" required placeholder="Email">
    <input type="password" name="password" required minlength="10" placeholder="mot de passe"> 
    <input type="text" name="search"required placeholder="Recherche">
    <button type="submit">Rechercher</button>
</form>

<?php
$products = [
    1 => ["name" => "t-shirt", "price" => 29.99],
    2 => ["name" => "jean", "price" => 79.99],
    3 => ["name" => "ceinture", "price" => 20],
    4 => ["name" => "gants", "price" => 30],
    5 => ["name" => "pull", "price" => 40],
    6=> ["name"=> "casquette", "price" => 18],
    7=> ["name"=> "debardeur", "price" => 38],
    8=> ["name"=> "short", "price"=> 154],
    9=> ["name"=> "chausette", "price" => 789],
    10=> ["name"=> "chaussure", "price" => 43],
];

$search = $_GET["search"];
$trouve = false;


foreach ($products as $product) {

    if (stripos($product["name"], $search) !== false) {
        echo "Le produit est trouvé :". $product["name"];
        $trouve = true;
        break;
    }
}

if (!$trouve) {
    echo "Aucun résultat";
    };


?>




