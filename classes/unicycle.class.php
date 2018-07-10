<?php
  /**
   * Class Unicycle
   * User: zayt
   * Date: 7/10/2018
   * Time: 11:35 AM
   */

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