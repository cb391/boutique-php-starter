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


echo displayBadge("Hello", 'green');
echo displayPrice(100);
echo displayStock(6);

?>