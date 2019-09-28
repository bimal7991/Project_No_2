<?php

?>
<html>
    <head>
        <script>
            function retrievename(str)
            {
                //alert("retrievename");
                //var id=document.getElementById("id").value;
                //alert("id="+id);
                var x=new XMLHttpRequest();
                x.onreadystatechange=function()
                {
                  if(x.status==200  && x.readyState==4)
                  {
                      document.getElementById("d1").innerHTML=x.responseText;
                  }
                };
                
                x.open("GET","retrievename.php?key="+str,true);
                x.send();
            } //end retreievename()
            
            function saveme()
            {
                //alert("saveme");
                var id=document.getElementById("id").value;
                var date1=document.getElementById("date1").value;
                var b=document.getElementById("b").value;
                var comment=document.getElementById("c").value;
              //  var id=document.getElementById("id").value;
                //alert("id="+id);
                
                var str="@"+id+"@"+date1+"@"+b+"@"+comment;
                var x=new XMLHttpRequest();
                x.onreadystatechange=function()
                {
                  if(x.status==200  && x.readyState==4)
                  {
                      document.getElementById("display1").innerHTML=x.responseText;
                  }
                };
                
                x.open("GET","saveme.php?key="+str,true);
                x.send();
            }
            
            
            </script>
        
        
        
        
        
        <title>3 jailer_table</title>
        <style>
            body {
                background-image: url("cn.jpg");
                background-repeat: no-repeat;
                background-position: center;
                 background-size:cover;
                }
        </style>
        
    </head>
    <body bgcolor="lightpink">
        <div style="text-align:center;font-size:30px">
           <h1 style="color:blue;font-size:40px;"> JAILER <h1>

                   <form  action=".php" method="Get">
        <div  style="color:red;font-size:30px;">
         <h2>
           id: <select name="id" id="id" onchange="retrievename(this.value)" style="font-size:20px;" >
               
                 <?php
                $q= mysqli_connect('localhost','root','','prisons');
                $c= mysqli_select_db($q,'prisons');
                $v="SELECT id from victim where status=0";
                $result=  mysqli_query($q, $v);
                while ($row=$result->fetch_assoc()){
                    ?>
                <option value="<?php    echo $row['id'] ;?>">
                <?php
                    echo $row['id']; ?></option>
                <?php
                }
                ?>
           </select>

          <div id="d1">
              <table border="1">
                  
               </table>
                  
               </div>
          <h2>
           Verification Date:<input type="date" id="date1" name="date1 style="font-size:20px;">
          <h2>       
        behavior:<select id="b" name="beh" style="font-size:20px">
                        <option>average</option>
                         <option>good</option>
                         <option>very good</option>
                         <option>bad</option>
                         <option>very bad</option>
        </select><br>
      <h2>
      elligbility criteria for release: <textarea id="c" name="elligible" rows="3" cols="20" style="font-size:20px;">
      </textarea><br>
        </div>
                       
                       <div id="display1">  </div>
       <div style="text-align:center">
           <button type="button" onclick="saveme()" style="font-size:20px">Save</button>
        </div>
                       
                       
                       
                   </form>	
                   </body>
                   </html>