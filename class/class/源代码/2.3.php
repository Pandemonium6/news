<?php
$id=$_GET['id'];
$conn=mysql_connect("localhost","root","wlf611510");
 mysql_select_db("class",$conn);
 $result=mysql_query("Select * from student where id=".$id,$conn);
 $info=mysql_fetch_assoc($result);
 echo $info['name'];
 mysql_query("delete from student where id=".$id,$conn);
 echo "<script>alert('Deleted!');location.href='2.2.php ';</script>";
 ?>