<?php

?>

<html>
    
<body>
        
<form action="comm.php" method="POST">
        
    id: <select name="id">
          
      <?php
            
    $q= mysqli_connect('localhost','root','','prisons');
        
        $c= mysqli_select_db($q,'prisons');
       
         $v="SELECT id from recordbehaviour";
            
    $result=  mysqli_query($q, $v);
         
       while ($row=$result->fetch_assoc())
     {
               
      ?>
              
  <option value="<?php    echo $row['id'] ;
?>">
               
 <?php
                   
 echo $row['id']; 
?></option>
                
<?php
                
}
             
   ?>
              
 </select><br><br>
        
       comment: <textarea   name="co" rows="5" cols="30">
       
        </textarea><br><br>
       
        <input type="submit" value="submit"></form>
      
         <form action="jrview.php" method="GET">
           
  <div style="text-align:left">
       
          <input type="submit" value="back" style="font-size: 15pt;color:red">
       
      </div> 
  
      </form>
  
  </body>

</html>
