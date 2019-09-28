<html>
    <head>
        <title>
            
        </title>
        <style>
            body {
                background-image: url("");
                background-repeat: no-repeat;
                background-position: center;
                 background-size:cover;
                }
        </style>

    </head>
    <body>
         <div style="text-align:center">

<?php
$q=  mysqli_connect('localhost','root','');
$d=  mysqli_select_db($q, 'prisons');
$id=$_POST['id'];
$s="SELECT * FROM victim WHERE id=$id";
$r=mysqli_query($q, $s);
if($r)
 {
   
   echo "<table border size=1>";
   echo "<tr><th>id</th><th>name</th><th>dob</th><th>address</th><th>father</th><th>bloodgroup</th><th>gender</th><th>phoneno</th><th>crime</th><th>cellno</th><th>enter date</th><th>release date</th><th>status</th><th>released date</th></tr>";
    while ( $row= mysqli_fetch_array($r))
  {
   echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td><td>$row[6]</td><td>$row[7]</td><td>$row[8]</td><td>$row[9]</td><td>$row[10]</td><td>$row[11]</td><td>$row[12]</td><td>$row[13]</td></tr>";
   }
 }

?>
    </body>
</html>