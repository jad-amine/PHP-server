<?php

   // Connect to db
   include './config/connect.php';

   $pizza = 0;

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

   };

   //when the user click the submit buton it's going to be saved in the $_POST array so we check it
   if(isset($_POST['delete'])){
   
      // grab the id to delete from the hidden button 
      $id_to_delete = mysqli_real_escape_string($conn, $_POST['id_to_delete']);

      //write sql
      $sql = "DELETE FROM pizzas WHERE id = $id_to_delete";

      //make query and check if done
      if(mysqli_query($conn, $sql)){
         //success
         header('Location: index.php');
      } else {
         //failure
         echo 'query error ' . mysqli_error($conn);
      }
   };
   
?>

<!DOCTYPE html>
<html >

   <?php include './templates/header.php'; ?>

   <div class="container center grey-text">
      <?php if($pizza): ?>

            <h4><?php echo htmlspecialchars($pizza['title']); ?></h4>
            <p>Created by: <?php echo htmlspecialchars($pizza['email']); ?></p>
            <p><?php echo date($pizza['created_at']); ?> </p>
            <h5>Ingredients:</h5>
            <p><?php echo htmlspecialchars($pizza['ingredients']); ?></p>
      
            <!-- Delete Form -->
            <form action="details.php" method="POST">
               <input type="hidden" name="id_to_delete" value="<?php echo $pizza['id'] ?>">
               <input type="submit" name="delete" value="Delete" class="btn brand z-depth-0">
            </form>

      <?php else: ?>

         <h5>No such pizza exists! </h5>

      <?php endif; ?>
   </div>

   <?php include './templates/footer.php'; ?>
   
</html>