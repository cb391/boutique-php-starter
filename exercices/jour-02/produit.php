<!DOCTYPE html>
<html>
    <head>
        <title>Test PHP</title>
    </head>
    <body>
        <?php 

        $product = [
            "name"=> "Chaussure", 
            "description" => "AirMax",
            "price" => "30", 
            "stock" => "5",
            "category"=> "urban",
            "brand" => "nike",
        ];

        $product["dateAdded"] = date("j,n, Y");

        $product[price] = 30*0.9;
        
        ?>
    </body>
</html>