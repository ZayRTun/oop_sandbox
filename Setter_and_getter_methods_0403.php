<?php
  /**
   * Created by PhpStorm.
   * User: zayt
   * Date: 7/5/2018
   * Time: 11:04 AM
   *
   *  -Setter and Getter Methods-
   *    -Set property visibility to private
   *    -Define a method to set the property's value
   *    -Define a method to get the property's value
   *
   *  -"Example of a Naive setter and Naive getter methods"-
   *  class Product {
        private $name;

        public function set_name($value) {
          $this->name = $value;
        }

        public function get_name() {
          return $this->name;
        }
      }
   *  $p = new Product();
   *  $p->set_name('Birdhouse');
   *  $p->get_name(); // Returns 'Birdhouse'
   *
   *  -Setter and Getter Methods-
   *    -Allow access to otherwise private properties
   *    -Useful cause it allows us to regulate access
   *    -Useful for read-only or write-only properties
   *    -Useful for pre-processing values
   *    -Avoid "naive setter" and "naive getter" methods
   *
   *  -"Example of better Setter and Getter methods"-
   *  class Product {
   *    private $price;
   *
   *    public function set_price($value) {
   *      $no_format = preg_replace('/[\$,]/', '', $value);
   *      $float = floatval($no_format);
   *      if ($float <= 0) {
   *        trigger_error('Price must be greater that zero.', E_USER_NOTICE);
   *        return;
   *      }
   *      $this->price = $float;
   *    }
   *
   *    public function get_price() {
   *      return '$' . number_format($this->price, 2);
   *    }
   *  }
   *
   */

