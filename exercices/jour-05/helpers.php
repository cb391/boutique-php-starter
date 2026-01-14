<?php

function displayBadge($text, $color) {
    return "<span class='badge' style='background:$color'>$text</span>";
};

function displayPrice($price, $discount = 0) {
return "<strike> $price </strike> ";
};

function displayStock($quantity) {
    return "<p style= 'color:#FF0000;'> $quantity </p>";
};

//montage de la TVA
function calculateVAT ($ppriceExcludingTax, $prate) {
$resultVAT = $ppriceExcludingTax * $prate;
return $resultVAT;
};

// prix TVA
function calculateIncludingTax ($ppriceExcludingTax,$prate) {
$resultTTC = $ppriceExcludingTax + ($ppriceExcludingTax*$prate);
return $resultTTC;
};

//prix après remise
function calculateDiscount ($pprice, $ppercentage) {
$resultRemise = $pprice * ($pprice * $ppercentage);
    return $resultRemise;
};

function formatPrice($amount, $currency = "€", $decimals = 2) {

    return number_format($amount,$decimals). $currency;
}

function greet() {
    echo "Bienvenue sur la boutique";
}

function greetClient($name) {
    echo "Bonjour". $name;
}

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
?>