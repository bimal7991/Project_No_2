<div id="d1">
<table border="1">
    <html>
        <head>
            <style>
            body {
                background-image: url("9.jpg");
                background-repeat: no-repeat;
                background-position: center;
                 background-size:cover;
                }
        </style>
        
    </head>
<?php
//$id=99;
$id=$_REQUEST['key'];
$q=  mysqli_connect('localhost','root','');
$d=  mysqli_select_db($q, 'prisons');

 $sql= "UPDATE victim SET status='1' WHERE  id='$id'";
 //echo $sql;
                $aa=mysqli_query($q,$sql);
  if($aa)
  {
      echo 'upadted successfully';
  }
  ?>
</div></table>