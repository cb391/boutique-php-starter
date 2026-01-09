<?php
$products = [         
            ["name"=> "Basket", 
            "description" => "AirMax",
            "price" => "30", 
            "stock" => "5",
            "category"=> "Chaussre",
            "brand" => "nike",
],
            ["name"=> "Echarpe", 
            "description" => "laine",
            "price" => "15", 
            "stock" => "2",
            "category"=> "Accessoires",
            "brand" => "Zara",
],
            ["name"=> "Bonnet", 
            "description" => "Laine mailles",
            "price" => "10", 
            "stock" => "10",
            "category"=> "Accessoires",
            "brand" => "Stradivarius",
],
            ["name"=> "Ceinture", 
            "description" => "Cuir",
            "price" => "20", 
            "stock" => "12",
            "category"=> "Accessoires",
            "brand" => "cache",
],
            ["name"=> "Gants", 
            "description" => "Monoprix",
            "price" => "12", 
            "stock" => "18",
            "category"=> "Accessoire",
            "brand" => "Monoprix",
],
];

$products[0]["name"];
?>

<?php foreach ($products as $product): ?>

<article>
    <h3><?= $product["name"] ?></h3>
    <p class="prix"><?= $product["price"] ?> €</p>
    <p class="stock">Stock : <?= $product["stock"] ?></p>
</article>

<?php endforeach; ?>


    </body>

    </html>


