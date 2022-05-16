<?php
function vaild($name){
    $conn=mysql_connect("localhost","root","wlf611510");
    mysql_select_db("class",$conn);
    $bool=true;
    $result=mysql_query("Select * from student",$conn);
    while($row=mysql_fetch_assoc($result)){ 
        if($name==$row['name']){
            $bool=false;  } }
    $result2=mysql_query("Select * from tobe",$conn);
    while($ro=mysql_fetch_assoc($result2)){ 
        if($name==$ro['name']){
            $bool=false;         }   }
    $result3=mysql_query("Select * from teacher",$conn);
    while($r=mysql_fetch_assoc($result3)){ 
        if($name==$r['name']){
        $bool=false;   }   return $bool;}}
    function checkuname($str){
        $length=strlen($str);
    if($length>12||$length<6)
        return false;
    for($i=0;$i<$length;$i++){
        if((ord($str[$i])<=122&&ord($str[$i])>=97)||(ord($str[$i])<=90&&ord($str[$i])>=65)||(ord($str[$i])<=57&&ord($str[$i])>=48)||$str[$i]=="_"){   
        }else{
            return false;}}return true;}
    $result='proper name';
        if(!vaild($_GET["username"])){
            $result='admin exist';
        }
        else if (!checkuname($_GET["username"])){
            $result='6-12 characters(num/word/underline)';
        }
    echo $result;
    ?>