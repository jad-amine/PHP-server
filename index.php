<?php

// Connect to db
include('./connect.php');

 // write query for all pizzas
 $sql = 'select * from pizzas ORDER By created_at';

 // make query & get result as rows object
 $result = mysqli_query($conn, $sql);

 // fetch the resulting rows as an array
 $pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

// free result from memory
mysqli_free_result($result);

// close connection
mysqli_close($conn);

?>

<!DOCTYPE html>
<html>

   <?php include './templates/header.php'; ?>
   
   <h4 class="center grey-text">Pizzas</h4>

   <div class="container">
      <div class="row">

         <?php foreach($pizzas as $pizza): ?>
            
            <div class="col s6 md3">
               <div class="card z-depth-0">
                  <div class="card-content center">
                     <h6> <?php echo htmlspecialchars($pizza['title']); ?></h6>  
                     <ul>
                        <?php $ingredients = explode(',',$pizza['ingredients']); ?>
                        <?php foreach($ingredients as $ingredient): ?>
                           <li><?php echo htmlspecialchars($ingredient) ?></li>
                        <?php endforeach; ?>
                     </ul>
                  </div>
                  <div class="card-action right-align">
                     <a href="#" class="brand-text">More info</a>
                  </div>
               </div>
            </div>

         <?php endforeach; ?> 

         <?php if(count($pizzas) <= 2): ?>
            <p>there are less than 3 pizzas</p>
               <?php else : ?>
               <p>there are 3 or more pizzas</p>
         <?php endif; ?>

      </div>
   </div>

   <?php include './templates/footer.php'; ?>


</html>