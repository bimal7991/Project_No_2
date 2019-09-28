<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


//echo "retrievecells.php";


$g=$_REQUEST['key'];
//$gender="male";
$a=array();
$a=explode("-",$g);
$gender=$a[0];
$crimetype=$a[1];

$v=0;
if($gender=="female")
{
    $v=1;
}


 echo "<select name=\"cellno\" id=\"d2\">";
                    
                        $q= mysqli_connect('localhost','root','');
                        $c= mysqli_select_db($q,'prisons');
                        $v="SELECT cellno from v6 where celltype='$v' and crimetype='$crimetype'";
                        echo $v;
                   
                        $result=  mysqli_query($q, $v);
                        while ($row=$result->fetch_assoc()){
                       ?>
                       <option value="<?php echo $row['cellno'] ;?>">
                     <?php
                       echo $row['cellno']; ?></option>
                     <?php
                     }
                
                   ?>
                    </select>












