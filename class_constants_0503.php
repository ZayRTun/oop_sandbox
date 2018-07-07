<?php
  /**
   * Class Constants
   * User: zayt
   * Date: 7/6/2018
   * Time: 11:40 AM
   *
   * -Class Constants-
   *  -Used for class values which do not change
   *  -Keyword const followed by name in all capital letters
   *  -Value may contain expressions
   *  -Support for visibility modifiers since PHP7.1
   *  -Reference with ClassName:: or self::
   */

  class Clock {
    public const DAY_IN_SECONDS = 60 * 60 * 24;

    public function tomorrow() {
      return time() + self::DAY_IN_SECONDS;
    }
  }

  echo Clock::DAY_IN_SECONDS . "<br />"; // 86400

  $clock = new Clock();
  echo $clock->tomorrow() . "<br />";  // 1531030578