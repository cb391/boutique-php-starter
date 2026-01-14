<?php

function IsInStock($stock) {
    if ($stock > 0)
        return true;

};

function IsOnSale ($discount) {
    if ($discount > 0)
        return true;
};

function IsNew ($dateAdded) {
    $daysSince = (time() - strtotime ($dateAdded))/ 86400;
    if ($daysSince < 30)
        return true;    
};

function canOrder($stock,$quantity) {
    if ($stock > $quantity)
        return true;
};


echo IsInStock(3);

echo IsOnSale (40);

echo canOrder(3,1);

echo IsNew ("2026-01-15");

?>