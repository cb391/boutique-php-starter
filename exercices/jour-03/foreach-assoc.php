<?php 
$tab = [
    "nom" => "Carla",
    "age" =>"25ans", 
    "city" =>"Grenoble",
    "Job" => "Développeur"
];
?>

<?php foreach ($tab as $key => $value) : ?>

    <strong><?= $key?></strong> : <?= $value ?>

<?php endforeach; ?>

  