<?php

?>
  
<html>
  
  <head>
       
 
       <title>victim status</title>
      
   <style>
      
      body {
            
    background-image: url("23.jpg");
          
      background-repeat: no-repeat;
      
          background-position: center;
            
     background-size:cover;
            
    }
       
 </style>
    
</head>
    
<body>
       
 <form action="status.php" method="POST">
       
 <h1 style="color:green;font-size:40px; text-align: center">VICTIM PROFILE</h1>
   
     <div style="text-align:center;color:red;font-size:20pt">

        
 <h1>
 victim id: <?php
                       
     echo "<select name=\"id\" >";
         
           echo "<option> select id</option>";
                     
   $q= mysqli_connect('localhost','root','');
             
           $c= mysqli_select_db($q,'prisons');
            
            $v="SELECT distinct id from victim";
           
             echo $v;
                   
                  
      $result=  mysqli_query($q, $v);
                       
 while ($row=$result->fetch_assoc())
{
                     
  ?>
                   
    <option value="<?php echo $row['id'] ;
?>">
                    
 <?php
                       
echo $row['id'];
 ?>
</option>
                     
<?php
                    
 }
                
                   
?>
        
</select><br>
                   
<h1>
 status:<select name="s" style="font-size:30px" >
                       
 
                       
 <option>0</option>
                        
<option>1</option>
                 
   </select> 
                    
<br>
                  
 <h1>
 predate:<input type="date" name="d" style="font-size:25px"><br><br>                    
 <input type="submit" value="update" style="font-size:30px">
                    
        
</div>
        
</form>
   
 </body>
  
</html>