<?php
$q= mysqli_connect('localhost','root','','prisons');
$c= mysqli_select_db($q,'prisons');
//$id=$_POST['id'];
$name=$_POST['name'];
$date=$_POST['dob'];
$address=$_POST['address'];
$father=$_POST['father'];
$blood=$_POST['blood'];
$gender=$_POST['gender'];
$phone=$_POST['phone'];
$crime=$_POST['crimetype'];
$cellno=$_POST['cellno'];
$enter=$_POST['enter'];
$release=$_POST['release'];
//echo "id=$id<br>name=$name<br>dof=$date<br>address=$address<br>father=$father<br>blood=$blood<br>gender=$gender<br>phon=$phone<br>crime=$crime<br>cellno=$cellno<br>enter=$enter<br>release=$release";

$s="INSERT INTO victim VALUES('','$name','$date','$address','$father','$blood','$gender','$phone','$crime','$cellno','$enter','$release',0,'')";
//echo $s;

$p=mysqli_query($q,$s);
       if($p)
       {
           //echo "success";
          echo '<script>alert("values successfully added");
               window.location = "vprofile.php";</script>'; 
       }
 else {
          // echo "failure";
        echo '<script>alert("values not added");
                window.location = "vprofile.php";</script>'; 
 }
?>