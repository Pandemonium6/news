<?php
$title=$_POST['title'];
$new=$_POST['xiugai'];
$conn=mysql_connect("localhost","root","wlf611510");
mysql_select_db("class",$conn);
mysql_query("update  `title` set `contain`='".$new."' where title='".$title."'",$conn);
echo "update  `title` set `contain`='".$new."' where title='".$title."'";
echo "<script>alert('Fixed!');location.href='wenzhangguanli.php ';</script>";
?>