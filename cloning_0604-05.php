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
  echo "<hr />";

  /**
   * Assignment by Reference
   *  -Example
        $a_assign = 1;
        $b_assign =& $a_assign; // By using & is assigned by reference
        $a_assign = 2;
        echo 'Assigned by Reference: ' . $b_assign . '<br />';
   *
   *  -Objects are always assigned by reference
   *  -Variables reference an object identifier
   *  -Assignment is copying the identifier value, its pointing to same memory
   *  -Example
   *    $a = new Product();
   *    $a->name = 'coffee';
   *
   *    $b = $a;
   *    $a->name = 'tea';
   *    echo $b->name; // Return not 'coffee' but 'tea' as its assigned by reference
   *
   *  -To dublicate an object with different Identifier use -clone-
   *  -Example
   *    $a = new Product();
   *    $a->name = 'coffee';
   *    $b = clone $a;
   *    $a->name = 'tea';
   *    echo $b->name; // Returns 'coffee'; // Its a duplicate but a different object
   *
   *
   */

  echo "Assignment by Reference:<br />";
  $c = $b;
  $c->name = 'orange juice';
  echo $a->name . '<br />';
  echo $b->name . '<br />'; // Returns 'orange juice'
  echo $c->name . '<br />'; // Returns 'orange juice' sharing the same object id as the are assigned by reference

