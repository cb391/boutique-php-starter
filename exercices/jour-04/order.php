<?php

$status = "shipped";

switch ($status) {
    case "standby":
        $label = "<span style='color: orange;'>⏳ Commande en attente de validation</span>";
        break;
    case "validated":
        $label = "<span style='color: green;'>⏳ Commande validée</span>";
        break;
    case "shipped":
        $label = "<span style='color: pink;'>⏳ Commande expédiée</span>";
        break;
    case "delivered":
        $label = "<span style='color: blue;'>⏳ Commande délivréé</span>";
        break;
    case "canceled":
        $label = "<span style='color: red;'>⏳ Commande annulée</span>";
        break;
    default:
        $label = "<span style='color: red;'>⏳ Erreur, contactez-nous</span>";
}

echo $label;



match ($status) {
    "standby"=> $label = "<span style='color: orange;'>⏳ Commande en attente de validation</span>",
    "validated"=> $label = "<span style='color: green;'>⏳ Commande validée</span>",
    "shipped"=> $label = "<span style='color: pink;'>⏳ Commande expédiée</span>",
    "delivered"=> $label = "<span style='color: blue;'>⏳ Commande délivréé</span>",
    "canceled"=> $label = "<span style='color: red;'>⏳ Commande annulée</span>",
    default=> $label = "<span style='color: red;'>⏳ Erreur, contactez-nous</span>",
};

echo $label;
