   <?php
 $cell=$_POST['cells'];

              if($cell=="t1")
           {
                  echo      '<script>alert;
                 window.location = "test1.php";</script>';
             }
             elseif ($cell=="t2") {
                echo      '<script>alert;
                 window.location = "valloted.php";</script>';  
             
                 }
      else {
      echo      '<script>alert;
                 window.location = "cell_allocate.php";</script>';  
             
   }
                



 ?>
