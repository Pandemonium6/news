<?php
$id=$_GET["id"];
echo $id;
$conn=mysql_connect("localhost","root","lhy");
 mysql_select_db("class",$conn);
 $result=mysql_query("Select * from title where id=".$id,$conn);
 $info=mysql_fetch_assoc($result);
 echo $info['title'];
 mysql_query("delete from title where id=".$id,$conn);
 mysql_query(" DROP TABLE `class`.`id".$id."`",$conn);
 echo " DROP TABLE `class`.id`".$id."`";
echo "<script>alert('Deleted!');location.href='wenzhangguanli.php';</script>";
 ?>