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
                background-image: url("9.jpg");
                background-repeat: no-repeat;
                background-position: center;
                 background-size:cover;
                }
        </style>
        
    </head>
    <body>
        
         <form action="vicphp.php" method="POST">
                <div style="text-align:center;color:blue;font-size:30px;">
           <h1> VICTIM </h1>
               <h1>
                victim: <select name="vic" style="font-size: 30px;color:maroon;">
                <option value="p">create profile of victim</option>
                <option value="d"> details of victim</option>
                <option value="r">create report</option>
                 <option value="rv">view_report</option>
<!--                 <option value="rdv">view_release_dates</option>-->
                 <option value="st">update victim status</option>
                
            
        </select>
            <input type="submit" value="submit"style="font-size: 30px;"></br>
    </form>
         <br>      
    <form action="login.php" method="GET">
          <div style="text-align:center">
               <input type="submit" value="logout" style="font-size: 30px;color:red">
          </div>
    </form>
    <form action="jailer.php" method="GET">
       <div style="text-align:left">
             <input type="submit" value="back" style="font-size: 30px;color:red">
       </div>
        </form>
         
    </form>
 </body>
</html>
