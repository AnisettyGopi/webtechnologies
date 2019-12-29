<?php 

$connection= mysqli_connect("localhost","root","","semresult");
$no=$_POST['JntukNo'];
$query="select * from marks  where JntukNo='$no' ";
$res=mysqli_query($connection,$query);


 ?>



 <!DOCTYPE html>
 <html>
 <head>
 	<style>
 		h1{
 			text-align: center;
 		}

.main{
     position: absolute;
     height: 80%;
     width: 50%;
     left: 30%;
    
     border: 1px solid black;

}


table{ 
   
    border-spacing: 5px 13px; 
    background:#151719;
    color:white;
    text-transform:uppercase;
   } 


 	</style>
 </head>
 <body>
<div class="main">

<h1>Semester -3 Results</h1>
 <table  align="center" style="text-align: center;border: 1px solid black; width: 300px; ">

   <?php 
 
while ($row = mysqli_fetch_array($res)) {
    ?>
  
 <tr><td>JuntkNO<td><?php  echo $row['JntukNo']; ?>
<tr><td>Name<td><?php  echo $row['Name']; ?></td></tr>
 <tr><td>COA<td><?php  echo $row['COA']; ?></td></tr>
  <tr><td>DBMS<td><?php  echo $row['DBMS']; ?></td></tr>
 <tr> <td>DLD<td><?php  echo $row['DLD']; ?></td></tr>
 <tr> <td>DSGT<td><?php  echo $row['DSGT']; ?></td></tr>
 <tr> <td>DS<td><?php  echo $row['DS']; ?></td></tr>
 <tr> <td>JAVA<td><?php  echo $row['JAVA']; ?></td></tr>
 <tr> <td>DSLAB<td><?php  echo $row['DSLAB']; ?></td> </tr>
 <tr><td>JAVALAB<td><?php  echo $row['JAVALAB']; ?></td></tr>
  <tr><td>DBMSLAB<td><?php  echo $row['DBMSLAB']; ?></td></tr>
  <tr><td>RESULT<td><?php  echo $row['RESULT']; ?></td></tr>

<?php } ?>


 </table>

</div>

 </body>
 </html>