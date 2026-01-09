<?php 
$products = [ ];

for ($i = 0; $i < 10; $i++) {
$products[$i] = [
"Produit" => "Produit" .$i, 
"price" => rand(90, 100), 
"stock" => rand(0, 5),
];
}

var_dump(($products));

foreach ($products as $product) {
    if ($product["stock"] === 0) {
        continue; // Saute le 0, passe au suivant
    }
    if ($product["price"] > 100) {
        break;
    }  // arrête complètement la boucle            
echo $product["Produit"];        
}

?>
