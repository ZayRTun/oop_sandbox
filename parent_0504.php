<?php
  /**
   * Refer to the Parent Class.
   * User: Zay
   * Date: 7/7/2018
   * Time: 7:09 PM
   *
   *  -Refer to the Parent Class-
   *    -Student::$total_students
   *    -self::$total_students
   *    -parent::$total_students  // referring from a subclass to its parent class
   *      -only works with class methods, not instances
   *      -self:: and parent:: are replacements for ClassName
   *      -Not needed for static properties as they are already shared
   *      -Useful for calling static methods after overriding them
   */

  // Example of extending parent's static method
  // Add code before, after, or around'

  class Chef {

    public static function make_dinner() {
      echo "Cook food.<br />";
    }
  }

  class AmateurChef extends Chef {

    public static function make_dinner() {
      echo "Read recipe.<br />";
      parent::make_dinner();
      echo "Clean up mess.<br />";
    }
  }

  echo "Chef:<br />";
  Chef::make_dinner();
  echo "<br />";
  echo "Amateur Chef:<br />";
  AmateurChef::make_dinner();

  // Example of using parent's static method as a fallback
  class Image {

    public static $resizing_enabled = true;

    public static function geometry() {
      echo "800x600";
    }
  }

  class ProfileImage extends Image {

    public static function geometry()
    {
      if (self::$resizing_enabled) {
        echo "100x100";
      } else {
      parent::geometry();
      }
    }
  }

  echo Image::geometry() . "<br />";
  echo ProfileImage::geometry() ."<br />";

  echo Image::$resizing_enabled = false;
  echo ProfileImage::geometry() . "<br />";