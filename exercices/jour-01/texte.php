<!DOCTYPE html>
<html>
    <head>
        <title>Test PHP</title>
    </head>
    <body>
     
        <?php echo '<p>Bonjour le monde</p>'; 
    
$brand = "Nike";
$model = "Air Max";

echo "Chaussures $brand $model";
echo "Chaussures".$brand.$model;
echo sprintf ($brand, $model);

        ?>
    </body>
</html>