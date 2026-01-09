 <?php 
$firstNames = ["Carla","José","Christian","Karim","Lola"];
$i=1;
?>

<ul>
<?php foreach ($firstNames as $name): ?>
    <li> <?= $i ?> . <?= $name ?> </li> // le point permet de mettre le 1. 
     <?php 
    $i++;
    endforeach; ?>
</ul>


