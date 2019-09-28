<html>
    <head><title>6 food</title>
        <style>
            body {
                background-image: url("img16.jpg");
                background-repeat: no-repeat;
                background-position: center;
                 background-size:cover;
                }                </style>
    </head>
    <body>
        <div style="text-align:center">
            <h1 style="font-size:40px;color:violet">FOOD DETAILS</h1></div>
            <form action="s1.php" method="POST">
        <div style="text-align:center;font-size: 30px;color: #fff">
      food's:<select name="day" style="font-size: 30px;color:maroon;">
                <option value="mon">monday</option>
                <option value="tue">tuesday</option>
                <option value="wed">wednesday</option>
                <option value="thu">thursday</option>
                <option value="fri">friday</option>
                <option value="sat">saturday</option>
                <option value="sun">sunday</option>
            </select>
            
            </div>
            <div style="text-align:center">
            <br><br>
       
            <input type="submit" value="view food detials" style="font-size: 30px;color:maroon">      
      
        </div>
            </form>
        <form action="login.php" method="GET">
          <div style="text-align:center">
               <input type="submit" value="logout" style="font-size: 30px;color:red">
          </div>
    </form>

        
    </body>
</html>

