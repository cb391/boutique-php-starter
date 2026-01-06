<!DOCTYPE html>
<html>
    <head>
        <title>Test PHP</title>
    </head>
    <body>
        <?php 

        $groceries = ["Pomme", "Banane", "Orange", "Mandarine","Kiwi"];
        echo $groceries [0];
        echo count($groceries);
        echo $groceries[5];

        array_push ($groceries, "Cerise", "Fraise");
        unset($groceries[3]);
        var_dump($groceries);     
        
        
        
        ?>
    </body>
</html>