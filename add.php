<?php

include './config/connect.php';

if(isset($_POST['submit'])){
   // catch user input a check for sql injection
   $title = mysqli_real_escape_string($conn,$_POST['title']);
   $email = mysqli_real_escape_string($conn,$_POST['email']);
   $ingredients = mysqli_real_escape_string($conn,$_POST['ingredients']);

   //create sql 
   $sql = "INSERT INTO  pizzas(title, email, ingredients) VALUES('$title', '$email', '$ingredients')";

   //save to db and check
   if(mysqli_query($conn, $sql)){
      // success
       header('Location: index.php');
   } else{
      // error
      echo 'query error: ' . mysqli_error($conn);
   }
};


?>

<!DOCTYPE html>
<html lang="en">

   <!-- since we are including the header where the Materialize style sheet is imported, we can use Materialize classes -->
   <?php include './templates/header.php'; ?>

   <section class="container grey-text">
      <h4 class="center">Add a Pizza</h4>
      <form class="white" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
         <label>Your Email:</label>
         <input type="text" name="email">
         <label>Pizza title:</label>
         <input type="text" name="title">
         <label>Ingredients (comma separated):</label>
         <input type="text" name="ingredients">
         <div class="center">
            <input type="submit" name="submit" value = "submit" class = "btn brand z-depth-0">
         </div>
      </form>
   </section>

   <?php include './templates/footer.php'; ?>


</html>