<?php

$jntuno   =  $_POST['JntukNo'];
$name    =  $_POST['Name'];
$coa     =  $_POST['COA'];
$dbms     =  $_POST['DBMS'];
$dld      =  $_POST['DLD'];
$dsgt     =  $_POST['DSGT'];
$ds       =  $_POST['DS'];
$java     =  $_POST['JAVA'];
$dslab    =  $_POST['DSLAB'];
$javalab  =  $_POST['JAVALAB'];
$dbmslab  =  $_POST['DBMSLAB'];


$conn=mysqli_connect("localhost","root","","semresult");

if($conn)
	echo "connected";
else
	echo "not conn";

$result=mysqli_query($connection,"insert into marks values('$jntuno','$name','$coa','$dbms','$dld','$dsgt','$ds','$java','$dslab','$javalab','$dbmslab')");


?>