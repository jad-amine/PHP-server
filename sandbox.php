<?php 

   // // print the name of the server who is rendring this file
   // echo $_SERVER['SERVER_NAME'] . '<br>';

   // // print the method used to land on this page
   // echo $_SERVER['REQUEST_METHOD'] . '<br>';

   // // print the entire file path from C:
   // echo $_SERVER['SCRIPT_FILENAME'] . '<br>';

   // // print the path relative to localhost
   // echo $_SERVER['PHP_SELF'] . '<br>';

   if(isset($_POST['submit'])){

      // 1. variable 2. value 3. time to expire from this moment
      setcookie('gender', $_POST['gender'], time() + 86499);

      // start server session to store data abt the user
      session_start();  
      
      $_SESSION['name'] = $_POST['name'];

      echo $_SESSION['name'];

      header('Location: index.php');
   }
?>


<!DOCTYPE html>
<html>
<head>
   <title>Document</title>
</head>
<body>
   
   <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
      <input type="text" name="name">
      <select name="gender">
         <option value="male">male</option>
         <option value="female">female</option>
      </select>
      <input type="submit" name="submit" value="submit">
   </form>

</body>
</html>