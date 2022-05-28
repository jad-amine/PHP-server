<?php

   class User {
      // define properties first 
      public $email;
      public $name;

      // then call the constructor 
      public function __construct($email, $name){
         $this->email = $email;
         $this->name = $name;
      }

      // define functions
      public function login(){
         echo "$this->name has logged in ";
      }
   };

   // initiate objects from the User class
   $userOne = new User('jad@gmail.com', 'jad');
   // echo properties 
   echo $userOne->name . '<br>';
   echo $userOne->email . '<br>';
   // call public functions 
   $userOne->login() . '<br>';

?>