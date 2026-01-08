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
            "price" => rand(10, 100), 
            "stock" => rand(0, 50),
            ];
        }

             
                var_dump($products);
        ?>
<h1> Affichage du tableau ci-dessous</h1>

<div> Voici le Tableau:

 <?=print_r($products) ?>:


</div>



    </body>

</html>


