<?php
  /**
   * Late Static Bindings.
   * User: Zay
   * Date: 7/7/2018
   * Time: 7:56 PM
   *
   *  -Static Bindings-
   *    -Static references are resolved using the class in which the method was defined
   *    -self:: is defined in Bicycle so it references Bicycle
   *    -Allows PHP to pre-process class definitions
   *    -Prevents inheriting static references
   *      -The answer to this problem is late static bindings
   *
   *  -Late Static Bindings-
   *    -Late static bindings are resolved using the class that is called at runtime
   *    -Added in PHP 5.3
   *    -Replace keyword self with static
   *    -Same concept as static references but allows inheritance
   *
   *  -Example-
      class Bicycle {

        protected static $wheels = 2;

        public static function wheel_details() {
          $wheel_string = static::$wheels == 1 ? "1 wheel" :  static::$wheels . " wheels"; // change self:: to static::
          return "It has " . $wheel_string . ".";
        }
      }

      class Unicycle extends Bicycle {

        protected static $wheels = 1;
      }

      echo "Bicycle: " . Bicycle::wheel_details() . "<br />"; // returns 2
      echo "Unicycle: " . Unicycle::wheel_details() . "<br />"; // returns 1
   */

  class Sofa {

    protected static $identity = 'Sofa class';

    public static function identity_test() {
      echo 'self: ' . self::$identity . "<br />";
      echo 'static: ' . static::$identity ."<br />";

      echo 'get_class: ' . get_class() . "<br />";
      echo 'get_called_class: ' . get_called_class() . "<br />";
    }
  }

  class Loveseat extends Sofa {

    protected static $identity = 'Loveseat class';
  }

  Sofa::identity_test();
  echo "<hr />";
  Loveseat::identity_test();