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
      border: 1px solid darkgrey;
      align-items: center;
      background-color: #778899;
      color: #fff;
      border-radius: 5px;
      padding: 10px 20px;
      margin-top: 10px;
      cursor: pointer;
      align-self: right;
      font-size: 17px;
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
      color: black;
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
      padding-left: 30px;
      font-size: 17px;
      text-align: left;
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
      position: relative;
      top: 25px;
      border-radius: 100%;
    }

    #img2 {
      position: relative;
      top: 26px;
      left: 128px;
    }

    #ti {
      text-align: center;
    }

    #zhengwen {
      margin: 20px;
    }

    #comment {
      position: absolute;
      top: 432px;
      left: 30px;
    }

    #wen {
      overflow-y: scroll;
      position: absolute;
      width: 950px;
      height: 200px;
      top: 108px;
      left: 30px;
    }

    #pin {
      overflow-y: scroll;
      position: absolute;
      width: 950px;
      height: 75px;
      top: 355px;
      left: 40px;
    }

    #pin1 {
      position: absolute;
      color: #4b0082;
      top: 310px;
      left: 40px;
      font-weight: bolder;
    }

    #title {
      background: hsla(0, 0%, 100%, .0);
      color: black;
      position: absolute;
      left: 40px;
      border-radius: 20px;
    }

    #xiugai {
      position: absolute;
      top: 170px;
      left: 40px;
      resize: none;
      border-color: darkgrey;
      border-radius: 20px;
      color: grey;
      font-size: 15px;
      font-family: "1.BMing_test003";
    }

    #fix {
      position: absolute;
      top: 495px;
      left: 880px;
      width: 50px;
      height: 30px;
      padding: 1px;
      background-color: MediumPurple;
      border-color: MediumPurple;
      font-family: "1.BMing_test003";
      font-weight: lighter;
      font-size: 17px;
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
                <li> <a href="2.0.php">Accept student users</a></li>
                <li> <a href="2.2.php">Delete student users</a></li>
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
              management&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <a href='wenzhangguanli.php'><input type="button" value="Go Back"></a>
  </div>
            <div id="rightthree">
              <?php
    $id=$_GET["id"];

  $conn=mysql_connect("localhost","root","lhy");
  mysql_select_db("class",$conn);
  $result=mysql_query("Select * from title where id=".$id,$conn);
  $info=mysql_fetch_assoc($result);

  echo "<form action ='6.1.php' method='POST'>
  <input id='title' type='text' name='title' readonly='readonly' value='".$info['title']."'/></br></br>
  <textarea  id='xiugai' name='xiugai' rows='16' cols='110'>".$info['contain']."</textarea></br>
  <input id='fix' type='submit' value='fix'>
  </form>";
 ?>
    </div>
    <div id="rightfour">The Author</br>
    <img id='img' src="image2/2.jpg" width="200px" height="200px" /></br><?php
    $conn=mysql_connect("localhost","root","lhy");
    mysql_select_db("class",$conn);
    $result=mysql_query("Select * from title where id=".$id,$conn);
    $info=mysql_fetch_assoc($result);
    echo "</br>"; echo "</br>"; 
    echo $info['name'];
    $result=mysql_query("Select * from teacher where name='".$info['name']."'",$conn);
    $info=mysql_fetch_assoc($result);
    echo "</br>";
    echo $info['tel'];
    echo "</br>";
    echo $info['email'];               
            ?> <img id='img2' src="image/8.png" width="210px" height="110px" /></div>
          </div>
        </div>
      </div>
      <div id="footer">@The copyright of this page belongs to Li Heyin and Wu Luofei.</div>

  </body>

</html>