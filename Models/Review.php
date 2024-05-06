<?php
trait Review
{
  public $tot;
  public $stars;

  public function getReviewsInfo()
  {
    return "su $this->tot recensioni";
  }
}
