<?= 
$age;

if ($age > 18) {
    echo "Minor";
} elseif (18 > $age > 25) {
    echo "young adult";
} elseif (26 > $age > 64) {
    echo " adult";
} else {
    echo "Senior";
}

//Affiche :

    //"minor" si < 18
    //"Young adult" si entre 18 et 25
    //"Adult" si entre 26 et 64
    //"Senior" si >= 65

match($age) { # int
    18 => "minor", #int => mixed
    default => "Senior",
};

match(true) { # boolean
    $age < 18 => "minor", #boolean => mixed
    default => "Senior",
};

?>
