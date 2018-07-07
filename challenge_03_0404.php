<?php
  /**
   * Challenge: Access Control
   * User: zayt
   * Date: 7/5/2018
   * Time: 11:32 AM
   */

  class Bicycle {

    public $brand;
    public $model;
    public $year;
    public $description = 'Used bicycle';
    protected $weight_kg = 0.0;
    protected $wheels = 2;

    public function name() {
      return $this->brand . ", " . $this->model . " (" . $this->year . ")";
    }

    public function wheel_details() {
      return "It has " . $this->wheels . " wheels";
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
    protected $wheels = 1;

    public function bug_test() {
      return $this->weight_kg;
    }
  }


  $trek = new Bicycle;
  $trek->brand = 'Trek';
  $trek->model = 'Emonda';
  $trek->year = '2017';

  $uni = new Unicycle;

  echo "Bicycle: " . $trek->wheel_details() . "<br />";
  echo "Unicycle: " . $uni->wheel_details() . "<br />";
  echo "<hr />";

  echo "Set weight using kg<br />";
  $trek->set_weight_kg(1);
  echo $trek->weight_kg() . "<br />";
  echo $trek->weight_lbs() . "<br />";
  echo "<hr />";

  echo "Set weight using lbs<br />";
  $trek->set_weight_lbs(2);
  echo $trek->weight_kg() . "<br />";
  echo $trek->weight_lbs() . "<br />";
  echo "<hr />";

//   Will this work?
   echo "Set weight for Unicycle<br />";
   $uni->set_weight_kg(1);
   echo $uni->weight_kg() . "<br />";
   echo $uni->weight_lbs() . "<br />";

//   echo $uni->bug_test() . "<br />";
