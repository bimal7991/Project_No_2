<?php


?>

<html>
  
  <head>
        
<title>3 jailer_table</title>
      
  <style>
           
 body {
               
 background-image: url("51.jpg");
              
  background-repeat: no-repeat;
               
 background-position: center;
                
 background-size:cover;
             
   }
        
</style>
        
   
 </head>
    
<body bgcolor="lightpink">
        
<div style="text-align:center;font-size:30px;">
           
<h1 style="color:blue;font-size:40px;"> JAILER </h1>
</div>

           
<form  action="upfile.php" method="POST">
            
    <div  style="color:red;text-align:center;font-size:40px">
            
        cellnum:   <select name="cell" style="font-size:30px">
           
     <?php
               
 $q= mysqli_connect('localhost','root','','prisons');
        
        $c= mysqli_select_db($q,'prisons');
     
           $v="SELECT cellno from cells";
                   
            
    $result=  mysqli_query($q, $v);
              
  while ($row=$result->fetch_assoc())
{
                  
  ?>
                
<option value="<?php    echo $row['cellno'] ;
?>">
               
 <?php
                 
   echo $row['cellno'];
 ?>
</option>
                
<?php
           
     }
                
?>
        
    </select><br><br>

    <h1 style="font-size:40px">   
   capacity:<input type="number" name="ca" required="" >
        
   <br><br>
 
<h1 style="font-size:40px">          
   celltype:<select name="all" style="font-size:30px">
             
   <option>select type</option>
          
   <option>0</option>
          
   <option>1</option>
      
   </select><br><br>
        
  <!--crimetype: <select name="vac" >
                
   <option>select type</option>
                   
   <option>murder</option>
                 
   <option>theft</option>
          
   <option>smuggling</option>
           
   <option>disturbing peace</option>
                
   <option>vandalism</option>  
   </select><br><br>
 -->          
            
           
       
   <input type="submit" value="update" name="update" style="font-size:30px">
     
   </form>
 
    <form  action="cells.php" method="Get">
            
    <div  style="text-align:left;">
  
    <input type="submit" value="back" style="color:red;font-size:30px;">
     
   </form>
    
   </body>

  
    </html>