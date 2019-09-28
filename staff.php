<html>
    <head>
        <title>3 jailer_table</title>
        <style>
            body {
                background-image: url("s12.jpg");
                background-repeat: no-repeat;
                background-position: center;
                 background-size:cover;
                }
        </style>
        
    </head>
    <body bgcolor="pink">
         <form action="login.php" method="GET">
             <div style="text-align:right">
                  <input type="submit" value="logout" style="font-size: 30px;color:red">
             </div>
         </form>
        <div style="text-align:center">
           <h1 style="color:blue;font-size:40px;"> STAFF'S <h1><br>
                   <form method="POST" action="staffcheck.php">
                  <h2> option's:<select name="staff" style="font-size:30px">
                       <option value="1">view cells details</option>
                       <option value="2">victim</option>
                       <option value="3">food details</option>
                       <option value="4">change password</option></h2>
                      
                   </select>
                   <input type="submit" value="submit" style="font-size:30px;color:blue"></form>
               <form action="login.php" method="GET">
             <div style="text-align:left">
                 <input type="submit" value="back" style="font-size: 30px;color:red">
             </div> 
   </form>
     
</body>
</html>


