<?php
  /**
   * Class: Bicycle
   * User: zayt
   * Date: 7/10/2018
   * Time: 11:33 AM
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