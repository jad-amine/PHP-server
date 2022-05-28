<?php

 // connect to db
 $conn = mysqli_connect('localhost', 'jad', 'test123', 'pizza');

 //check error
 if(!$conn){
    echo 'Connection error: ' . mysqli_connect_error();
 }

?>
