<?php
$j=$_POST['jailer'];


if($j=="cells")
         {
             
         echo      '<script>alert;
                 window.location = "cells.php";</script>';
         }
         elseif ($j=="victim") 
                 {                                                        
                  echo      '<script>alert;
                 window.location = "victim.php";</script>';
         }
          elseif ($j=="food") 
                 {                                                        
                  echo      '<script>alert;
                 window.location = "food.php";</script>';
         }
 else {
                                                          
                  echo      '<script>alert;
                 window.location = "chpass.php";</script>';
 }

?>
