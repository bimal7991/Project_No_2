<?php


?>

<html>
  
  <head>
    
    <title>4 cells</title>
    
     <style>
     
       body {
        
        background-image: url("imgs17.jpg");
        
        background-repeat: no-repeat;
        
        background-position: center;
         
        background-size:cover;
      
          }
         
       </style>
   
    </head>
  
  <body>
   
     <form action="login.php" method="GET">
            
 
               <div style="text-align:right"><br>
      
      <input type="submit" value="logout" style="font-size: 30px;color:red">
      
      </form>
         
 
        <div style="text-align:center;color:red;font-size:30pt;">CELLS DETAILS</div>
     
        
        </div>
     
   <form action="cell_check.php" method="POST"><br><br>
     
   <div style="color:blue;text-align:center;font-size:30px;">  
 
    <h1>     
      cells:<select name="cells" method="post" style="font-size: 30px;color:maoon">
     
         <option value="t1">insert and update cell</option>
         
         <option value="t2">view alloted and vacant cells</option>
<!--              
      <option value="t3">add alloted and vacant cells</option>-->
              
      </select>
            
      
 
   <br><br><input type="submit" value="submit" style="font-size: 30px;color:maroon">
          
  
            </form>
     
   <br>
          
    <form action="jailer.php" method="GET">
        
        <div style="text-align:left"><br>
        
    <input type="submit" value="back" style="font-size: 30px;color:red">
                 
   </form>
            
            
 
   </body>
   

</html>



