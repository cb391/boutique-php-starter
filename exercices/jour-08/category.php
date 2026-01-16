<?php

Class Category {
    private $id;
    private $name;
    private $description;

    public function __construct($id, $name, $description) {
        $this->id = $id;   
        $this->name = $name;
        $this->description = $description;

}
public function getId() {
    return $this->id;
}

public function getName() {
    return $this->name;
}

public function getDescription() {
    return $this->description;
}

function slugify(){

    $chaineslug = strtolower($this->name);
    $chaineslug = strtr($chaineslug," ","-");
    echo $chaineslug;
    return $chaineslug;

}
}

$Category1 = new Category(1,"Chocolat Noir", "Equateur 80%");
$Category2 = new Category(2,"Chocolat au Lait","Colombie 50%");
$Category3 = new Category(3,"Chololat Blanc","Colombie 10%");

$Category1->slugify();
$Category2->slugify();
$Category3->slugify();

?>

