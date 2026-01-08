<!DOCTYPE html>
<html>
    <head>
        <title>Test PHP</title>
    </head>
    <body>
        <?php 

        $products = [ ];
       
        for ($i = 0; $i < 10; $i++) {
            $products[$i] = [
            "Produit" => "Produit" .$i, 
            "price" => rand(90, 100), 
            "stock" => rand(0, 5),
            ];
        }


foreach ($products["stock"] as $n) {
    if ($n === 0) {
        continue; // Saute le 0, passe au suivant
    }
}

foreach($products["price"] as $m) {
    if ($m > 100) {
        break;
    }  // arrête complètement la boucle
}             
                var_dump($products);
        ?>




    </body>

</html>

