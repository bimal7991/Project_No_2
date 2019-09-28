<?php


$q=  mysqli_connect('localhost','root','');
$d=  mysqli_select_db($q, 'prisons');

$i=$_POST['id'];
$da=$_POST['day'];
$brk=$_POST['brk'];
$lu=$_POST['lu'];
$di=$_POST['di'];
               
              $sql= "UPDATE food SET breakfast='$brk', lunch='$lu', dinner='$di' WHERE  id='$i'";
                $aa=mysqli_query($q,$sql);
             if($aa)
                   {
                          echo  '<script>alert("values added successfuly");
                             window.location = "food1.php";</script>';
                  }
               else {
                  echo  '<script>alert("values not added successfuly");
                 window.location = "food1.php";</script>';
                }
    
?>
