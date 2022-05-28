<?php

   class User {
      // define private properties first 
      private $email;
      private $name;

      // then call the constructor 
      public function __construct($email, $name){
         $this->email = $email;
         $this->name = $name;
      }

      // define functions
      public function login(){
         echo "$this->name has logged in ";
      }

      // getters to return the name
      public function getName(){
         return  $this->name;
      }
      
      public function getEmail(){
         return $this->email;
      }

      //setters to change public properties
      public function setName($name){
         if(is_string($name) && strlen($name) > 2){
            $this->name = $name;
            echo "name has been changed to $name";  
         } else {
            echo 'not a valid name';
         }
      } 
   };

   // initiate objects from the User class
   $userTwo = new User('jad@gmail.com', 'jad');
   
   //
   echo $userTwo->getName() . '<br>';
   echo $userTwo->getEmail() . '<br>';
   $userTwo->setName('Mario');
?>