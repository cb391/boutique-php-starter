<?php

$stock = 3;
$active = true;
$promoEndDate = "2024-12-31";

if ($stock > 0 && $active == true) {
    echo "disponible";
}

else {
    echo "indisponible";
}

if (strtotime ("now") < strtotime ( $promoEndDate ))
{
    echo "Le produit est en promo";
}
else {
    echo "Le produit n'est plus en réduction !";
}



?>