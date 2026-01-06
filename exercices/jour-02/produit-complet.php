<!DOCTYPE html>
<html>
    <head>
        <title>Test PHP</title>
    </head>
    <body>
        <?php 

        $name = "Chaussure";
        $description = "Voici la description lorem";
        $price = "30";


            $product = [
                "name" => "Chaussures",
                "images" => [
                "https//exemple1.com/image1.jpg",
                "https//exemple1.com/image1.jpg",
                "https//exemple1.com/image1.jpg",
                ],
                "sizes" => ["S", "M", "L", "XL"],
                "reviews" => [
                    [
                    "author" => "Claude", 
                    "rating" => 5, 
                    "comment" => "génial"
                    ],

                    [
                    "author" => "Barbara", 
                    "rating" => 4, 
                    "comment" => "Super!"
                    ],
                ]
            ];

            echo "Voici la deuxième image" .$products["images"][1]. "\n"; // 2e image
            echo "Voici le nombre de taille disponible " . count($product["size"]). "\n";
            echo "Voici la note du premier avis sur le produit ". $product["reviews"] [0] ["rating"];

        ?>
    </body>
</html>