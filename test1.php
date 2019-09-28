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
        <div style="text-align:center;font-size:30px">
           <h1 style="color:blue;font-size:40px;"> JAILER </h1></div>

           <form  action="tfile.php" method="POST">
                <div  style="color:red;text-align:center;font-size:15pt">
            
            </select><br><br>
<!--          cellno:<input type="number" name="cellno" style="font-size:30px;" required=""><br><br>-->
           <h1> capacity:<input type="number" name="all" required=""><br><br>
           <h1> celltype:<select name="nu" style="font-size:30px;">
                <option>select type</option>
                <option>0</option>
                <option>1</option>
            </select><br><br>
 <!--           crimetype: <select name="te" style="font-size:30px;">
                       <option>select type</option>
                        <option>murder</option>
                        <option>theft</option>
                         <option>smuggling</option>
                          <option>disturbing peace</option>
                         <option>vandalism</option>
            </select><br><br>-->
                         <input type="submit" value="insert" style="font-size:30px;">
                </div>
            </form>
           <form action="tnew.php" method="POST">
               <div style="text-align:center;font-size:30px">
            <input type="submit" value="update" name="update" style="font-size:30px;">
        </form>
        <form action="cells.php" method="Get">
               <div style="text-align:left">
            <input type="submit" value="back"  style="font-size:30px;color:red;" >
        </form> 
     </body>
   </html>