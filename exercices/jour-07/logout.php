<?php 
session_start();

session_destroy();           //  détruit toute session, elle n'a pas besoin d'argument.

header ("Location: login.php");
exit;

?>