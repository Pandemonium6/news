<?php
$old=$_POST['old'];
$new=$_POST['new'];
$old_true=$_COOKIE["user"]["pass"];
$name=$_COOKIE["user"]["xm"];
if($old==$old_true){
    $conn=mysql_connect("localhost","root","lhy");
    mysql_select_db("class",$conn);
    $sql="UPDATE  `class`.`student` SET  `password` =  '".$new."' WHERE  `student`.`name` =  '".$name."'";
    echo $sql;
    $result=mysql_query($sql) or die(mysql_error());
    setcookie("user[pass]",$new,time()+3600*24*1);
    echo "<script>alert('Changed');location.href='1.1.php ';</script>";}
    else{
        echo "  <script>location.href='xiugai1.php ';</script>";
    }


?>