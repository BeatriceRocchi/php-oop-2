<?php

require_once __DIR__ . "/Review.php";

class Product
{
  public $name;
  public $type;
  public $category;
  protected $fullprice;
  public $img;

  use Review;

  public function __construct(string $_name, string $_type, string $_category, float $_fullprice, string $_img)
  {
    $this->name = $_name;
    $this->type = $_type;
    $this->category = $_category;
    $this->setPrice($_fullprice);
    $this->img = $_img;
  }

  // Setter
  public function setPrice($_fullprice)
  {
    if (empty($_fullprice) || $_fullprice <= 0) {
      throw new Exception('Il prezzo non può essere vuoto e deve essere un numero maggiore di 0');
    }
    $this->fullprice = $_fullprice;
  }

  // Getter
  public function getPrice()
  {
    return $this->fullprice;
  }

  public function getFullInfo()
  {
    return "$this->type per $this->category";
  }
}
