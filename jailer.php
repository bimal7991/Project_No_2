<?php

?>
<html>
    <head>
        <title>3 jailer_table</title>
        <style>
            body {
                background-image: url("17.png");
                background-repeat: no-repeat;
                background-position: center;
                 background-size:cover;
                }
        </style>
        
    </head>
    <body>
       
         <form action="login.php" method="GET">
             <div style="text-align:right">
                  <input type="submit" value="logout" style="font-size:30px;color:red">
             </div>
         </form>
         <form method="POST" action="joption.php">
        <div style="text-align:center;color:maroon;font-size:30px;">
           <h1 style="color:indigo;font-size:50px;"> JAILER <h1><br>

                   
          
       option:<select name="jailer" style="font-size: 35px;color:maroon">
                <option value="cells">cells</option>
                <option value="victim">victim</option>
                <option value="food">food</option>
                <option value="change">change password</option>
            </select>
        
            <input type="submit" value="submit" style="font-size: 30px;">
    </form>
      
        <form action="login.php" method="POST">
             <div style="text-align:left">
                 <input type="submit" value="back" style="font-size:30px;color:red">
             </div> 
   </form>
     
</body>
</html>