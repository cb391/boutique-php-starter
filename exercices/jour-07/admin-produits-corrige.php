<!DOCTYPE html>
<html>
<head>
    <title>Admin produits</title>
</head>
<body>

<?php
// ================== CONNEXION ==================
try {
    $pdo = new PDO(
        "mysql:host=localhost;dbname=boutique;charset=utf8mb4",
        "dev",
        "dev",
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );
} catch (PDOException $e) {
    die("❌ Erreur : " . $e->getMessage());
}

// ================== ADD ==================
if (
    $_SERVER["REQUEST_METHOD"] === "POST"
    && isset($_POST["action"])
    && $_POST["action"] === "add"
) {
    $stmt = $pdo->prepare(
        "INSERT INTO products (name, price, stock, category)
         VALUES (?, ?, ?, ?)"
    );

    $stmt->execute([
        $_POST["name"],
        $_POST["price"],
        $_POST["stock"],
        $_POST["category"]
    ]);

    header("Location: admin-produits.php");
    exit;
}

// ================== UPDATE ==================
if (
    $_SERVER["REQUEST_METHOD"] === "POST"
    && isset($_POST["action"])
    && $_POST["action"] === "update"
) {
    $stmt = $pdo->prepare(
        "UPDATE products
         SET name = ?, price = ?, stock = ?, category = ?
         WHERE id = ?"
    );

    $stmt->execute([
        $_POST["name"],
        $_POST["price"],
        $_POST["stock"],
        $_POST["category"],
        $_POST["id"]
    ]);

    header("Location: admin-produits.php");
    exit;
}

// ================== DELETE ==================
if (isset($_GET["delete"])) {
    $stmt = $pdo->prepare("DELETE FROM products WHERE id = ?");
    $stmt->execute([$_GET["delete"]]);

    header("Location: admin-produits.php");
    exit;
}

// ================== PRODUIT À ÉDITER ==================
$productToEdit = null;
if (isset($_GET["edit"])) {
    $stmt = $pdo->prepare("SELECT * FROM products WHERE id = ?");
    $stmt->execute([$_GET["edit"]]);
    $productToEdit = $stmt->fetch(PDO::FETCH_ASSOC);
}

// ================== LISTE DES PRODUITS ==================
$stmt = $pdo->prepare("SELECT * FROM products");
$stmt->execute();
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="produits">
    <h1>Ma liste de produits</h1>

    <?php foreach ($products as $product): ?>
        <h2><?= htmlspecialchars($product["name"]) ?></h2>
        <p>Prix : <?= htmlspecialchars($product["price"]) ?></p>
        <p>Stock : <?= htmlspecialchars($product["stock"]) ?></p>
        <p>Catégorie : <?= htmlspecialchars($product["category"]) ?></p>

        <a href="admin-produits.php?edit=<?= $product['id'] ?>">MODIFIER</a>
        |
        <a href="admin-produits.php?delete=<?= $product['id'] ?>"
           onclick="return confirm('Supprimer ce produit ?')">
           SUPPRIMER
        </a>
        <hr>
    <?php endforeach; ?>
</div>

<?php if ($productToEdit): ?>
<form method="POST">
    <h2>Modifier un produit</h2>

    <input type="hidden" name="action" value="update">
    <input type="hidden" name="id" value="<?= $productToEdit['id'] ?>">

    <input type="text" name="name" value="<?= htmlspecialchars($productToEdit['name']) ?>" required>
    <input type="number" step="0.01" name="price" value="<?= $productToEdit['price'] ?>" required>
    <input type="number" name="stock" value="<?= $productToEdit['stock'] ?>" required>
    <input type="text" name="category" value="<?= htmlspecialchars($productToEdit['category']) ?>" required>

    <button type="submit">Modifier</button>
</form>
<?php endif; ?>

<form method="POST">
    <h2>Ajouter un produit</h2>

    <input type="hidden" name="action" value="add">

    <input type="text" name="name" placeholder="Nom" required>
    <input type="number" step="0.01" name="price" placeholder="Prix" required>
    <input type="number" name="stock" placeholder="Stock" required>
    <input type="text" name="category" placeholder="Catégorie" required>

    <button type="submit">Ajouter</button>
</form>

</body>
</html>
