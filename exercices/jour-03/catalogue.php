 <?php 
        $products = [ ];  
        for ($i = 0; $i < 9; $i++) {
            $products[$i] = [
            "Produit" => "Produit.$i", 
            "price" => rand(90, 100), 
            "stock" => rand(0, 5),
            "image" => "https//image"."google.com",
            ];
        }
        ?>

<!DOCTYPE html>
<html>
    <head>
        <style>
            .grille { display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px; }
            .produit { border: 1px solid #ddd; padding: 15px; }
            .rupture { color: red; }
            .en-stock { color: green; }
        </style>
    </head>

    <body>

 <div class="grille">

        <?php foreach ($products as $product): ?>
            
            <div class="produit">
                <!-- Ton code ici -->
                    <img src=" <?= $product["image"] ?> " alt="imageProduit">
                    <h1 class="produit"> <?= $product["Produit"] ?> </h1>
                    <h2 class="Prix"> Le prix du produit est de <?= $product["price"] ?> </h2>
                        <div class="en-stock">
                        <?= $product["stock"] ?> de produits sont en stock.
                            <?php if ($product["stock"] == 0): ?>
                                <div class="rupture">
                                    <p>Le produit est actuellement en rupture de stock.</p>
                                </div>
                            <?php endif; ?>
                        </div>
            </div>
        <?php endforeach; ?>

</body>

</html>
