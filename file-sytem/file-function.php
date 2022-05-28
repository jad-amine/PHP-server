<?php 

   $file = 'quotes.txt';

   if(file_exists($file)){

      echo readfile($file) . '<br>';

      copy($file, 'quotes2.txt');

      echo realpath($file) . '<br>';

      echo filesize($file) . '<br>';

      //rename($file, 'test.txt');
   }

   mkdir('quotes');
?>