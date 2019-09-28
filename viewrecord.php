<div id="d1">
<table border="1">

<?php  
$id=$_REQUEST['key'];
//$id="12";
 echo "<tr><td>ID</td><td>NAME</td><td>ADDRESS</td><td>GENDER</td><td>ENTERED DATE</td><td>RELEASE DATE</td><td>BEHAVIUOR</td><td>COMMENT</td></tr>";
   $q= mysqli_connect('localhost','root','','prisons');
                $c= mysqli_select_db($q,'prisons');
                //$v="insert into recordbehaviour values('','$id','$date1','$b','$comment')";
                $v="select id,name,address,gender,enterdate,releasedate,behaviour,comment from v2 where id='$id'";
                //echo $v;
                //$result=  mysqli_query($q, $v);
                $result=  mysqli_query($q, $v);
                while ($row=$result->fetch_assoc()){
                   
 //   while ($row=mysqli_fetch_array($q,$result)){
        //echo $row['id'];
            echo "<tr></td><td>".$row['id']."</td><td>".$row['name']."</td><td>".$row['address']."</td><td>".$row['gender']."</td><td>".$row['enterdate']."</td><td>".$row['releasedate']."</td><td>".$row['behaviour']."</td><td>".$row['comment']."</td></tr>";
        
     }  //end while
    
    ?>
</table>
</div>