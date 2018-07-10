<?php
  /**
   * Compare Objects
   * User: zayt
   * Date: 7/10/2018
   * Time: 10:32 AM
   *
   *  -2 ways to Compare Objects-
   *    -Comparison operator: ==
   *    -Identity operator: ===
   *
   *  -Reference to the same instance       ==:yes    ===:yes
   *  -Instances with matching properties   ==:yes    ===:no
   *  -Instances with different properties  ==:no     ===:no
   */

  class Box
  {
    public $name = 'box';
  }

  $box = new Box();

  $box_reference = $box;

  $box_clone = clone $box;

  $box_modified = clone $box;
  $box_modified->name = 'changed box';

  $another_box = new Box();


  // == is casual and just checks if all property values are equal
  echo '== is casual and checks if all property values are equal.<br />';
  echo 'Reference: ' . ($box == $box_reference ? 'T' : 'F') . '<br />';
  echo 'Cloned: ' . ($box == $box_clone ? 'T' : 'F') . '<br />';
  echo 'Modified: ' . ($box == $box_modified ? 'T' : 'F') . '<br />';
  echo 'Another: ' . ($box == $another_box ? 'T' : 'F') . '<br />';

  echo '<hr />';

  // === is strict and checks if they reference the same object
  echo '=== is strict and checks if they reference the same object.<br />';
  echo 'Reference: ' . ($box === $box_reference ? 'T' : 'F') . '<br />';
  echo 'Cloned: ' . ($box === $box_clone ? 'T' : 'F') . '<br />';
  echo 'Modified: ' . ($box === $box_modified ? 'T' : 'F') . '<br />';
  echo 'Another: ' . ($box === $another_box ? 'T' : 'F') . '<br />';