 <?php 
        $products = [
            
            [
            "Produit" => "T-shirt", 
            "price" => rand(90, 100), 
            "stock" => rand(0, 5),
            "image" => "https//imageTshirt"."google.com",
            "new"=> true,
            "discount"=> rand(1,20),
            ],
            [
            "Produit" => "Jean", 
            "price" => rand(90, 100), 
            "stock" => rand(0, 5),
            "image" => "https//imageJean"."google.com",
            "new"=> false,
            "discount"=> rand(1,20),
            ]
        ]
        ?>

<?php
$inStock = 0;
$onSale = 0;
$outOfStock = 0;
?>

<?php foreach ($products as $product) {
    if ($product["stock"] >0)
        $inStock++;

    if ($product["discount"] > 0)
        $onSale++;

    if ($product["new"] === true)
        $outOfStock++;
}
?>

<!DOCTYPE html>
<html>
    <head>
        <style>
            .grille { display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px; }
            .produit { border: 1px solid #ddd; padding: 15px; }
            .rupture { color: red; }
            .en-stock { color: green;} 
            .nouveau {color: pink;}
            .promo {color: blueviolet}

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
                        <div class="derniers">
                             <?php if ($product["stock"] < 5 && $product["stock"] > 0) ?>
                            <p>DERNIERS PRODUITS <?= $product["stock"] ?></p>
                        </div>
                    
                        <div class="rupture">
                            <p>RUPTURE de stock.</p>
                        </div>

                        <div class="nouveau">
                            <?php if ($product["new"] === true) ?>
                            <p>NOUVEAU</p>  
                        </div>

                        <div class="promo"> 
                        <?php if ($product["discount"] >0) ?>
                        <p>PROMO- <?= $product["discount"] ?> . "%".</p>
                        </div>
                            <?php endif; 
                            ?>
                    </div>
            </div>
        <?php endforeach; ?>
</body>
</html>


