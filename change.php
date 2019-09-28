


<?php
$q=  mysqli_connect('localhost','root','');
$d=  mysqli_select_db($q, 'prisons');
$p1=$_POST['paa'];
$p2=$_POST['pa'];
 $se=  mysqli_query($q,"SELECT password FROM register WHERE password=$p1");
 $k= mysqli_fetch_array($se);
 if($k){
              $s="UPDATE register SET password='$p2' WHERE password='$p1'";
                $aa=mysqli_query($q,$s);
                
             if($aa)
                   {
                          echo  '<script>alert("values added successfuly");
                             window.location = "chpass.php";</script>';
                    }
         }
  else {
          echo  '<script>alert("password does not exist");
            window.location = "chpass.php";</script>';
       }
    
?>

