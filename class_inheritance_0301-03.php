<?php
  /**
   * Created by PhpStorm.
   * User: zayt
   * Date: 7/4/2018
   * Time: 12:15 PM
   *
   * -Inheritance-
   *  When a new class takes on the properties and methods of an existing class.
   *    -Organize code
   *    -Prevent repetition
   *    -Simplify maintenance
   *    -Prevent inconsistencies and bugs
   *      -Behaviors of a class are shared with subclasses
   *      -Add new behaviors to parent and all subclasses gain them
   *      -Subclasses can override parent behaviors
   *      -Subclasses can extend parent behaviors
   *
   * -Define a Subclass-
   *
   *    class Parent {
   *
   *    }
   *
   *    class Subclass extends Parent {
   *
   *    }
   */

  class User {

    var $is_admin = false;

    var $first_name;
    var $last_name;
    var $username;

    function full_name() {
      return $this->first_name . " " . $this->last_name;
    }

  }

  class Customer extends User {

    var $city;
    var $state;
    var $country;

    function location() {
      return $this->city . ", " . $this->state . ", " . $this->country;
    }

  }

  class AdminUser extends User {

    var $is_admin = true;

    function full_name() {
      return $this->first_name . " " . $this->last_name . " (Admin)";
    }

  }

  $u = new User();
  $u->first_name = 'Jerry';
  $u->last_name = 'Seinfeld';
  $u->username = 'jseinfeld';

  $c = new Customer();
  $c->first_name = 'George';
  $c->last_name = 'Costanza';
  $c->username = 'gcostanza';
  $c->city = 'New York';
  $c->state = 'New York';
  $c->country = 'United States';


  echo $u->full_name() . "<br />";
  echo $c->full_name() . "<br />";

  echo $c->location() . "<br />";
  //  echo $u->location() . "<br />";

  // get_parent_class($mixed); // Takes class/instance as an argument and returns the name of the parent class
  echo get_parent_class($u) . '<br />';
  echo get_parent_class($c) . '<br />';


  // is_subclass_of($mixed, $string); // Takes class/instance as an argument(1st arg) and checks if subclass of parent(2nd arg)
  if (is_subclass_of($c, 'User')) {
    echo "Instance is a subclass of User.<br />";
  }


  // class_parents($mixed); // Returns all parent classes of class/instance as an array
  $parents = class_parents($c);
  echo implode(', ', $parents) . "<br />";