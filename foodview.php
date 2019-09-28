<html>
    <head>
         <style>
            body {
                background-image: url("page-4_img04.jpg");
                background-repeat: no-repeat;
                background-position: center;
                 background-size:cover;
                }
                </style>
   
    </head>
    <body>
   <div style="text-align:center">
       <h1 style="font-size:30px;">food details</h>
       
<?php
    $q=  mysqli_connect('localhost','root','');
     $d=  mysqli_select_db($q, 'prisons');
     $days=$_POST['day'];
      

if($days=="mon"){
$s=mysqli_query($q,"SELECT * FROM food WHERE id=1");
 echo "<table border size=1>";
echo "<tr><th>id</th><th>day</th><th>breakfast</th><th>lunch</th><th>dinner</th></tr>";
while ( $row= mysqli_fetch_array($s))
{
  
   echo "<tr><th>$row[0]</th><th>$row[1]</th><th>$row[2]</th><th>$row[3]</th><th>$row[4]</th></th></tr>";
     
   }

}
elseif ($days=="tue") {
$s=mysqli_query($q,"SELECT * FROM food WHERE id=2");

 echo "<table border size=1>";
echo "<tr><th>id</th><th>day</th><th>breakfast</th><th>lunch</th><th>dinner</th></tr>";
while ( $row= mysqli_fetch_array($s))
{
  
   echo "<tr><th>$row[0]</th><th>$row[1]</th><th>$row[2]</th><th>$row[3]</th><th>$row[4]</th></th></tr>";
     
   }


}
elseif ($days=="wed") {
$s=mysqli_query($q,"SELECT * FROM food WHERE id=3");

 echo "<table border size=1>";
echo "<tr><th>id</th><th>day</th><th>breakfast</th><th>lunch</th><th>dinner</th></tr>";
while ( $row= mysqli_fetch_array($s))
{
  
   echo "<tr><th>$row[0]</th><th>$row[1]</th><th>$row[2]</th><th>$row[3]</th><th>$row[4]</th></th></tr>";
     
   }
}
elseif ($days=="thu") {
$s=mysqli_query($q,"SELECT * FROM food WHERE id=4");

 echo "<table border size=1>";
echo "<tr><th>id</th><th>day</th><th>breakfast</th><th>lunch</th><th>dinner</th></tr>";
while ( $row= mysqli_fetch_array($s))
{
  
   echo "<tr><th>$row[0]</th><th>$row[1]</th><th>$row[2]</th><th>$row[3]</th><th>$row[4]</th></th></tr>";
     
   }
}
elseif ($days=="fri") {
$s=mysqli_query($q,"SELECT * FROM food WHERE id=5");

 echo "<table border size=1>";
echo "<tr><th>id</th><th>day</th><th>breakfast</th><th>lunch</th><th>dinner</th></tr>";
while ( $row= mysqli_fetch_array($s))
{
  
   echo "<tr><th>$row[0]</th><th>$row[1]</th><th>$row[2]</th><th>$row[3]</th><th>$row[4]</th></th></tr>";
     
   }
}
elseif ($days=="sat") {
$s=mysqli_query($q,"SELECT * FROM food WHERE id=6");

 echo "<table border size=1>";
echo "<tr><th>id</th><th>day</th><th>breakfast</th><th>lunch</th><th>dinner</th></tr>";
while ( $row= mysqli_fetch_array($s))
{
  
   echo "<tr><th>$row[0]</th><th>$row[1]</th><th>$row[2]</th><th>$row[3]</th><th>$row[4]</th></th></tr>";
     
   }


}
elseif ($days=="sun") {
$s=mysqli_query($q,"SELECT * FROM food WHERE id=7");

 echo "<table border size=1>";
echo "<tr><th>id</th><th>day</th><th>breakfast</th><th>lunch</th><th>dinner</th></tr>";
while ( $row= mysqli_fetch_array($s))
{
  
   echo "<tr><th>$row[0]</th><th>$row[1]</th><th>$row[2]</th><th>$row[3]</th><th>$row[4]</th></th></tr>";
     
   }


}



   
?>
       
       </div>
    </body>
</html>




