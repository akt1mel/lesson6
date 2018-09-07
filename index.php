<?php

class Car
{
    protected $mark;
    protected $color;
    protected $maxSpeed;

    public function __construct($mark, $color, $maxSpeed)
    {
        $this->mark = $mark;
        $this->color = $color;
        $this->maxSpeed = $maxSpeed;
    }

    public function getMaxSpeed()
    {
        return $this->maxSpeed;
    }
}


class Tv
{
    protected $mark;
    protected $diagonal;
    protected $price;

    public function __construct($mark, $diagonal, $price)
    {
        $this->mark = $mark;
        $this->diagonal = $diagonal;
        $this->price = $price;
    }

    public function getPrice()
    {
        return $this->price;
    }

}

class Pen
{
    protected $color;
    protected $automatic;
    protected $coreThickness; //Толщина стержня

    public function __construct($color, $coreThickness, $automatic = true)
    {
        $this->color = $color;
        $this->аutomatic = $automatic;
        $this->coreThickness = $coreThickness;
    }

    public function aboutPen()
    {
        $auto = ($this->automatic) ? 'автоматическая' : 'неавтоматическая';
        return "Данная ручка ".$auto." цвет: ".$this->color." Толщина стержня: ".$this->coreThickness;
    }


}

class Duck
{
    public $color;
    public $habitat; //место обитания

    public function setHabitat($habitat)
    {
        $this->habitat = $habitat;
        return $habitat;
    }

}


class Product
{
    protected $category;
    protected $weight;
    protected $price;
    protected $deliveryCost;

    public function __construct($category, $price, $weight)
    {
        $this->category = $category;
        $this->price = $price;
        $this->weight = $weight;
    }

    public function getDeliveryCost($distance)
    {
        return ($distance * $this->weight) /10 ; //формула придуманная для задания
    }


}


$audi = new Car('audi', 'red', 200);
$nissan = new Car('Nissan', 'blue', 180);
echo $audi->getMaxSpeed();

$lgTv = new Tv("LG", 50, 10000);
$samsung = new Tv('Samsung', 37, 9820);
echo $samsung->getPrice();


$pen = new Pen("желтый", 0.7, false);
$anotherPen = new Pen('green', 1.4, true);
echo $pen->aboutPen();
echo $anotherPen->aboutPen();

$firstDuck = new Duck();
$secondDuck = new Duck();
echo $firstDuck->setHabitat('Moscow');

$phone = new Product('phone', 25000, 0.15);
$cup = new Product('dishes', 150, 0.3);
echo $cup->getDeliveryCost(150);