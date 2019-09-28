<?php
$q=  mysqli_connect('localhost','root','');
mysqli_select_db($q,"prisons");
$c=$_POST['cellno'];
$a=$_POST['all'];
$v=$_POST['nu'];
$r=$_POST['te'];
     $s="INSERT INTO cells VALUES('','$a','$v','$r')" ;
     $e=  mysqli_query($q, $s);
    if($e){
     echo   '<script>alert("values added successfully");
                 window.location = "test1.php";</script>';
    }
 else {
       echo   '<script>alert("values not added");
                 window.location = "test1.php";</script>';
    } 
    
 
  
?>
