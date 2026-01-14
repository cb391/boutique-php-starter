<!DOCTYPE html>

<html>

    <head>
        <title>Test PHP</title>
    </head>

    <body>
        

<?php 

try {
    $pdo = new PDO(
        "mysql:host=localhost;dbname=boutique;charset=utf8mb4",
        "dev",
        "dev",
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );
    // echo "✅ Connexion réussie !";
} catch (PDOException $e) {
    echo "❌ Erreur : " . $e->getMessage();
}

$stmt = $pdo->prepare("SELECT * FROM products"); // requete
$stmt->execute(); // execution
$products = $stmt->fetchAll(PDO::FETCH_ASSOC); // affiche ? 


// ADD
// ligne dessous Si un formulaire a été envoyé en POST, qu’il contient une action, et que cette action est ‘add’, alors j’exécute ce bloc
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["action"]) && $_POST["action"] === "add") { 
    $stmt = $pdo->prepare("INSERT INTO products (name, price, stock, category) VALUES (?, ?, ?, ?)");
    $stmt->execute(
    [$_POST["name"], 
        $_POST["price"], 
        $_POST["stock"],
        $_POST["category"]]);
    header("Location: admin-produits.php");
    exit;
}

// DELETE
if (isset($_GET["delete"])) {
    $stmt = $pdo->prepare("DELETE FROM products WHERE id = ?");
    $stmt->execute([$_GET["delete"]]);
    header("Location: admin-produits.php");
    exit;
}

// ligne dessous Si un formulaire a été envoyé en POST, qu’il contient une action, et que cette action est ‘update’, alors j’exécute ce bloc
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["action"]) && $_POST["action"] === "update") { 
    $stmt = $pdo->prepare("UPDATE products SET name = ?, price = ?, stock = ?, category = ? WHERE id = ?");
    $stmt->execute(
        [
        $_POST["name"], 
        $_POST["price"], 
        $_POST["stock"],
        $_POST["category"],
        $_POST["id"],]);
    header("Location: admin-produits.php");
    exit;
}

// search de UPDATE
$productToEdit = null;
if (isset($_GET['edit'])) {
    $stmt = $pdo->prepare("SELECT * FROM products WHERE id = ?");
    $stmt->execute([$_GET['edit']]);
    $productToEdit = $stmt->fetch(PDO::FETCH_ASSOC);
}

?>

<div class="produits">

    <h1>Ma liste de produits</h1>

        <?php foreach ($products as $product): ?>

             <h2> <?= $product["name"] ?></h2>
                <p> <?= $product["price"] ?></p>
                <p> <?= "stock : ".$product["stock"] ?></p>
                <p> <?= $product["category"] ?> </p>
                <a href="admin-produits.php?edit=<?= $product['id'] ?>">
                 MODIFIER
                </a>
                <a href="?delete=<?= $product['id'] ?>"> 
                SUPPRIMER
                </a> 

        <?php endforeach; ?>


        <?php if ($productToEdit): ?>
    
    
            <form class="formulaireUpdate" method="POST">
                    <h1>Modifier un produit</h1>

                    <input type="hidden" name="action" value="update">
                    <input type="hidden" name="id" value="<?= $productToEdit['id'] ?>">

                    <input type="search" name="Recherche"placeholder="Rechercher un article">

                    <p>Remplissez les données suivantes:</p>
                    <input type="text" name="name" value="<?= $productToEdit['name'] ?>">
                    <input type="text" name="price" value="<?= $productToEdit['price'] ?>">
                    <input type="text" name="stock" value="<?= $productToEdit['stock'] ?>">
                    <input type="text" name="category" value="<?= $productToEdit['category'] ?>">
                    <button type="submit" name="buttonEdit">Confirmer modification </button>
                </form>
<?php endif; ?>


</div>

<form class="formulaireAdd" method="POST">
    <h1>Ajouter un produit à la liste</h1>
    
    <input type="hidden" name="action" value="add">

    <input type="text" name="name" placeholder="Nom">
    <input type="text" name="price" placeholder="Price">
    <input type="text" name="stock" placeholder="Quantité en stock">
    <input type="text" name="category" placeholder="Catégorie">
    <button type="submit" name="buttonAdd">Confirmer l'ajout</button>
</form>
    

    </body>

</html>