<?php


// if($_GET['submit']){
//    header('Location: index.php');
// };


?>

<!DOCTYPE html>
<html lang="en">

   <!-- since we are including the header where the Materialize style sheet is imported, we can use Materialize classes -->
   <?php include './templates/header.php'; ?>

   <section class="container grey-text">
      <h4 class="center">Add a Pizza</h4>
      <form action="./add.php" method="GET">
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