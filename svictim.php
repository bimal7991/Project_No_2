<?php

?>
<html>
    <head>
        <title>5 victim</title>
        <html>
    <head>
        <title>3 jailer_table</title>
        <style>
            body {
                background-image: url("56.jpg");
                background-repeat: no-repeat;
                background-position: center;
                 background-size:cover;
                }
        </style>
        
    </head>
    <body bgcolor="skyblue">
        <div style="text-align:center">
         <h1 style="color:blue;font-size:40px;">VICTIM'S</h1><br>
         <form action="svphp.php" method="POST"><br><br>
           <h1 style="font-size:40px;color:pink">
                victim: <select name="vic" style="color:blue;font-size:30px;"
              <option value="d" style="color:chocolate;font-size:30px;"> details of victim</option>           
              <option value="3"" style="color:chocolate;font-size:30px;">view comments</option>
                <option value="r" style="color:chocolate;font-size:30px;">view report</option>
                
            </br></br>
            
        </select>
            <input type="submit" value="view"style="font-size: 30px;"></br>
            
    </form>
    
         <br>      
    <form action="login.php" method="GET">
          <div style="text-align:center">
               <input type="submit" value="logout" style="font-size: 30px;color:red">
          </div>
    </form>
         <form action="staff.php" method="GET">
       <div style="text-align:left">
             <input type="submit" value="back" style="font-size: 30px;color:red">
       </div>
    </form>
 </body>
</html>


