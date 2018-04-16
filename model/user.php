<?php
  /**
   *
   */
  class User
  {
    public $id;
    public $username;
    public $phone;
    public $password;

    function __construct($username, $phone, $password)
    {
      $this->username = $username;
      $this->phone = $phone;
      $this->password = $password;
    }


  }

 ?>
