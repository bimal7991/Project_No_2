<?php
session_start();

$_SESSION['username']='';
$_SESSION['password']='';

if(isset($_POST['submit']))
{
     $q=  mysqli_connect('localhost','root','');
     $d=  mysqli_select_db($q, 'prisons');
       $u=$_POST['b1'] ;
       $pass=$_POST['b2'];
   
 
       $query="SELECT * FROM  register WHERE username='$u' and password='$pass'";
      $c=  mysqli_query($q,"$query" );  
      $res=  mysqli_fetch_row($c);
      $de=$res['6'];
//      while ($row = mysqli_fetch_array($query))
//      {
//          
//         $_SESSION['username']=$row[8];
//          $_SESSION['password']=$row[9];
//          echo $row[9];
//      }
      if($res){
          
             if($de=='Jailer')
          {
                 
             echo '<script>alert("you logged in successfully");
               window.location = "jailer.php";</script>';
          }
           else
          {         
            echo '<script>alert("you logged in successfully");
                window.location = "staff.php";</script>';    
           
            }
         
    }
        else
         {
            echo '<script>alert("invalid username and password");
                window.location = "login.php";</script>';
          }
}
?>

