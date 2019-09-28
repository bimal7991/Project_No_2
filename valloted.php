<?php
$q=  mysqli_connect('localhost','root','');
mysqli_select_db($q,"prisons");
$s="SELECT * FROM v4";
  $r=  mysqli_query($q, $s);
  if($r){
      echo "<table border size=1>";
      echo "<tr><th>cellno</th><th>capacity</th><th>alloted</th><th>vacant</th></tr>";

        while($row= mysqli_fetch_array($r))
        {
                echo "<tr><td>$row[0]</td><td>$row[3]</td><td>$row[2]</td><td>$row[4]</td></tr>";
        }
  }
  
  $s="SELECT * FROM cells";
  $r=  mysqli_query($q, $s);
  if($r){
      echo "<table border size=1>";
      echo "<tr><th>cellno</th><th>capacity</th></tr>";

        while($row= mysqli_fetch_array($r))
        {
                echo "<tr><td>$row[0]</td><td>$row[1]</td></tr>";
        }
  }
echo"<br><hr>";
  echo" the unallotted cells are";
?>
