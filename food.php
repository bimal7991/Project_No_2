<?php


?>

<html>

 <head>
<title>6 food</title>
 
  <style>

   body 
  {
               
    background-image: url("foodbg.jpg");

                background-repeat: no-repeat;

                background-position: center;

                 background-size:cover;
 
     } 
  </style>

    </head>

    <body>
  
       
      <form action="login.php" method="Get">
  
        <div style="text-align:right">
       
        <input type="submit" value="logout" style="font-size: 30px;color:red">
  
        </div>
  </form>   
   <div style="text-align:center">
       
     <h1 style="font-size:40px;">FOOD DETAILS</h></div>
     
       <form action="foodupdate.php" method="Get">
          
      
            <div style="text-align:center;font-size: 30px;color: red">
     
      <h2> food's:<select name="day" style="font-size: 30px;color:maroon">
         
       <option value="mon">monday</option>
    
            <option value="tue">tuesday</option>
         
       <option value="wed">wednesday</option>
          
      <option value="thu">thursday</option>
      
          <option value="fri">friday</option>
          
      <option value="sat">saturday</option>
      
          <option value="sun">sunday</option>
    
        </select>
  
   
      <div style="text-align:center">
            <br><br>
            
          
  <input type="submit" value="update" style="font-size: 30px;color:maroon"></br></br>

    </form>       </div>
           
 </form>
            
        
        </div>
            </form>
        
    </form>

      
  <form action="jailer.php" method="GET"><br>
                        
<div style="text-align:left">
            
<input type="submit" value="back" style="font-size: 30px;color:red">
                    
</form>
    </body>
</html>
