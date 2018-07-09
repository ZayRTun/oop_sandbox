<?php
  /**
   * Challenge: Static References.
   * User: zayt
   * Date: 7/9/2018
   * Time: 10:01 AM
   */

  class Bicycle {

    public static $instance_count = 0;

    public $brand;
    public $model;
    public $year;
    public $description = 'Used bicycle';
    public $category;
    protected $weight_kg = 0.0;
    protected static $wheels = 2;

    public const CATEGORIES = [
      'Road',
      'Mountain',
      'Hybrid',
      'Cruiser',
      'City',
      'BMX'
    ];

    public static function create() {
      $obj = new static();
      self::$instance_count++;
      return $obj;
    }

    public static function describe() {
      echo 'A vehicle that is driven by paddle power.<br />';
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

    public static function describe() {

      if (static::$wheels == 1) {
        echo 'Unicycle are ' . static::$wheels . ' wheel vehicle.<br />';
      } else {
        parent::describe();
      }
    }

    public function bug_test() {
      return $this->weight_kg;
    }
  }


  $trek = new Bicycle;
  $trek->brand = 'Trek';
  $trek->model = 'Emonda';
  $trek->year = '2017';

  echo Bicycle::$instance_count . '<br />';

  $bike = Bicycle::create();
  $uni = Unicycle::create();

  echo Bicycle::$instance_count . '<br />';
  echo Unicycle::$instance_count . '<br />';
  echo '<hr />';

  echo 'Categories: ' . implode(', ', Bicycle::CATEGORIES) . '<br />';
  $bike->category = Bicycle::CATEGORIES[0];
  $uni->category = Unicycle::CATEGORIES[4];

  echo 'Bicycle: ' . $bike->category . '<br />';
  echo 'Unicycle: ' . $uni->category . '<br />';
  echo '<hr />';

  echo 'Bicycle: ';
  echo Bicycle::describe() . '<br />';
  echo 'Unicycle: ';
  echo Unicycle::describe() . '<br />';
