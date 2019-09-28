 <html>
        <head>
            <style>
            body {
                background-image: url("64.jpg");
                background-repeat: no-repeat;
                background-position: center;
                 background-size:cover;
                }
        </style>
        </head>
 </html>
<?php

$q=  mysqli_connect('localhost','root','');
mysqli_select_db($q,"prisons");
$c=$_POST['cellno'];
$a=$_POST['all'];
$v=$_POST['vac'];

     $s="INSERT INTO cell1 VALUES('$c','$a','$v')" ;
     $e=  mysqli_query($q, $s);
    if($e){
     echo   '<script>alert("values added successfully");
                 window.location = "test1.php";</script>';
    }
 else {
       echo   '<script>alert("values not added");
                 window.location = "test1.php";</script>';
    } 
    
 
  
?>
