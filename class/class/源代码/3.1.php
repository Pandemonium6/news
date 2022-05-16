<?php
$title =$_POST['title'];
$contain=$_POST['contain'];
$name=$_COOKIE["user"]["xm"];
$name=$name." ";
$conn=mysql_connect("localhost","root","wlf611510");
mysql_select_db("class",$conn);
$sql="insert into `title` (title,name,contain) values  ('".$title."','".$name."','".$contain."')";
mysql_query($sql);

$result=mysql_query("Select * from title where title='".$title."'",$conn);
$info=mysql_fetch_assoc($result);

$sql2= "CREATE TABLE class.id".$info['id']." (
    `id` INT NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(450) NULL,
    `comment` VARCHAR(45) NULL,
    PRIMARY KEY (`id`));";
    mysql_query($sql2);
echo "<script>alert('Pubilshed!');location.href='wenzhangguanli.php ';</script>"
?>         
