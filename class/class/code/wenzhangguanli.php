<html>

<head>
  <meta charset="UTF-8">

  <style>
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
      font-size: 18px;
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
      font-family: "1.BMing_test003";
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

    a:hover {
      color: #ba55b3;
    }

    img {
      width: 300px;
      height: 180px;
      position: relative;
      top: 25px;
      border-radius: 20%;
      left: -10px;
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
                <div id="m">&nbsp;&nbsp;News management</div>
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
            <div id="hh">&nbsp;&nbsp;News management&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <a href='fabiao.html'><input type="button" id="h123" value="Publish News"></input> </a></div>
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
   <td><a href=1.6.php?id=".$info['id']."><div id='a1'>fix</div></a></td>
   <td><a  href=1.51.php?id=".$info['id']."><div id='a1'>delete</div></a></td>
   </tr>";
   }
  echo "</table>"; 
  echo "<div id='ma'>";
  for($j=1;$j<=$totalpage;$j++){
    echo "<a href=?page=".$j.">[".$j."]</a>";
  }
  echo "</div>";
  ?>
            </div>
            <!-- <div id="rightfour">
              <h3>CLASS</h3>
              <img src='image/9.jpg' />
              </br>
              </br>
              </br>
              12306852 </BR>
              13906757853</br>
              1234@163.com</br>
              12306852 </BR>
              13906757853</br>
              1234@163.com</br>
            </div> -->
          </div>
        </div>
      </div>
      <div id="footer">@The copyright of this page belongs to Li Heyin.</div>

  </body>

</html>