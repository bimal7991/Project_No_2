<html>
    <head>
        <title>jailer view victim detailes</title>
        <style>
            body {
                background-image: url("52.jpg");
                background-repeat: no-repeat;
                background-position: center;
                 background-size:cover;
                }
        </style>
    </head>
    <body>
        <form action="svdet.php" method="POST">
            <div style="text-align:center;font-size:30px;">
             <h1 style="color:background;font-size:40px;">VICTIM'S DETAILS</h1><br>
            <h2>
           victim id:   <select name="id" style="font-size:20px;">
                           <?php
                            $q= mysqli_connect('localhost','root','','prisons');
                            $c= mysqli_select_db($q,'prisons');
                            $v="SELECT id from victim";
                            $result=  mysqli_query($q, $v);
                           while ($row=$result->fetch_assoc()){
                           ?>
                          <option value="<?php    echo $row['id'] ;?>">
                          <?php
                         echo $row['id']; ?></option>
                           <?php
                         }
s                        ?>
           </select><br><br>
  
            <input type="submit" value="view" style="font-size:30px;">
        </form>
    </body>
</html>


