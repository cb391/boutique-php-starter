<!DOCTYPE html>

    <head>
        <title>Test PHP</title>
    </head>

    <body>


<form method="GET" action="recherche.php">
    <input type="text" name="search"required placeholder="Recherche">
    <button type="submit">Rechercher</button>
</form>
    
<?php 

$search = $_GET["search"];


$pdo = new PDO(
    "mysql:host=localhost;dbname=boutique;charset=utf8mb4",
    "dev", "dev",
    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
);



$stmt = $pdo->prepare("SELECT * FROM products WHERE name LIKE ?"); // requete
$stmt->execute(['%'.$search.'%']); // execution

$products = $stmt->fetchAll(PDO::FETCH_ASSOC); // affiche ? 


?>


<div class="produit">

<?php foreach ($products as $product): ?>

    <h1>Ma liste de produits</h1>
    
    <h2> Name </h2>
    <p> <?= $product["name"] ?></p>
    <h2> Description </h2>
    <p> <?= $product["description"] ?></p>
    <h2> Price </h2>
    <p> <?= $product["price"] ?></p>
    <h2> Stock </h2>
    <p> <?= $product["stock"] ?></p>
    <h2> Category </h2>
    <p> <?= $product["category"] ?> </p>

<?php endforeach; ?>

</div>


    </body>




    </html>