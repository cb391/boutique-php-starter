<?php
$products = [
    1 => ["name" => "T-shirt", "price" => 29.99],
    2 => ["name" => "Jean", "price" => 79.99],
    3 => ["name" => "Ceinture", "price" => 0],
    4 => ["name" => "Gants", "price" => 0],
    5 => ["name" => "pull", "price" => 100],
];

// la variable id reprend la valeur de id dans l'URL via GET, le "?? null" permet de prendre en compte ID meme s'il n'existe pas on lui attribue "null"
$id = $_GET['id'] ?? null; 
// ID en URL renvoie vers les indexs!! id = un numéro !!!! le 2 = jean

if ($id !== null && isset($products[$id])) { // isset permet de verifier que la fonction existe ET n'est pas nulle 
    echo "Le produit " . $products[$id]['name'] . " est disponible.";
} elseif ($id === null) {
    echo "Aucun identifiant de produit fourni.";
} else {
    echo "Le produit est introuvable.";
}
?>