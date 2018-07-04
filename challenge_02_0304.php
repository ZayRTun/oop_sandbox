<?php
  /**
   * Created by PhpStorm.
   * User: zayt
   * Date: 7/4/2018
   * Time: 1:26 PM
   */

  class Synthesizer {

    var $brand;
    var $model;
    var $year;
    var $voices;
    var $type;
    var $osc_type;
    var $number_of_osc;
    var $filter_type;

    function name() {
      return $this->brand . ', ' . $this->model . ' (' . $this->year . ')';
    }

    function get_type() {
      if ($this->voices > 1) {
        $this->type = 'Polyphonic';
        return $this->voices . "note " . $this->type . " Synthesizer with " . $this->osc_type . " Oscillators";
      } elseif ($this->voices == 1) {
        $this->type = 'Monophonic';
        return $this->voices . "note " . $this->type . " Synthesizer with " . $this->osc_type . " Oscillators";
      }
    }

  }

  class MonoSynth extends Synthesizer {

    var $voices = 1;

  }

  class PolySynth extends Synthesizer {

    var $voices = 3;

    function set_voices($value) {
      $this->voices = $value;
    }

  }


  function inspect_class($class_name) {
    $output = '';

    $output .= $class_name;
    $parent_class = get_parent_class($class_name);
    if ($parent_class != '') {
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
    foreach ($class_methods as $k) {
      $output .= "- {$k}\n";
    }

    return $output;

  }

  $class_names = ['Synthesizer', 'MonoSynth', 'PolySynth'];
  foreach ($class_names as $class_name) {
    echo nl2br(inspect_class($class_name));
    echo '<br />';
  }
  echo '<hr />';


  $minibrute = new MonoSynth();
  $minibrute->brand = 'Arturia';
  $minibrute->model = 'MiniBrute';
  $minibrute->year = 2014;
  $minibrute->osc_type = 'Analogue';
  $minibrute->number_of_osc = 1;

  $korgFm = new PolySynth();
  $korgFm->brand = 'Korg';
  $korgFm->model = 'Volca FM';
  $korgFm->year = 2013;
  $korgFm->osc_type = 'Digital';
  $korgFm->number_of_osc = 6;

  $minilogue = new PolySynth();
  $minilogue->brand = 'Korg';
  $minilogue->model = 'Minilogue';
  $minilogue->year = 2016;
  $minilogue->osc_type = 'Analog';
  $minilogue->number_of_osc = 2;
  $minilogue->set_voices(4);

  echo $minibrute->name() . '<br />';
  echo $minibrute->get_type() . '<br />';
  echo '<br />';

  echo $korgFm->name() . '<br />';
  echo $korgFm->get_type() . '<br />';
  echo '<br />';

  echo $minilogue->name() . '<br />';
  echo $minilogue->get_type() . '<br />';



