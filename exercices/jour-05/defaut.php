<?php

function formatPrice($amount, $currency = "€", $decimals = 2) {

    return number_format($amount,$decimals). $currency;
}

echo formatPrice(99.999); 
// comme les deux autres paramètre sont déjà définis, il ne faut indiquer que amount pour qu'elle fonctionne. number_format arrondi au-dessus
echo formatPrice(99.999,"$"); 
// comme on change le deuxième paramètre, il comprend que $=€
echo formatPrice(99.999,"€",0); 

// Quand les paramètres ne sont pas obligatoires, généralement on le notifie avec un ? avant ex: "?string"

?>