<?php

$q= mysqli_connect("localhost","root","","prisons");

mysqli_select_db($q,"prisons");

if($q)
{

    echo "connn";

}

 else 
{

echo "not    ";

}

?>
