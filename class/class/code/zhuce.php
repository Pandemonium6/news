
    <?php 
    $kind=$_POST['type'];
    if($kind==0){
    $conn=mysql_connect("localhost","root","lhy");
    mysql_select_db("class",$conn);
    $userName=$_POST["name"];
    $password=$_POST["password"];
    $email=$_POST["email"];
    $tel=$_POST["phone_number"];
    $sql="insert into teacher (name,password,email,tel) values  ('".$userName."', '".$password."', '".$email."', '".$tel."')";
    $result=mysql_query($sql) or die(mysql_error());
    echo "<script>location.href='01.html ';</script>";}
    else{
        $conn=mysql_connect("localhost","root","lhy");
        mysql_select_db("class",$conn);
        $userName=$_POST["name"];
        $password=$_POST["password"];
        $email=$_POST["email"];
        $tel=$_POST["phone_number"];
        $sql="insert into tobe (name,password,email,tel) values  ('".$userName."', '".$password."', '".$email."', '".$tel."')";
        $result=mysql_query($sql) or die(mysql_error());
        echo "<script>alert('Waiting for acception!');location.href='01.html ';</script>";
    }
    ?>

