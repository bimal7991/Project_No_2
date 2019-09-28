<?php
?>
<html>
    <head>
        <title>3 jailer_table</title>
        <style>
            body {
                background-image: url("64.jpg");
                background-repeat: no-repeat;
                background-position: center;
                 background-size:cover;
                }
        </style>
        
    </head>
    <body bgcolor="lightpink">
        <div style="text-align:center;font-size:30px">
           <h1 style="color:blue;font-size:40px;"> Jailer </h1></div>

           <form  action="cell_all.php" method="POST">
                <div  style="color:red;text-align:center;font-size:30px">
            
            </select><br><br>
            cellno:<input type="number" name="cellno" required=""><br><br>
            alloted:<input type="number" name="all" required=""><br><br>
            vacant:<input type="number" name="vac" required=""><br><br>
                    <input type="submit" value="insert">
                    
                </div>
        </form>
     </body>
   </html>