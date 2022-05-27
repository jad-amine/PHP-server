<?php

include('./test.php');

// echo 10 == 10;
// echo 5 != 10;

$products = [
   ['name' => 'star', 'price' => 20],
   ['name' => 'coin', 'price' => 10]
];

function say_price($items){
   foreach($items as $item){
      echo "{$item['name']} costs {$item['price']} $ <br>";
   }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Apache Server</title>
</head>
<body>
   
   <!-- <?php echo TRUE ?> -->
   <!-- <?php echo FALSE ?> -->
   <!-- <?php echo TRUE . "<br>" ?> -->
   <!-- <?php say_price($products); ?> -->

</body>
</html>