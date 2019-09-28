<?php

?>
        <html><head>
    
                <script>
                    
                    function approve()
            {
                //alert("approve");
                var id=document.getElementById("id").value;
                //alert("id="+id);
                var x=new XMLHttpRequest();
                x.onreadystatechange=function()
                {
                  if(x.status==200  && x.readyState==4)
                  {
                      document.getElementById("s2").innerHTML=x.responseText;
                  }
                };
                str=id;
                x.open("GET","approve.php?key="+str,true);
                x.send();
            } //end approve()
 
 
//  
 
//                    function disapprove()
//            {
                //alert("retrievename");
                //var id=document.getElementById("id").value;
                
                //alert("id="+id);
//                var x=new XMLHttpRequest();
//                x.onreadystatechange=function()
//                {
//                  if(x.status==200  && x.readyState==4)
//                  {
//                      document.getElementById("d1").innerHTML=x.responseText;
//                  }
//                };
//                
//                x.open("GET","viewrecord.php?key="+str,true);
//                x.send();
          //  } //end disapprove()
                    
                    
 function choosenext()
            {
                //alert("retrievename");
                //var id=document.getElementById("id").value;
                //alert("id="+id);
               window.location="suggestvictim.php";
            } //end retreievename()
                    

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
                
                x.open("GET","viewrecord.php?key="+str,true);
                x.send();
            } //end retreievename()
           </script>
    </head>            
    
    
    <body>
        
         id: <select name="id" id="id" onchange="retrievename(this.value)">
             <option> choose victim id</option>
                 <?php
                $q= mysqli_connect('localhost','root','','prisons');
                $c= mysqli_select_db($q,'prisons');
                $v="SELECT distinct id from v2";
                $result=  mysqli_query($q, $v);
                while ($row=$result->fetch_assoc()){
                    ?>
                <option value="<?php    echo $row['id'] ;?>">
                <?php
                    echo $row['id']; ?></option>
                <?php
                }
                ?>
           </select><br><br>
           <div id="d1">
               <table>
               </table>
           </div>
           
              <button type="button" onclick="approve()">Approve for release</button>
              <button type="button" onclick="choosenext()">Choose next</button>
              <div id="s2">
                  display here 
              </div>
<!--              <button type="button" onclick="disapprove()"> Disapprove</button>
           -->
           
           
    </body>
            </html>