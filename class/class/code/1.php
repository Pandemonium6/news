<?php
 $kind=$_POST['type'];
 $conn=mysql_connect("localhost","root","lhy");
 mysql_select_db("class",$conn);
 $name=$_POST["name"];
 $password=$_POST["password"];
   $bool=false; 
   $bool1=false; 
 if($kind==0){
    $email="";
    $tel="";
    $result=mysql_query("Select * from teacher",$conn);
    while($row=mysql_fetch_assoc($result)){ 
    if($name==$row['name']&&$password==$row['password']){
    $email=$row['email'];
    $tel=$row['tel'];
    $bool=true; }}
    if($bool){
      echo "<script>location.href='1.0.php ';</script>";
      setcookie("user[xm]",$name,time()+3600*24*1);
      setcookie("user[pass]",$password,time()+3600*24*1);
    }else{
      echo "<script>alert('Failed!');location.href='01.html ';</script>";
     }
}
 else{
  $email="";
  $tel="";
  $result=mysql_query("Select * from student",$conn);
  while($row=mysql_fetch_assoc($result)){ 
  if($name==$row['name']&&$password==$row['password']){
  $email=$row['email'];
  $tel=$row['tel'];
  $bool=true; }}
  
  $result=mysql_query("Select * from tobe",$conn);
  while($row=mysql_fetch_assoc($result)){ 
    if($name==$row['name']&&$password==$row['password']){
    $email=$row['email'];
    $tel=$row['tel'];
    $bool1=true; }}


  if($bool){
    echo "<script>location.href='news.php ';</script>";
    setcookie("user[xm]",$name,time()+3600*24*1);
    setcookie("user[pass]",$password,time()+3600*24*1);}
 else if($bool1){

  
    echo "<script>alert('Failed! waiting for acception');location.href='01.html ';</script>";}
else{
  echo "<script>alert('Failed!');location.href='01.html ';</script>";
 }
 }

?>