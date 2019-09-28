<?php


$id=$_REQUEST['key'];

//echo "retrievename.php";

//echo "$id";

//echo "<select id=\"name\">";

echo "<div id=\"d1\">";

echo "<table border=\"1\">";

echo "<tr><td>id</td><td>Name</td><td>Gender</td><td>Crime</td><td>Enetred Date</td><td>Released Date</td></tr>";

//echo "<input type=\"text\" id=\"t1\"";

$q= mysqli_connect('localhost','root','','prisons');
 
               $c= mysqli_select_db($q,'prisons');
 
               $v="SELECT id,name,gender,crime,enterdate,releasedate from victim where id='$id'";
 
               $result=  mysqli_query($q, $v);
  
              while ($row=$result->fetch_assoc())
{
  
                 
               // echo "<option value=\"$id\">".$row['name']."</option>";

              // echo "<input type=\"text\" id=\"d2\" value=\"";
echo $row['name']; echo "\">";
 
                   echo "<tr><td>";

                     echo $row['id'];
 
                   echo "</td><td>";
  
                  
                  //  echo "<td><input type=\"text\" name=\"t1\" id=\"t1\"";
 
                 //  echo "value=";
  
                  echo $row['name'];
 
                 //  echo ">";

                    echo "</td>";
 
                   echo "<td>";
 
                  // echo "<input type=\"text\" name=\"t2\" id=\"t2\"";
  
                //  echo "value=";
    
                echo $row['gender'];
    
             //   echo ">";
      
              echo "</td>";
 
                    echo "<td>";
  
                 // echo "<input type=\"text\" name=\"t3\" id=\"t3\"";


                  //  echo "value=";

                    echo $row['crime'];
   
               //  echo ">";
    
                echo "</td>";

                     echo "<td>";
  
                //  echo "<input type=\"text\"name=\"t4\" id=\"t4\"";
   
                 //echo "value=";
     
               echo $row['enterdate'];
     
              // echo ">";
     
               echo "</td>";
       
              echo "<td>";
            
        //echo "<input type=\"text\"name=\"t5\" id=\"t5\"";
   
                 //echo "value=";
  
                  echo $row['releasedate'];
     
               //echo ">";
         
           echo "</td></tr>";
    
            } 
//end while()
                
                echo "</table></div>";
    
    

//echo "</select>";



?>
