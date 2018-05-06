<?php 

  class Bicyle {
     
    var $brand;
    var $model;
    var $year;
    var $description = "Used bicycle";
    var $weight_kg = 0.0;

    function name() {
      return $this->brand . " " . $this->model . " (" . $this->year . ")";
    }
    function weight_lbs() {
      return floatval($this->weight_kg) * 2.2046226218;
      
    }
    function set_weight_lbs($lbs) {
      $this->weight_kg = floatval($lbs) / 2.2046226218;
    }
  }

  $cycle1 = new Bicyle;
  $cycle1->brand = 'Gant';
  $cycle1->model = 'Mountain Bike';
  $cycle1->year = '2017';
  $cycle1->weight_kg = 1.0;

  $cycle2 = new Bicyle;
  $cycle2->brand  = 'Cannondale';
  $cycle2->model  = 'Synapse';
  $cycle2->year  = '2016';
  $cycle2->weight_kg  = 8.0;

  echo $cycle1->name() . "<br />";
  // echo $cycle1->weight_kg . "<br />";
  echo $cycle1->weight_lbs() . "<br />";

  $cycle1->set_weight_lbs(2);
  echo $cycle1->weight_kg . "<br />";
  echo $cycle1->weight_lbs() . "<br />";
?>