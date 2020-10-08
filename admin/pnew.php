<?php
include 'connect.php';

 $qry="SELECT pnew FROM pnew";
 
 $result=mysqli_query($conn,$qry);
 $pno=mysqli_num_rows($result);
 $pno=$pno+1;
 
 $sql="INSERT INTO pnew(pnew) VALUES('$pno')";

mysqli_query($conn,$sql);
 ?>