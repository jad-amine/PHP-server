<?php

   $file = 'quotes2.txt';

   // open a 'r' reading only connection with $file 
   $handle = fopen($file, 'r');

   // read until bite defined
   echo fread($handle, filesize($file));

   // read only first line (the pointer moves until the end of it)
   echo fgets($handle) . '<br>';
   
   // reading continues from the pointer position
   echo fgets($handle) . '<br>';

   // read a single character
   echo fgetc($handle);

   // if we want to ride to the file 
   $handle = fopen($file, 'r+');   // or a+ to add at the end
   fwrite($handle, "/nEverything popular is wrong.")

   // close the file 
   fclose($handle);

   // delete a file
   //unlink($file);
?>