<?php

?>

<html>
    
<head>
       
 <title>3 jailer_table</title>
    
    <style>
          
  body {
               
 background-image: url("58.jpg");
     
           background-repeat: no-repeat;
         
       background-position: center;
     
            background-size:cover;
        
        }
        </style>
      
  
    </head>
  
  <body bgcolor="lightpink">
        
<div style="text-align:center;font-size:30px">
   
        <h1 style="color:blue;font-size:40px;"> Jailer <h1>

              
     <form  action="rphp.php" method="POST">
        
<div  style="color:red;font-size:15pt">
           

            
cellnum:   <select name="cellno">
               
 <?php
                
$q= mysqli_connect('localhost','root','','prisons');
        
        $c= mysqli_select_db($q,'prisons');
               
 $v="SELECT cellno from cells";
                   
        
        $result=  mysqli_query($q, $v);
            
    while ($row=$result->fetch_assoc())
{
                 
   ?>
              
  <option value="cell"<?php    echo $row['cellno'] ;
?>">
               
 <?php
                   
 echo $row['cellno']; 
?></option>
               
 <?php
              
  }
                
               
 ?>
            
</select><br><br>
          
  capacity:<select name="c">
           
 <?php
                
$q= mysqli_connect('localhost','root','','prisons');
              
  $c= mysqli_select_db($q,'prisons');
                
$v="SELECT capacity FROM `cells` WHERE cellno='$cell'";
            
    $re=  mysqli_query($q, $v);
               
 while($r= mysqli_fetch_row(re))
{
                   
 ?>
         
       <option value="<?php   echo $r['capacity'] ;
?>">
             
   <?php
        
            echo $r['capacity']; 
?></option>
             
   <?php
              
  }
        

   ?>
        
   </body>
     
      </html>
           
           
           
           
           
           
           

