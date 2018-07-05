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
    private $tuition = 0.00;

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

  }

  $student1 = new Student();
  $student1->first_name = 'Lucy';
  $student1->last_name = 'Ricardo';

  $student2 = new Student();
  $student2->first_name = 'Ethel';
  $student2->last_name = 'Mertz';

  echo $student1->full_name() . "<br />";
  echo $student2->full_name() . "<br />";

  echo $student1->say_hello() . "<br />";
  echo $student2->say_hello() . "<br />";


  // get_class_methods($mixed(class/object)); // Returns the different methods available on it
  $class_methods = get_class_methods('Student'); //
  echo "Class methods: " . implode(', ', $class_methods) . "<br />";


  // method_exists($mixed, $string); // Returns T/F if the method(2nd arg) exists on the object/class(1st arg)
  if (method_exists('Student', 'say_hello')) {
    echo "Method say_hello() exists in Student class.<br />";
  } else {
    echo "Method say_hello() does not exists in Student class.<br />";
  }