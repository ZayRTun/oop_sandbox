<?php
  /**
   * Autoload Undefined Classes
   * User: zayt
   * Date: 7/10/2018
   * Time: 11:12 AM
   *
   *  -Autoload Undefined Classes-
   *    -__autoload();
   *      -Defined as a non-class function
   *      -A function Called automatically when PHP encounters an unknown class
   *      -That will provide an opportunity to locate the class definition
   *
   *  -In PHP v4-5
   *    function __autoload($class)
   *    {
          echo "Definition for {$class} is missing!";
   *    }
   *    $dog = new pet();
   *
   *  -The new way of doing this is as follows:
   *  -From PHP v7:
   *    function my_autoload($class)
   *    {
          echo 'Definition for {$class} is missing!';
   *    }
   *
   *  -Register with SPL(standard public library) function:-
   *    -spl_autoload_register('my_autoload');
   */

  function my_autoload($class)
  {
    if (preg_match('/\A\w+\Z/', $class)) {
      include 'classes/' . $class . '.class.php';
    }
  }
  spl_autoload_register('my_autoload');

  $bike = new Unicycle();
  $bike->brand = 'Trek';
  echo $bike->brand;