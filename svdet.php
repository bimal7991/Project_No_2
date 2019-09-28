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
   echo "<tr><th>id</th><th>name</th><th>dob</th><th>address</th><th>father</th><th>bloodgroup</th><th>gender</th><th>crime</th><th>status</th></tr>";
    while ( $row= mysqli_fetch_array($r))
  {
   echo "<tr><th>$row[0]</th><th>$row[1]</th><th>$row[2]</th><th>$row[3]</th><th>$row[4]</th><th>$row[5]</th><th>$row[6]</th><th>$row[8]</th><th>$row[12]</th></tr>";
   }
 }

?>
    </body>
</html>