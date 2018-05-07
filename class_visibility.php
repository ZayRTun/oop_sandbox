<?php 

  class Student {

    public $first_name;
    public $last_name;
    public $country = 'None';

    protected $registration_id;
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
    public function call_protected() {
      return $this->hello_me();
    }
  }

  class PartTimeStudent extends Student {
    public function hello_parent() {
      return $this->hello_family();
    }
  }
  
  $student1 = new Student;
  // $student1 = new PartTimeStudent;
  $student1->first_name = 'Lucy';
  $student1->last_name = 'Ricardo';

 
  echo $student1->full_name() . "<br />";

  // echo $student1->hello_world() . "<br />";
  // echo $student1->hello_parent() . "<br />";
  // echo $student1->hello_family() . "<br />";
  // echo $student1->hello_me() . "<br />";

  echo $student1->call_protected();

  // $class_vars = get_class_methods('Student');
  // echo "<strong>Class methods:</strong> " . implode(', ', $class_vars) . "<br />";



  // if(method_exists('Student', 'say_hello')) {
  //   echo "Method say_hello exists in Student class <br />";
  // } else {
  //   echo "Method say_hello does not exists in Student class <br />";
  // }

?>