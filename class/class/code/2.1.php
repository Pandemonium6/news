<?php
 $id=$_GET['id'];
 $conn=mysql_connect("localhost","root","lhy");
 mysql_select_db("class",$conn);
 mysql_query("set names 'utf8'",$conn);
 $result=mysql_query("Select * from tobe where id=".$id,$conn);
 $info=mysql_fetch_assoc($result);
 $userName=$info["name"];
 $password=$info["password"];
 $email=$info["email"];
 $tel=$info["tel"];
 $sql="insert into student (name,password,email,tel) values  ('".$userName."', '".$password."', '".$email."', '".$tel."')";
 $result=mysql_query($sql) or die(mysql_error());
 mysql_query("delete from tobe where id=".$id,$conn);
 echo "<script>location.href='2.0.php ';</script>";
?>