<?php

class Food extends Product
{
  public $foodType;
  public $ingredients;
  public $ageRange;
  public $nutritionalIndication;
  public $size;

  public function __construct(string $_name, string $_type, string $_category, float $_fullprice, string $_img, string $_foodType, array $_ingredients, string $_ageRange, string $_nutritionalIndication, array $_size)
  {
    parent::__construct($_name, $_type, $_category, $_fullprice, $_img);

    $this->foodType = $_foodType;
    $this->ingredients = $_ingredients;
    $this->ageRange = $_ageRange;
    $this->nutritionalIndication = $_nutritionalIndication;
    $this->size = $_size;
  }

  public function getFullInfo()
  {
    return parent::getFullInfo() . " di tipo " . $this->foodType . "<br>" . "<strong>Ingredienti</strong>: " . implode(", ", $this->ingredients) . "<br>" . "<strong>Caratteristiche nutrizionali</strong>: " . $this->nutritionalIndication . " ed adatto a " . $this->ageRange . " di taglia " . implode(", ", $this->size);
  }
}
