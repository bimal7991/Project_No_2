<?php

$q=  mysqli_connect('localhost','root','');

mysqli_select_db($q,"prisons");

$c=$_POST['id'];

$a=$_POST['s'];

$v=$_POST['d'];


$u= "UPDATE victim SET status='$a', prereleasedate='$v' WHERE  id='$c'";

$uu= mysqli_query($q, $u);

if($uu)

{

echo  '<script>alert("values updated successfully");
        
       window.location = "victim_status.php";
</script>';

}

 else
 {
    

     echo '<script>alert("values notupdated");
         
        window.location = "victim_status.php";
</script>';

 }


?>

