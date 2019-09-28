<html>
    <head>
        <title> register form</title>
        <style>
            body {
                background-image: url("3.jpeg");
                background-repeat: no-repeat;
                background-position: center;
                 background-size:cover;
                }
        </style>

    </head>
    <body>

         <h1 style="color:orangred;font-size:40px; text-align: center">REGISTER</h1>
   
         <form action="insert.php" method="POST"> 
            <div style="text-align:right;color:black;font-size:13pt">
           
               
                First Name:<input type="text" name="fname"><br><br>
           
               Last Name:<input type="text" name="lname"><br><br>
          
               
               Address:<textarea name="address" rows="4" cols="20">
               </textarea><br><br>
               
                   
               Male: <input type="radio" value="male"  name="gender"  >
               female: <input type="radio"  value="female" name="gender" ><br><br>
               
               
                   
               phone no:<input type="number" name="phone"><br><br>
               
           
               
           designation of job:<select name="job">
                <option>Acp</option>
                <option>Sub inspector</option>
                <option>p.c</option>
               </select><br><br>
          
               
               district:<select name="district">
                <option>mysore</option>
                <option>chitradurga</option>
                <option>bangalore</option>
                <option>davangere</option>
               </select><br><br>
         
             
             username:<input type="text" name="user"><br><br>
         
             password:<input type="password" name="password"><br><br>
            
         </p>
         <input type="submit" value="submit" name="register" style="color:blue;font-size:30px">
        </div>
        </form>
         <form action="open.php" method="POST">
        <input type="submit" value="back" style="font-size: 30px;color:red" />
    </form>
    </body>
</html>

