
<?php

// http://localhost:5050/?name=Marie&age=25 le "?" indique le début des variables, on les sépare avec une "&".

$_GET["name"];
$_GET["age"];

// htmlspecialchars — converti des caractère spéciaux en entités HTML
if ($_GET["name"]) {
echo 'Bonjour ' . htmlspecialchars($_GET["name"]).'vous avez '.htmlspecialchars($_GET["age"]). "ans. ";
}
else {
    echo "Bonjour, visiteur !";
};

?>


