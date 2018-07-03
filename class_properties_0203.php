<?php

  /* Class Properties
   * Variables to hold object values
   * Also called: attributes, class variables, instance variables
   * Define with var keyword, followed by $variable_name
   * Can set an initial value
   * */

  class Student {

    var $first_name;
    var $last_name;
    var $country = 'None';

  }

  $student1 = new Student();
  $student1->first_name = 'Lucy';
  $student1->last_name = 'Ricardo';

  $student2 = new Student();
  $student2->first_name = 'Ethel';
  $student2->last_name = 'Mertz';

  echo $student1->first_name . " " . $student1->last_name . "<br />";
  echo $student2->first_name . " " . $student2->last_name . "<br />";

  // get_class_vars($string); // Returns a assoc array of props that are defined in this class
  $class_vars = get_class_vars('Student'); //
  echo "Class vars:<br />";
  echo "<pre>";
  print_r($class_vars);
  echo "</pre>";

  // get_object_vars($object); // Returns the current vars/props of this instance/object
  $object_vars = get_object_vars($student1); //
  echo "Object vars:<br />";
  echo "<pre>";
  print_r($object_vars);
  echo "</pre>";

  // property_exists($mixed(class/object), $string); // Returns T/F if the property(2nd arg) exists in the class/obj(1st arg)
  if (property_exists('Student', 'first_name')) {
    echo "Property first_name exists in Student class.<br />";
  } else {
    echo "Property first_name does not exists in Student class.<br />";
  }