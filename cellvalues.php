
 
<?php

$q=  mysqli_connect('localhost','root','');

$d=  mysqli_select_db($q, 'prisons');


 $cell=$_POST['cells'];
 $t1=$_POST['t1'];

$t=$_POST['totcells'];
$a=$_POST['acells'];

$v=$_POST['vcells'];
if($t)
{
    $s="UPDATE cells SET total_cells='$t' WHERE id=1 " ;
  
  $e=  mysqli_query($q, $s);
  
  if($e){
    echo      '<script>alert("values updated successfully");
   
              window.location = "cell_up1.php";</script>';
  
  }
}
     
  elseif ($a) {
         
      $s="UPDATE cells SET total_cells='$a' WHERE id=1 " ;
      
         $e=  mysqli_query($q, $s);
         
       if($e){
                 echo  '<script>alert("values updated successfully");
        
         window.location = "cell_up2.php";</script>';
      
           }
       }
   
    elseif ($v) {
            
   $s="UPDATE cells SET total_cells='$t' WHERE id=1 " ;
            
   $e=  mysqli_query($q, $s);
             
   if($e){
         
        echo  '<script>alert("values updated successfully");
       
          window.location = "cell_up2.php";</script>';
           
      }
       }
     
  
?>