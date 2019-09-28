<?php



$s=$_REQUEST['key'];
$a=array();
//echo "$s";
$a=explode("@",$s);
//$i=0;

    $id=$a[1];
    $date1=$a[2];
    $b=$a[3];
    $comment=$a[4];
    //echo $id.$date1.$b.$c;
    $q= mysqli_connect('localhost','root','','prisons');
                $c= mysqli_select_db($q,'prisons');
                $v="insert into recordbehaviour values('','$id','$date1','$b','$comment')";
                $result=  mysqli_query($q, $v);
                if($result)
                {
                    
                    echo   '<script>alert("values added successfully");
                 window.location = "report.php";</script>';
 
                }
       else {
      echo  '<script>alert("not added");
                             window.location = "report.php";</script>';
               
        }
 
?>