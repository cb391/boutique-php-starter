<?php 

Class Product{

    private int $id;
    private string $name;
    private float $price;
    private int $stock;

    public function __construct($id,$name,$price,$stock){
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->stock = $stock;
    }

    // Ne pas oublier les GETTERS !!
    public function getId(): int {
        return $this->id;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getPrice(): float {
        return $this->price;
    }

    public function getStock(): int {
        return $this->stock;
    }

    function ValeurTotalProduit(): int {
    return $this->price *$this->stock;
}

}


$Product1 = new Product(1,"Chaussette",2,10);
$Product2 = new Product(2,"Casquette",4,15);
$Product3 = new Product(3,"Pantalon",15,20);
$Product4 = new Product(4,"Pull",10,25);
$Product5 = new Product(5,"Débardeur",5,30);

$Tab = [$Product1, $Product2, $Product3, $Product4, $Product5];

foreach($Tab as $products) {
    echo "ID:".$products->getId() . "<br>";
    echo "Nom: ".$products->getName() . "<br>";
    echo "Prix : ".$products->getPrice() . "<br>";
    echo "Stock: ".$products->getStock() . "<br>";
    echo "Valeur totale : ". $products->ValeurTotalProduit() . "<br>". "<br>";
    $sommeStock += $products->getStock();
    $sommeValue += $products->ValeurTotalProduit();
}

echo "La valeur totale de stock est de ". $sommeStock ."<br>";
echo "La valeur globale des produits est de ". $sommeValue ."<br>";

?>