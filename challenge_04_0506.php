<?php
  /**
   * Challenge: Static references.
   * User: Zay
   * Date: 7/7/2018
   * Time: 9:13 PM
   */

  class Bicycle {

    public static $instance_count = 0;


    public $brand;
    public $model;
    public $year;
    public $category;
    public $description = 'Used bicycle';
    protected $weight_kg = 0.0;
    protected static $wheels = 2;

    public const CATEGORIES = ['Road', 'Mountain', 'Hybrid', 'Cruiser', 'City', 'BMX'];

    public static function create() {
      $class_name = get_called_class();
      $obj = new $class_name;
//      $obj = new static(); // self & static work here too!
      self::$instance_count++;
      return $obj;
    }

    public function name() {
      return $this->brand . ", " . $this->model . " (" . $this->year . ")";
    }

    public static function wheel_details() {
      return "It has " . static::$wheels . " wheels";
    }

    public function weight_kg() {
      return $this->weight_kg . " kg";
    }

    public function set_weight_kg($value) {
      $this->weight_kg = floatval($value);
    }

    public function  weight_lbs() {
      $lbs =  floatval($this->weight_kg) * 2.2046226218;
      return $lbs . "lb";
    }

    public function  set_weight_lbs($value) {
      $this->weight_kg = floatval($value) / 2.2046226218;;
    }
  }

  class Unicycle extends Bicycle {
    // visibility must match property being overridden
    protected static $wheels = 1;

    public function bug_test() {
      return $this->weight_kg;
    }
  }

  $trek = new Bicycle();
  $trek->brand = 'Trek';
  $trek->model = 'Emonda';
  $trek->year = '2017';

  echo 'Bicycle count: ' . Bicycle::$instance_count . "<br />";
  echo 'Unicycle count: ' . Unicycle::$instance_count . "<br />";

  $bike = Bicycle::create();
  $uni = Unicycle::create();

  echo 'Bicycle count: ' . Bicycle::$instance_count . "<br />";
  echo 'Unicycle count: ' . Unicycle::$instance_count . "<br />";

  echo "<hr />";
  echo 'Categories: ' . implode(', ', Bicycle::CATEGORIES) . '<br />';
  $trek->category = Bicycle::CATEGORIES[0];
  echo 'Category: ' . $trek->category . '<br />';

  echo '<hr />';

  echo 'Bicycle: ' . Bicycle::wheel_details() . '<br />';
  echo 'Unicycle: ' . Unicycle::wheel_details() . '<br />';