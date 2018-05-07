<?php

  class User {
    private $is_admin = false;

    private function has_admin_access() {
      return $this->is_admin === true;
    }

    public function access_level() {
      return $this->has_admin_access() ? 'Admin' : 'Standard';
    }
  }


  $user = new User;
  // echo $user->is_admin;
  //$user->is_admin = true;
  // echo $user->has_admin_access();
  echo $user->access_level();

?>  