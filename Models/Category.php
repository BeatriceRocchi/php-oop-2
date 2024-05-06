<?php

class Category
{
  public $animal;
  public $icon;

  public function __construct(string $_animal, string $_icon)
  {
    $this->animal = $_animal;
    $this->icon = $_icon;
  }
}
