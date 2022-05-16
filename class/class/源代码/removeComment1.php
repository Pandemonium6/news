<?php
$id=$_GET['id'];
$num=$_GET['num'];
$conn=mysql_connect("localhost","root","wlf611510");
  mysql_select_db("class",$conn);
  $result=mysql_query("Select * from title where id=".$id,$conn);
  $info=mysql_fetch_assoc($result);
  mysql_query("delete  from `class`.`id".$info['id']."` where id=".$num ,$conn);
  echo "<script>alert('Deleted!');location.href='2.31.php?id=".$id." ';</script>";
?>