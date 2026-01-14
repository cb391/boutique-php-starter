<!DOCTYPE html>

    <head>
        <title>Test PHP</title>
    </head>

    <body>
        
        <?php

$pdo = new PDO(
    "mysql:host=localhost;dbname=boutique;charset=utf8mb4",
    "dev", "dev",
    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
);

// SELECT avec paramètre
$stmt = $pdo->prepare("SELECT * FROM products"); // requete
$stmt->execute(); // execution
$products = $stmt->fetchAll(PDO::FETCH_ASSOC); // affiche ? 

?>


<div class="products"> 

    <?php foreach ($products as $product): ?>
    
        <p> 
        <?= $product["id"] ?> 
        <?= $product["name"] ?> 
        <?= $product["description"] ?> 
        <?= $product["price"] ?> 
        <?= $product["stock"] ?> 
        <?= $product["category"] ?> 
      
        </p>

    <?php endforeach; ?>

</div>


</body>

</html>
