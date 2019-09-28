<?php

$vi=$_POST['vic'];

              if($vi=="p")
           {
                  echo      '<script>alert;
                 window.location = "vprofile.php";</script>';
             }
             elseif ($vi=="d") {
                echo      '<script>alert;
                 window.location = "vicdet.php";</script>';  
             
                 }
                elseif($vi=="r") {
      echo      '<script>alert;
                       window.location = "report.php";</script>';
      
   }
      
 elseif($vi=="rv") {
     echo  '<script>alert;
                 window.location = "jrview.php";</script>';
      
}
// elseif($vi=="rdv") {
//    echo  '<script>alert;
//                 window.location = "list.php";</script>';
//
//}
elseif($vi=="st") {
    echo  '<script>alert;
                 window.location = "victim_status.php";</script>';

}

 else {
    echo  '<script>alert;
                 window.location = "viewcomm.php";</script>';

}
