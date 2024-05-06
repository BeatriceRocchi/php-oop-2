<?php

class Toy extends Product
{
  public $material;
  public $colors;
  public $interactive;

  public function __construct(string $_name, string $_type, Category $_category, float $_fullprice, string $_img, string $_material, array $_colors, string $_interactive = null)
  {
    parent::__construct($_name, $_type, $_category, $_fullprice, $_img);
    $this->material = $_material;
    $this->colors = $_colors;
    $this->interactive = $_interactive;
  }

  public function getFullInfo()
  {
    return parent::getFullInfo() . " in " . $this->material . "<br>" . "<strong>Colori</strong>: " . implode(", ", $this->colors) . "<br>" . $this->interactive ?? '';
  }
}
