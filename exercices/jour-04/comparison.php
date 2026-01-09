
<?php
$a = 0;
$b = "";
$c = null;
$d = false;
$e = "0";

var_dump($a == $b); // false
var_dump($a === $b); // false 

var_dump($a == $c); // true car en valeur false renvoie un 0.
var_dump($a === $c); // false 

var_dump($a == $d); // true étonnant !
var_dump($a === $d); // false 

var_dump($a == $e); // true
var_dump($a === $e); // false 

?> 

