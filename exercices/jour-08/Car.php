<?php 

class Car
{
    public string $brand;
    public string $model;
    public int $year;

    public function __construct(string $brand, string $model, int $year)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
    }

    public function display(): string
    {
        return "{$this->brand} {$this->model} {$this->year}";
    }
    public function getAge() { 
    return "La voiture a : ". date ('Y') - $this->year."ans";
    }


}

$car1 = new Car("Renault", "Clio", 2010);

$car2 = new Car("Citroën","Berlingo",2005);

$car3 = new Car("Toyota","Corrolla",2008);

echo $car1->display();
echo $car2->display();
echo $car3->display();

echo $car1 ->getAge ();

?>