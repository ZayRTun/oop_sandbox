<?php 

  class Synth {
    var $brand;
    var $model;
    var $osc_type;
    var $oscilators;
    var $fm = false;

    function name() {
      return $this->brand . ", " . $this->model . ", " . $this->osc_type;
    }
    function set_oscilators($val) {
      $this->oscilators = $val;
    }
  }

  class MonoSynth extends Synth {
  }
   
  class PolySynth extends Synth {
    var $note_polyphony = 3;

    function set_note_polyphony($val) {
      $this->note_polyphony = $val;
    }
  }

  function inspect_class($class_name) {
    $output = '';

    $output .= $class_name;
    $parent_class = get_parent_class($class_name);
    if($parent_class != '') {
      $output .= " extends {$parent_class}";
    }
    $output .= "\n";

    $class_vars = get_class_vars($class_name);
    ksort($class_vars);
    $output .= "properties: \n";
    foreach ($class_vars as $k => $v) {
      $output .= "- {$k}: {$v}\n";
    }

    $class_methods = get_class_methods($class_name);
    sort($class_methods);
    $output .= "methods: \n";
    foreach($class_methods as $k) {
      $output .= "- {$k}\n";
    }

    return $output;
  }

  $class_names = ['Synth', 'MonoSynth', 'PolySynth'];
  foreach ($class_names as $class_name) {
    echo nl2br(inspect_class($class_name));
    echo "<br />";
  }
  echo "<hr />";

  $minibrute = new MonoSynth;
  $minibrute->brand = 'Arturia';
  $minibrute->model = 'Minibrute';
  $minibrute->osc_type = 'Analog';
  $minibrute->oscilators = 1;

  $triode = new MonoSynth;
  $triode->brand = 'Meeblip';
  $triode->model = 'Triode';
  $triode->osc_type = 'Digital';
  $triode->oscilators = 3;

  $volca_fm = new PolySynth;
  $volca_fm->brand = 'Korg';
  $volca_fm->model = 'Volca FM';
  $volca_fm->osc_type = 'Digital';
  $volca_fm->oscilators = 6;
  $volca_fm->fm = true;

  echo $volca_fm->name() . "<br />";
  echo $minibrute->name() . "<br />";
  echo $triode->name() . "<br />";


  // $props =  get_object_vars($minibrute);
  // echo "<pre>";
  // print_r($props);
  // echo "</pre>";



?>