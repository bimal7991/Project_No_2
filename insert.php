<?php 
session_start();
  
   if(isset($_POST['register']))
  
   {
        
 require 'dbcon.php';
  
        $fname=$_POST['fname'];
       
   $lname=$_POST['lname'];
     
     $address=$_POST['address'];
       
   $male=$_POST['gender'];
      
    $female=$_POST['gender'];
      
    $phone=$_POST['phone'];
      
    $job=$_POST['job'];   
   
       $district=$_POST['district'];
      
    $user=$_POST['user'];
      
    $password=$_POST['password'];
  
	$con=mysqli_connect("localhost","root","","prisons");    
    $result=  mysqli_query($con,"INSERT INTO register VALUES ('$fname','$lname','$address',
                '$male','$female','$phone','$job','$district','$user','$password')");
   
      if($result)
 
        {
      
       if($fname=="" || $lname=="" || $address==""  || $phone==""|| $job=="" || $district=="" || 
           $user=="" || $password=="")
   
          {
           
     echo '<script>alert("enter all fields");
 
            window.location = "reg.php";
</script>';    
  
         }
   
        else
 { 
             echo '<script>alert("values successfully added");
    
         window.location = "login.php";
</script>';  

             }
   
      }
       
  else 
    
     {
            
 echo "not missing";
     
    }
         

     }
   
   ?>
     
        
   



