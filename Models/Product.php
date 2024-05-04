<?php

class Product
{
  public $name;
  public $type;
  public $category;
  public $fullprice;
  public $img;

  public function __construct(string $_name, string $_type, string $_category, float $_fullprice, string $_img)
  {
    $this->name = $_name;
    $this->type = $_type;
    $this->category = $_category;
    $this->fullprice = $_fullprice;
    $this->img = $_img;
  }
}
