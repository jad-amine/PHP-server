<?php

   // Connect to db
   include './config/connect.php';

 // check GET request id param
   if(isset($_GET['id'])){
      $id = mysqli_real_escape_string($conn, $_GET['id']);

      //make sql
      $sql = "SELECT * FROM pizzas WHERE id = $id";

      //  get the query result
      $result = mysqli_query($conn, $sql);

      // fetch the result in array bcz we only return one row
      $pizza = mysqli_fetch_assoc($result); 

      //free result
      mysqli_free_result($result);

      //close connection
      mysqli_close($conn);

      print_r($pizza);
   }

?>

<!DOCTYPE html>
<html >

   <?php include './templates/header.php'; ?>

   <div class="container center">
      
   </div>

   <?php include './templates/footer.php'; ?>
   
</html>