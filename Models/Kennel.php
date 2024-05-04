<?php

class Kennel extends Product
{
  public $shape;
  public $materials;

  public function __construct(string $_name, string $_type, string $_category, float $_fullprice, string $_img, string $_shape, array $_materials)
  {
    parent::__construct($_name, $_type, $_category, $_fullprice, $_img);

    $this->shape = $_shape;
    $this->materials = $_materials;
  }

  public function getFullInfo()
  {
    return parent::getFullInfo() . " di forma " . $this->shape . "<br>" . "<strong>Materiali</strong>: " . implode(", ", $this->materials);
  }
}
