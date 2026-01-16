<?php


$priceExcludingTax=100;
$rate = 0.8;
$percentage = 0.1;

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


echo "Le prix de la TVA est " . calculateVAT ($priceExcludingTax, $rate).".  ";

echo  "Le prix TTC est de ". calculateIncludingTax ($priceExcludingTax, $rate).". ";

echo "Le prix remisé est de ". calculateDiscount($price, $percentage).". ";
?>