<?php

 // connect to db
 $conn = mysqli_connect('localhost', 'jad', 'test123', 'pizza');

 $sql = 'select * from pizzas';

 $result = mysqli_query($conn, $sql);

 $pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

foreach($pizzas as $pizza){
   echo $pizza['title'] . '<br>';
} ;

?>

<!DOCTYPE html>
<html>

   <?php include './templates/header.php'; ?>

   <?php include './templates/footer.php'; ?>


</html>