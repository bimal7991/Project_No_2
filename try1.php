<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$id=$_REQUEST['key'];
//echo "retrievename.php";
//echo "$id";
//echo "<select id=\"name\">";
echo "<div id=\"d1\">";
//echo "<input type=\"text\" id=\"t1\"";
$q= mysqli_connect('localhost','root','','prisons');
                $c= mysqli_select_db($q,'prisons');
                $v="SELECT name from victim where id='$id'";
                $result=  mysqli_query($q, $v);
                while ($row=$result->fetch_assoc()){
                   
               // echo "<option value=\"$id\">".$row['name']."</option>";
              // echo "<input type=\"text\" id=\"d2\" value=\"";echo $row['name']; echo "\">";
                    echo "<input type=\"text\" id=\"t1\"";
                    echo "value=";
                    echo $row['name'];
                    echo ">";
                } //end while()
                echo "</div>";
        

//echo "</select>";


?>