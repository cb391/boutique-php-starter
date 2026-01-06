<!DOCTYPE html>
<html>
    <head>
        <title>Test PHP</title>
    </head>
    <body>
        <?php 
$clothes = ["T-shirt", "Jean", "Pull"];
$accessories = ["Ceinture", "Montre", "Lunettes"];

// Fusionne les deux tableaux array_merge
$catalog = array_merge ($clothes, $accessories);
echo count($catalog);

// ajouter une valeur au début du tableau, différent de arrau_push (à la fin)
array_unshift($catalog,"Echarpe");

var_dump($catalog);

echo $catalog;


        ?>
    </body>

</html>