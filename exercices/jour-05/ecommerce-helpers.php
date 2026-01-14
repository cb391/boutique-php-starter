<?php

// fonctions de calcul
function calculateIncludingTax(float $priceExcludingTax, float $vat = 20) {
$resultTTC = $priceExcludingTax + ($priceExcludingTax*$vat);
return $resultTTC;
};


function calculateDiscount(float $price, float $percentage) {
$resultRemise = $price * ($price * $percentage);
    return $resultRemise;
};


function calculateTotal(array $cart) {
$resultArray = count ($cart);
return $resultArray ;
};

// fonction de formatage

function formatPrice($amount) {
    return number_format($amount);
};

function displayBadge($text, $color) {
    return "<span class='badge' style='background:$color'>$text</span>";
};

// fonction d'affichage
function validateEmail(string $email) {
    $resultvalid = ["azerty@gmail.com", "1234@gmail.com","abcd@gmail.com"]; 
    if (in_array ("$email",$resultvalid));
    return true;
};

function validatePrice(mixed $price) {
    $resultPrice = [45,78,43,98];
    if (in_array ($price, $resultPrice))
    return true;
};


// fonction de debug

function dump_and_die(mixed ...$vars) {

    echo '<pre style="background: #1e1e1e; color: #4ec9b0; padding: 20px; border-radius: 5px;">;
    </pre>';

    foreach ($vars as $key => $value) {
        $typeVar = gettype ($vars[$key]);
        echo "La fonction ". $key. "de type ".$typeVar. "présente la valeur suivante: ". $value; 
        die ();
    };

};

?>