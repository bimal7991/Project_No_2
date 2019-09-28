<?php
$q=  mysqli_connect('localhost','root','');
$d=  mysqli_select_db($q, 'prisons');
$s=$_POST['id'];
$co=$_POST['co'];
$f=mysqli_query($q,"INSERT INTO comment VALUES('$s','$co')");
if($f)
{
   if($co=="")
    {
        echo '<script>alert("enter the field");
                 window.location = "comment.php";</script>';
    }  
    else
        { 
        echo '<script>alert("values added successfully");
                 window.location = "comment.php";</script>';
 }     

}
?>
