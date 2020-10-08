<?php
include 'connect.php';

 $qry="SELECT pno FROM pno";
 
 $result=mysqli_query($conn,$qry);
 $pno=mysqli_num_rows($result);
 $pno=$pno+1;
 
 $sql="INSERT INTO pno(pno) VALUES('$pno')";

mysqli_query($conn,$sql);
 ?>