<?php

$q=  mysqli_connect('localhost','root','');

$d=  mysqli_select_db($q, 'prisons');
     
 $id=$_POST['id'];
    
  $release=$_POST['release'];

$s="SELECT * FROM victim";

$r=mysqli_query($q, $s);
if($r){
echo "<table border size=1>";

echo "<tr><th>id</th><th>name</th><th>release date</th></tr>";
   
while ($row= mysqli_fetch_array($r))
 
{
    echo "<tr><th>$row[0]</th><th>$row[1]</th><th>$row[10]</th></tr>";
 
}
}

?>

