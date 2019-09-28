<?php

//session_start();

 // if(isset($_POST['update']))

$q=  mysqli_connect('localhost','root','');

mysqli_select_db($q,"prisons");

$c=$_POST['cell'];

$e=$_POST['ca'];

$a=$_POST['all'];

$v=$_POST['vac'];


$u= "UPDATE cells SET capacity='$e', celltype='$a', crimetype='$v' WHERE  cellno='$c'";


//echo $u;
$uu= mysqli_query($q, $u);

if($uu)
{
echo  '<script>alert("values updated successfully");
     
          window.location = "tnew.php";
</script>';

}
 
else {
    


     echo '<script>alert("values notupdated");
      
           window.location = "tnew.php";
</script>';

 }

?>