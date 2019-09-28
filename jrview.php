
<html>
    <body>
        <form action="comment.php" method="POST">
            <div style="text-align:right;color:red;font-size:25pt">
            <input type="submit" value="comment">
        </form>
    </body>
</html>

<?php
error_reporting(0);


$q=  mysqli_connect('localhost','root','');
$d=  mysqli_select_db($q, 'prisons');
      $id=$_POST['id'];
      $release=$_POST['release'];

$s="SELECT * FROM recordbehaviour";
$r=mysqli_query($q, $s);
if($r){
echo "<table border size=1>";
echo "<tr><th>id</th><th>reported date</th><th>behavior</th>
        <th>comments</th></tr>";
   while ($row= mysqli_fetch_array($r))
 {
    echo "<tr><th>$row[1]</th><th>$row[2]</th><th>$row[3]</th>
     <th>$row[4]</th></tr>";
 }
}

?>
