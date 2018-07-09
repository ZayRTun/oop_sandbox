<?php
  /**
   * Constructor Methods / Magic Methods.
   * User: zayt
   * Date: 7/9/2018
   * Time: 10:51 AM
   *
      class Product {

        public $name;
        public $color;

        public function __construct()
        {
          Logger::log('Creating new product');
          $this->color = 'blue';
        }
      }

      $shirt = new Product();
      echo $shirt->color;
   *
   * -Constructor Arguments-
     * class Product {

          public $name;
          public $color;

          public function __construct($name, $color)
          {
            $this->name = $name;
            $this->color = $color
          }
        }

        $shirt = new Product('T-shirt', 'blue');
        echo $shirt->name; // T-shirt
        echo $shirt->color; // blue
   *
   *
   *  -Best practices for passing multiple arguments-
   *    class Product {

          public $name;
          public $color;
          public $price

          public function __construct($args = [])
          {
            $this->name = $args['name'] ?? NULL;
            $this->color = $args['color'] ?? NULL;
            $this->price = $args['price'] ?? NULL;
          }
        }

        $shirt = new Product(['name' => 'T-shirt', 'color' => 'blue', 'price' => 9.99]);
        echo $shirt->name; // T-shirt
        echo $shirt->color; // blue
        echo $shirt->price; // 9.99
   *
   *
   *  -Destruct Method-
   *    class Product
   *    {
          public static $instance_count = 0;
   *
   *      public function __construct()
   *      {
            Logger::log('Creating a product'):
   *        self::$instance_count++;
   *      }
   *
   *      public function __destruct() //takes no argument
   *      {
            Logger::log('Deleting a product');
   *        self::$instance_count--;
   *      }
   *    }
   *
   *    -Unlike construct, destruct takes no argument
   *
   *  -Destructor Method
   *    -Called when the last reference to an instance is removed
   *    -2 ways to call the destruct method
   *      -When unset() is called on an instance
   *      -When script exits

   *    -Example-
         * class Product
         *    {
                public static $instance_count = 0;
         *
         *      public function __construct()
         *      {
                  Logger::log('Creating a product'):
         *        self::$instance_count++;
         *      }
         *
         *      public function __destruct() //takes no argument
         *      {
                  Logger::log('Deleting a product');
         *        self::$instance_count--;
         *      }
         *    }
   *
   *        $shirt = new Product();
   *        echo Product::$instance_count: // Returns: 1
   *
   *        unset($shirt); // Unsetting instance $shirt
   *        echo Product::$instance_count: // Returns: 0
   */

  class Sofa
  {
    public static $instance_count = 0;

    public $seats = 3;
    public $arms = 2;

    public function __construct($args=[])
    {
      self::$instance_count++;
      $this->seats = $args['seats'] ?? $this->seats;
      $this->arms = $args['arms'] ?? $this->arms;
    }

    public function __destruct()
    {
      self::$instance_count--;
    }
  }

  class Couch extends Sofa
  {
    public $arms = 0;
  }

  class Loveseat extends Sofa
  {
    public $seats = 2;
  }

  $sofa = new Sofa(['seats' => 3, 'arms' => 2]);
  echo 'Sofa<br />';
  echo '- seats: ' . $sofa->seats . '<br />';
  echo '- arms: ' . $sofa->arms . '<br />';
  echo '<br />';

  $couch = new Couch(['seats' => 4]);
  echo 'Couch<br />';
  echo '- seats: ' . $couch->seats . '<br />';
  echo '- arms: ' . $couch->arms . '<br />';
  echo '<br />';

  unset($sofa);

  $loveseat = new Loveseat(['arms' => 0]);
  echo 'Loveseat<br />';
  echo '- seats: ' . $loveseat->seats . '<br />';
  echo '- arms: ' . $loveseat->arms . '<br />';
  echo '<br />';

  echo 'Instance count: ' . Sofa::$instance_count . '<br />';

