<?php
$id=$_GET["id"];
$name=$_COOKIE["user"]["xm"];
echo $id;
$conn=mysql_connect("localhost","root","lhy");
 mysql_select_db("class",$conn);
 $result=mysql_query("Select * from title where id=".$id,$conn);
 $info=mysql_fetch_assoc($result);
 echo $info['title'];
 $comment=$_POST['comment'];
mysql_query("insert into  id".$info['id']."(name,comment) values ('".$name."','".$comment."')" ,$conn);
echo "insert into  id".$info['id']."(name,comment) values ('".$name."','".$comment."')";
echo "<script>alert('Commented!');location.href='1.3.php?id=".$id." ';</script>";
?>