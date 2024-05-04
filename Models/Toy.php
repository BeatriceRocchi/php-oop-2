<?php

class Toy extends Product
{
  public $material;
  public $colors;
  public $interactive = false;

  public function __construct(string $_name, string $_type, string $_category, float $_fullprice, string $_img, string $_material, array $_colors)
  {
    parent::__construct($_name, $_type, $_category, $_fullprice, $_img);
    $this->material = $_material;
    $this->colors = $_colors;
  }
}
