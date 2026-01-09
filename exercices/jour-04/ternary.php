!DOCTYPE <html>
<html>
    <head>
        <title>Test PHP</title>
    </head>
    <body>
        <?php 

$products=[
    ['name'=> "Chaussures",
    'price' => "60",
    'stock'=> "3",
    'onSale' => true],

    ['name'=> "Pantalons",
    'price' => "40",
    'stock'=> "5",
    'onSale' => true],

    ['name'=> "Chaussettes",
    'price' => "20",
    'stock'=> "0",
    'onSale' => false]
];

?>

</body>

<div class="product"> 

    <?php foreach ($products as $product): ?>
    
        <h3> 
        <?= $product["name"] ?> 
        <?=$product['onSale'] 
        ? "Disponible en PROMO"
        : "Fin de PROMO !"
        ?>
        </h3>

        <p>
        <?= $product["stock"] > 0 
        ? 'Ce produit est en stock' 
        : 'Rupture de stock sur ce produit' ?>
        </p>   

        <p> 
            <?= $product["onSale"] == true
            ? "🔥 PROMO". $product['price'] * 0.8
            : "FIN DE PROMO"?> 


            <span style="text-decoration: line-through;">
                <?= $product["price"] ?>
            </span>        
        </p>

    <?php endforeach; ?>

</div>


</html>
