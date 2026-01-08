<!DOCTYPE html>
<html>
    <head>
        <title>Test PHP</title>
    </head>
    <body>
        <?php 
$tab = [
    "nom" => "Carla",
    "age" =>"25ans", 
    "city" =>"Grenoble",
    "Job" => "Développeur"
];

foreach ($tab as $key => $value) {
    echo "<strong>$key </strong> : $value<br>";
}
        ?>
    </body>

</html>
