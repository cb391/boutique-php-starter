<!DOCTYPE html>
<html>
    <head>
        <title>Fiche Complète Produit PHP</title>
    </head>
    <body>
     
        <?php  
    
    $name = 'mandarine';
    $priceHT = 2.99;
    $stock = 3;
    $tva = $priceHT * 0.2;
    $price = $priceHT + $tva;


echo '<p style="color:red; font-size:14px;">Description: Notre produit est excellent</p>';
echo "Le stock de $name est actuellement de ".$stock; 
$phrase = sprintf ("Le prix TTC unitaire d'une %s est de %.2f",$name, $price) ; 
echo $phrase;

            ?>
    </body>
</html>