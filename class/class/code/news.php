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
      height: 92%;
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

    #title {
      align-items: center;
      width: 320px;
      background-color: hsla(0, 0%, 100%, 0.1);
      color: black;
      border-radius: 15px;
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
      width: 1500px;
      height: 20%;
      margin: -10px;
      position: float;
      float: left;
      color: grey;
    }

    #rightthree {
      align-items: center;
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
      position: absolute;
      left: 50px;
      padding: 30px;
      top: 200px;
      text-align: center;
      font-size: 20px;
      margin: -10px;
    }
    #searchbar{
      width: 500px;
      height: 550px;
      position: absolute;
      left: 600px;
      padding: 30px;
      top: 0px;
      text-align: center;
      font-size: 20px;
      margin: -10px;
    }
    img {
      width: 200px;
      height: 180px;
      position: relative;
      top: 20px;
      border-radius: 20%;
      left: 0px;
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

    form {
      position: absolute;
      left: 40px;
    }

    #fabiao {
      resize: none;
      border-color: darkgrey;
      border-radius: 20px;
      font-size: 15px;
      font-family: "1.BMing_test003";
    }

    #fix {
      position: absolute;
      top: 390px;
      left: 820px;
      width: 70px;
      height: 30px;
      padding: 1px;
      background-color: MediumPurple;
      border-color: MediumPurple;
    }
  </style>
</head>

<body>

  <body>
    <div id="all">
      <div id="top">
        <div id="top2">
          <div id="top3">News</div>
        </div>
      </div>

      <div id="left">
        <div id="left2"></br></br></br>
          <ul type="disc">
          </ul></br></br></br></br>
          <div id="n"></br></br></br></br></br></br></br></br></br></br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Websites are upgrading,</br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;do
            please expectation!</br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
            <a
            href="exit.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input
              type="button" value="&nbsp;&nbsp;Sign out" /></a>
        </div>
      </div>
      
      <div id="right">
        <div id="right2">
          <div id="rightone">
            <div id="hh">&nbsp;&nbsp;财经&nbsp;&nbsp;科技&nbsp;&nbsp;汽车&nbsp;&nbsp;房产&nbsp;&nbsp;体育&nbsp;&nbsp;娱乐&nbsp;&nbsp;其他&nbsp;&nbsp;&nbsp;
            <div id="searchbar"><form action="1.11.php" method='post'>
          <input type="text" name="search" placeholder="            author" />
          <input type='submit' id="search" value="Search" /> </form></div></div>
            <div id="rightthree">
              <?php
              $conn=mysql_connect("localhost","root","lhy");
              mysql_select_db("class",$conn);
              $result=mysql_query("Select * from title",$conn);
              $totalnum=mysql_num_rows($result);
              $pagesize=8;
              $page=isset($_GET["page"])?$_GET["page"]:1;
              $begin=($page-1) * $pagesize;
              $totalpage=ceil($totalnum/$pagesize);
              echo "<table border='0' ><tr class='head'><th width='500px'>News</th><th width='200px'>Reporter</th></tr>";

     $query="SELECT * FROM title limit $begin,$pagesize";
     $result=mysql_query($query,$conn);
     $datanum=mysql_num_rows($result);  
     for($i=1;$i<=$datanum;$i++){
      $info=mysql_fetch_assoc($result);
      echo "<tr><td><a href=1.3.php?id=".$info['id'].">".$info['title']."</a></td>";
      echo "<td>".$info['name']."</td>
      <td><a href=1.6.php?id=".$info['id']."><div id='a1'>like</div></a></td>
      <td><a  href=1.51.php?id=".$info['id']."><div id='a1'>hate</div></a></td>
      </tr>";
      }
     echo "</table>"; 
     echo "<div id='ma'>";
     for($j=1;$j<=$totalpage;$j++){
       echo "<a href=?page=".$j.">[".$j."]</a>";
     }
     echo "</div>";
     ?></div></div></div>
            <div id="rightfour">
              <!-- CLASS</br> -->
              <img src='image/9.jpg' />
              <h3>The Latest Articals</h3>
            <?php
     $conn=mysql_connect("localhost","root","lhy");
     mysql_select_db("class",$conn);
     $result=mysql_query("Select * from title order by id desc ",$conn);
     for($i=1;$i<=3;$i++){
     $info=mysql_fetch_assoc($result);
     echo "<a  id='a1' href=2.31.php?id=".$info['id'].">".$info['title']."";
     echo "</a></br>";
    }
     ?>
            </div>
            
          </div>
      <div id="footer">@The copyright of this page belongs to Li Heyin.</div>

  </body>

</html>