<?php
$q=  mysqli_connect('localhost','root','');
$d=  mysqli_select_db($q, 'prisons');

$s=mysqli_query($q,"SELECT * FROM comment");
 if($s){
      echo "<table border size=1>";
      echo "<tr><th>id</th><th>comment</th></tr>";

        while($row= mysqli_fetch_array($s))
        {
                echo "<tr><td>$row[0]</td><td>$row[1]</td></tr>";
        }
  }

?>
