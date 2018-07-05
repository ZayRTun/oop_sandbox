<?php
  /**
   * The Static Modifier
   * User: zayt
   * Date: 7/5/2018
   * Time: 12:57 PM
   *
   *  -Static Properties and Methods-
   *    -Behaviors related to the class generally
   *    -These are Behaviors that are not tied to a particular instance
   *    -For this reason they are often refer to as "Class properties", and "Class methods"
   *    -Accessible directly from the class, without any instance
   *    -Use keyword static
   *
   *  -Example-
      class Student {
        static $grades = ['Freshman', 'Sophomore', 'Junior', 'Senior'];

        static function motto() {
          return 'To learn PHP OOP!';
        }
      }
   *
   *    -Different syntax to reference static properties and methods
   *      -Student::$grades, Student::motto()
   *    -Static methods cannot use pseudo-variable $this
   *      -Instead use= self::$grades, self::motto()
   *    -Can be combined with visibility modifiers
   *
   *    -Example-
        class Student {
          public static $grades = ['Freshman', 'Sophomore', 'Junior', 'Senior'];
          private static $total_students = 0;

          public static function count() {
            return self::$total_students;
          }
        }

        echo Student::$grades[0]; // Freshman

        echo Student::$total_students; // Error: Cannot access private property
        echo Student::count(); // 0
   *
   *    -Static properties are not accessible from an instance/object
   *    -Static methods are accessible from an instance but
   *      -It's a bad practice: PHP 5 warning, PHP 7 deprecation notice
   */

  class Student {

    public static $grades = ['Freshman', 'Sophomore', 'Junior', 'Senior'];
    private static $total_students = 0;

    public static function motto() {
      return "To learn PHP OOP!";
    }

    public static function count() {
      return self::$total_students;
    }

    public  static function add_student() {
      self::$total_students++;
    }

  }

  echo Student::$grades[0] . "<br />";
  echo Student::motto() . "<br />";

//  echo Student::$total_students . "<br />"; // Error

  echo Student::count() . "<br />";
  Student::add_student();
  echo Student::count() . "<br />";
