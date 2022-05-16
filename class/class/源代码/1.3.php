<html>

<head>
  <meta charset="UTF-8">
  <style>
    ::-webkit-scrollbar {
      display: none;
    }

    #all {
      width: 100%;
      height: 100%;
      background-image: url('image/1.png');
      background-size: 100% 100%;
      overflow: hidden;
      color: dimgrey;
    }

    #top {
      width: 96%;
      height: 10%;
      background: hsla(0, 0%, 100%, .85);
      margin: 30px;
    }

    #top2 {
      width: 65%;
      height: 40%;
      background: #fff5ee;
      margin-left: 35px;
      position: relative;
      left: 275px;
      top: 30px;
    }

    #top3 {
      position: relative;
      left: 0;
      top: -25px;
      font-family: "himalaya-g";
      font-weight: bolder;
      text-align: center;
      font-size: 55px;
      margin-top: -20px;
    }

    #left {
      width: 18%;
      height: 73%;
      background: hsla(0, 0%, 100%, .65);
      margin-left: 35px;
      position: float;
      float: left;
      font-family: "1.BMing_test003";
      font-weight: bolder;
      font-size: 20px;
      color: black;
    }

    #left2 {
      width: 95%;
      height: 90%;
      background: #fffafa;
      margin-left: 35px;
      position: relative;
      left: 0;
      top: 28px;
      font-family: "1.BMing_test003";
      font-size: 20px;
      color: black;
    }

    #left ol li {
      font-size: 15px;
      list-style: none;
      padding: 5px;
    }

    #right {
      align-items: center;
      width: 75%;
      height: 73%;
      background: hsla(0, 0%, 100%, .65);
      margin-left: 50px;
      position: float;
      float: left;
    }

    @font-face {
      font-family: "1.BMing_test003";
      src: url("font/1.BMing_test003.ttf");
      font-family: "himalaya-g";
      src: url("font/himalaya-g.ttf");
    }

    #footer {
      width: 96%;
      height: 4%;
      background: hsla(0, 0%, 100%, .85);
      margin: 30px;
      position: float;
      float: left;
      font-family: "himalaya-g";
      text-align: center;
      font-size: 15px;
      padding-top: 10px;
      color: black;
    }

    input {
      border: 1px solid #888;
      align-items: center;
      background-color: #778899;
      color: #fff;
      border-radius: 5px;
      padding: 10px 20px;
      margin-top: 10px;
      cursor: pointer;
      align-self: right;
      font-weight: bolder;
      font-size: 18px;
    }

    #n {
      font-weight: bolder;
      font-family: "himalaya-g";
      font-size: 15px;
    }

    #m {
      color: #800080;
      font-weight: bolder;
    }

    a {
      width: 100%;
      text-decoration: none;
      color: darkred;
    }

    #right2 {
      width: 95%;
      height: 90%;
      background: #fff5ee;
      margin-left: 35px;
      position: relative;
      left: 0;
      top: 28px;
      font-family: "1.BMing_test003";
      font-size: 14px;
    }

    #rightone {
      width: 1000px;
      height: 20%;
      margin: -10px;
      position: float;
      float: left;
      color: grey;
    }

    #rightthree {
      font-family: "himalaya-g";
      width: 950px;
      height: 450px;
      position: float;
      float: left;
      background: hsla(0, 0%, 100%, 1);
      margin-left: 35px;

    }

    #rightfour {
      width: 250px;
      height: 450px;
      position: relative;
      left: 1000px;
      padding: 30px;
      top: -450px;
      text-align: center;
      font-size: 20px;
      margin: -10px;
    }

    #hh {
      font-weight: bolder;
      font-family: "himalaya-g";
      font-size: 25px;
      margin: 28px;
    }

    th {
      padding-left: 30px;
      padding-top: 20px;
      font-size: 25px;
      text-align: left;
    }

    td {
      padding-left: 5px;
      padding-top: 0;
      font-size: 13px;
      text-align: left;
      color: grey;
    }

    #a1 {
      color: grey;
      font-size: 16px;
    }

    #ma {
      position: absolute;
      left: 400px;
      padding: 30px;
      top: 480px;
    }

    #h123 {
      position: absolute;
      left: 770px;
      top: 17px;
    }

    #img {
      position: absolute;
      top: 585px;
      left:60px;
      border-radius: 100%;
    }

    #img2 {
    
      position: absolute;
      top: 903px;
      left: 132px;
    
    }

    #ti {
      text-align: center;
    }

    #zhengwen {
      margin-left: 30px;
     height:300px
    }



    #comment {
      position: absolute;
      top: 360px;
      left: 615px;
    }

    #wen {
      overflow-y: scroll;
      position: absolute;
      width: 950px;
      height: 235px;
      top: 108px;
      left: 30px;
    }

    #a1{
      color:black;
    }
    #pin {
      overflow-y: scroll;
      position: absolute;
      width: 570px;
      height: 160px;
      top: 370px;
      left: 60px;
    }

    #pin1 {
      position: absolute;
      color: #4b0082;
      top: 325px;
      left: 60px;
      font-weight: bolder;
    }

    #a3{
      color:grey;
      font-family: "himalaya-g";
    }

    #submit {
      width: 50px;
      height: 30px;
      position: absolute;
      left: 290px;
      top: 130px;
      padding: 6px;
      font-weight: lighter;
      background-color: mediumpurple;
      border-color: mediumpurple;
    }

    .black_overlay{ 
            display: none; 
            position: absolute; 
            top: 0%; 
            left: 0%; 
            width: 100%; 
            height: 100%; 
            background-color: white; 
            z-index:1001; 
            -moz-opacity: 0.8; 
            opacity:.80; 
            filter: alpha(opacity=88); 
        } 
        .white_content { 
            display: none; 
            position: absolute; 
            top: 15%; 
            left: 25%; 
            width: 55%; 
            height: 70%; 
            padding: 20px; 
            font-size:20px;
            border: 1px solid #ffe4e1; 
            background-color: #ffe4e1; 
            z-index:1002; 
          border-radius:5px;
          padding:35px;
            overflow: auto; 
        } 
  </style>
</head>

<body>

  <body>
    <div id="all">
      <div id="top">
        <div id="top2">
          <div id="top3">Administrator</div>
        </div>
      </div>

      <div id="left">
        <div id="left2"></br></br></br>
          <ul type="disc">
            <li>&nbsp;&nbsp;User management<ol>
                <li> <a id='a1' href="2.0.php">Accept student users</a></li>
                <li> <a  id='a1'href="2.2.php">Delete student users</a></li>
              </ol>
            </li></br>
            <li> <a href="wenzhangguanli.php">
                <div id="m">&nbsp;&nbsp;Article management</div>
              </a></li>
          </ul></br></br></br></br>
          <div id="n">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Websites are upgrading,</br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;do
            please expectation!</br></br></br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div><a
            href="exit.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input
            type="button" value="&nbsp;&nbsp;Sign out" /></a>
        </div>
      </div>

      <div id="right">
        <div id="right2">
          <div id="rightone">
            <div id="hh">&nbsp;&nbsp;Article
              management&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <a href='wenzhangguanli.php'><input type="button" value="Go Back"></a>
                <a href='fabiao.html'><input id="h123" type="button" value="Publish Articles"></input> </a></div>
          </div>
          <div id="rightthree">
         <div id='wen'><div id='ti'><h3>
  <?php
    $id=$_GET["id"];
    $conn=mysql_connect("localhost","root","wlf611510");
    mysql_select_db("class",$conn);
    $result=mysql_query("Select * from title where id=".$id,$conn);
    $info=mysql_fetch_assoc($result);

    echo $info['title'];
    echo '</h3></div>';
    echo "<div id='zhengwen'>";?>
    <a  id='a3' href = "javascript:void(0)" onclick = "document.getElementById('light').style.display='block';document.getElementById('fade').style.display='block'">
    <?php
    echo $info['contain'];
    echo '</a></br>';
     $result=mysql_query("Select * from title where id<".$id." order by id desc",$conn);
     $totalnum=mysql_num_rows($result);
     if($totalnum!=0){   
     $info=mysql_fetch_assoc($result);
    echo "<p align='right' ><a href=1.3.php?id=".$info['id']."> <font color='darkviolet' size='3'><b>Previous Article</b>&nbsp;&nbsp;&nbsp;</font></a></p>";}
    $result=mysql_query("Select * from title where id>".$id,$conn);
    $totalnum=mysql_num_rows($result);
    if($totalnum!=0){
    $info=mysql_fetch_assoc($result);


   echo "<p  align='right'><a href=1.3.php?id=".$info['id'].">  <font color='darkviolet' size='3'><b>Next Article</b>&nbsp;&nbsp;&nbsp;</font></a></p>";}
    echo' </div></div></br>';
   
    
    ?>

  <?php
   
    $conn=mysql_connect("localhost","root","wlf611510");
    mysql_select_db("class",$conn);
    $result=mysql_query("Select * from title where id=".$id,$conn);
    $info=mysql_fetch_assoc($result);
    $result=mysql_query("Select * from id".$info['id'] ,$conn);
    echo"<div id='pin1'>";
    echo '</br>Comment Area</br></br></div>';echo "<div id='pin'><table font-size='10px'>";

    while($row=mysql_fetch_assoc($result)){  
      echo" <tr><td width='100px'>";
      echo $row['name']; 
      echo"</td><td width='380px'>";
      echo $row['comment'];
      echo "</td><td width='50px'><a href=removeComment.php?id=".$id."&num=".$row['id'].">delete</a></td></tr>";
    } 
    echo"</table></div>";
    echo "<form action='1.4.php?id=".$id."' method='post'>";
  ?>
    <div id='comment'>
      <textarea name="comment" rows="7" cols="45" class="area" style="font-family: '1.BMing_test003';resize:'none'; 
      border-color:darkgrey;border-radius:20px;color:grey;
      ">-comment-</textarea></br>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;
      <input type="submit" id='submit' value="Add">
    </div>
    </form>
    </div>
          <div id="rightfour">
            <h3>The Author</h3>
            <img id='img' src="image2/2.jpg" width="200px" height="200px" /></br><?php
            $conn=mysql_connect("localhost","root","wlf611510");
            mysql_select_db("class",$conn);
            $result=mysql_query("Select * from title where id=".$id,$conn);
            $info=mysql_fetch_assoc($result);
            echo "</br>"; echo "</br>";    echo "</br>"; echo "</br>";    echo "</br>"; echo "</br>";    echo "</br>"; 
            echo $info['name'];
            $result=mysql_query("Select * from teacher where name='".$info['name']."'",$conn);
            $info=mysql_fetch_assoc($result);
            echo "</br>";
            echo $info['tel'];
            echo "</br>";
            echo $info['email'];  
            ?> <img id='img2' src="image/8.png" width="210px" height="110px" />
          </div>
        </div>
      </div>

      <div id="footer">@The copyright of this page belongs to Li Heyin and Wu Luofei.</div>
  </div>
       
        <div id="light" class="white_content">
        <a id='a3'href = "javascript:void(0)" onclick = "document.getElementById('light').style.display='none';document.getElementById('fade').style.display='none'"><?php
            $id=$_GET["id"];
            $conn=mysql_connect("localhost","root","wlf611510");
            mysql_select_db("class",$conn);
            $result=mysql_query("Select * from title where id=".$id,$conn);
            $info=mysql_fetch_assoc($result);
            echo"<h1>";
            echo$info['title'];
            echo"</h1>";
            echo "&nbsp;&nbsp;&nbsp;&nbsp;";
            echo $info['contain'];
        
        ?></a></div> 
        <div id="fade" class="black_overlay">
  </body>

</html>