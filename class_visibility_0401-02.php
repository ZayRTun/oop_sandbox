<?php
  /**
   * Created by PhpStorm.
   * User: Zay
   * Date: 7/4/2018
   * Time: 7:51 PM
   *
   * -Visibility Modifiers-
   *  -Modifier-        -Accessible from-
   *    public            Anywhere
   *    protected         Inside this class and its subclasses
   *    private           Inside this class only
   *
   *  class Example {
   *    public $a;  // default if undeclared (var)
   *    protected $b;
   *    private $c;
   *
   *    public function hello_world() { // default if undeclared
   *      return "Hello everyone!";
   *    }
   *
   *    public function hello_family() {
   *      return "Hello family!";
   *    }
   *
   *    public function hello_me() {
   *      return "Hello me!";
   *    }
   *  }
   *
   *  -Best Practices-
   *    -Always use visibility modifiers, not default(vars)
   *    -Consider  visibility when coding
   *    -Make properties and methods public only when necessary
   *    -Group properties and methods with similar visibility
   */

  class Student {

    public $first_name;
    public $last_name;
    public $country = 'None';

    protected  $registration_id;
    private $tuition = 500.00;

    public function full_name() {
      return $this->first_name . ' ' . $this->last_name;
    }

    public function hello_world() {
      return 'Hello world!';
    }

    protected function hello_family() {
      return 'Hello family!';
    }

    private function hello_me() {
      return 'Hello me!';
    }

    public function tuition_fmt() {
      return '$' . $this->tuition;
    }

  }

  class PartTimeStudent extends Student {
    public function hello_parent() {
      return $this->hello_family();
    }
  }

  $student1 = new PartTimeStudent();
  $student1->first_name = 'Lucy';
  $student1->last_name = 'Ricardo';

//  echo $student1->registration_id;
//  echo $student1->tuition;

  echo $student1->full_name() . "<br />";

  echo $student1->hello_world() . "<br />";
//  echo $student1->hello_family() . "<br />";
//  echo $student1->hello_me() . "<br />";
  echo $student1->hello_parent() . "<br />";


  /**
   * -Overloading-
   *  -A case to notice-
   *    -Get value of undefined property: gives a notice no available
   *    -Set value of undefined property: will define and set
   *    -Private properties may seem to be visible in subclasses but not  really
   * */
//  $student1->tuition = 1000;
//  echo $student1->tuition . "<br />";

  // still calling tuition from Parent class
  echo $student1->tuition_fmt() . "<br />";

