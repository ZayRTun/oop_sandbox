<?php
  /**
   * Clone Method
   * User: zayt
   * Date: 7/9/2018
   * Time: 3:05 PM
   */

  class Beverage
  {
    public $name;

    public function __construct()
    {
      echo "New beverage was created.<br />";
    }

    public function __clone()
    {
      echo "Existing beverage was copied.<br />";
    }
  }

  $a = new Beverage();
  $a->name = 'coffee';
  echo $a->name . '<br />';

  echo '<hr />';

  $b = clone $a;
  echo $a->name . '<br />';
  echo $b->name . '<br />';

  echo '<hr />';

  $b->name = 'tea';
  echo $a->name . '<br />';
  echo $b->name . '<br />';
