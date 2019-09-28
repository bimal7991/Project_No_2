<?php
?>
<html>
    <head>
        
        <script>
             function fillcells(str)
            {
                var v=0;
                alert("fillcells"+str);
//                if(str=="female")
//                {
//                    v=1;
//                }
//                
                var genderid=document.getElementById("genderid").value;
                str=genderid+"-"+str;
                //alert("id="+id);
                var x=new XMLHttpRequest();
                x.onreadystatechange=function()
                {
                  if(x.status==200  && x.readyState==4)
                  {
                      document.getElementById("d2").innerHTML=x.responseText;
                  }
                };
                
                x.open("GET","retrievecells.php?key="+str,true);
                x.send();
            } //end fillcells
            
            </script>
        
        
        
        <title>victim profile</title>
        <style>
            body {
                background-image: url("23.jpg");
                background-repeat: no-repeat;
                background-position: center;
                 background-size:cover;
                }
        </style>
    </head>
    <body>
        <form action="vic.php" method="POST">
        <h1 style="color:green;font-size:40px; text-align: center">victim profile</h1>
        <div style="text-align:center;color:red;font-size:15pt">
            
       
            
                
               
            Name:   <input type="text" name="name" required=""><br><br>
                
            dob:   <input type="date"name="dob"><br><br>
 
                    
            Address:      <textarea name="address" rows="4" cols="20" required="">
                    </textarea><br>
                     
                    fathername:   <input type="text" name="father" required=""><br><br>
            
          bloodgrp:  <select name="blood">
                     <option>o+</option>
                      <option>o-</option>
                      <option>a+</option>
                      <option>ab+</option>
                      <option>ab-</option>
                     </select><br><br>
             
          gender:   <select name="gender" id="genderid">
                     <option>male</option>
                      <option>female</option>
                    </select><br><br>
                  
                    phoneno:    <input type="number" name="phone" required="" ><br><br>
                       

                       Crime:  <?php
                         echo "<select name=\"crimetype\" id=\"d3\"  onchange=\"fillcells(this.value)\">";
                    echo "<option> select Crimetype</option>";
                        $q= mysqli_connect('localhost','root','');
                        $c= mysqli_select_db($q,'prisons');
                        $v="SELECT distinct crimetype from cells";
                        echo $v;
                   
                        $result=  mysqli_query($q, $v);
                        while ($row=$result->fetch_assoc()){
                       ?>
                       <option value="<?php echo $row['crimetype'] ;?>">
                     <?php
                       echo $row['crimetype']; ?></option>
                     <?php
                     }
                
                   ?>
        </select><br><br>


                 
         cellnum:   <select name="cellno" id="d2">
                    
                
                  
                    </select><br><br>
                    <div id="d1">  </div>
       
                         
    date of enter to prison:  <input type="date" name="enter"><br><br>
    
    release date:         <input type="date" name="release"><br><br>
    <?php
    
         ?>
       
   
                 <input type="submit"  value="submit">
                 
        
        </div>
        </form>
      </body>
    </head>
</html>
