<?php
 $staff=$_POST['staff'];

              if($staff=="1")
           {
                  echo      '<script>alert;
                 window.location = "valloted.php";</script>';
             }
             elseif ($staff=="2") {
                echo      '<script>alert;
                 window.location = "svictim.php";</script>';  
             
                 }
              elseif ($staff=="3") {
                echo      '<script>alert;
                 window.location = "sfood.php";</script>';  
             
                }
 else {
      echo      '<script>alert;
                 window.location = "chpass.php";</script>';  

 }
                

?>

