<?php

class Product
{
    public $id;
    public $name;
    public $description;
    public $price;
    public $stock;
    public $categorie;


    public function __construct($id, $name, $description, $price, $stock, $categorie)
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->stock = $stock;
        $this->categorie = $categorie;
    }

    public function getPriceIncludingTax(float $vat = 20){
    $this->price = ($this->price + ($vat/100));
    echo "Le prix avec la TVA vaut : ".$this->price;
    }

    public function isInStock(): bool{
        if ($this->stock >0 ) {
        return true;
    }else {
      return false;  
    };
    }


    public function reduceStock(int $quantity){
        $this->isInStock() - $quantity;
        echo "Il y a ". $this->stock." ". $this->name;
    }

    public function applyDiscount(float $percentage){
        $this->price = ($this->price + ($this->price * $percentage));
        echo "Le prix réduit de " .$this->name." vaut ". $this->price."€"; 
    }
}

$Product1 = new Product(1, "Chaussette","Belle chaussette", 5, 7, "Vêtements"); 
$Product1->applyDiscount(2); 
$Product1->reduceStock(2);
$Product1->getPriceIncludingTax(20);
$Product1->isInStock();







