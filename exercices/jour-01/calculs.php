<!DOCTYPE html>
<html>
    <head>
        <title>Test PHP</title>
    </head>
    <body>
     
        <?php echo '<p>Bonjour le monde</p>'; 
    
    $name = 'mandarine';
    $price = 29.99;
    $stock = 12;
    $onSale = true;
    
    
    $priceExcludingTax = 1;
    $vat = 0.2;
    $quantity = 3;

        var_dump ($name);
        var_dump ($price);
        var_dump ($stock);
        var_dump ($onSale);

echo "Le produit $name coûte $price €"; 

echo "Le montant de la TVA pour $name est de ".($price * $vat);

echo "Le prix TTC unitaire de $name est de".($priceExcludingTax* $price);

echo "Le total pour la quantité commandée est de".(3*$priceExcludingTax*$price + 3*$vat);
        
        ?>
    </body>
</html>

