<html>

<head>
  <meta charset="UTF-8">
  <script>
    window.onload = function tablecolor() {
      var t_name = document.getElementById("tab");
      var t_len = t_name.getElementsByTagName("tr");
      for (var i = 1; i <= t_len.length; i++) {

        if (i % 2 == 0) {
          t_len[i].style.backgroundColor = "#ffb6c1";

          t_len[i].onmouseover = function () {
            this.style.backgroundColor = "#c0c0c0"
          }

          t_len[i].onmouseout = function () {
            this.style.backgroundColor = "#ffcccc"
          }
        }
        else {
          t_len[i].style.backgroundColor = "#ffe4e1";

          t_len[i].onmouseover = function () {
            this.style.backgroundColor = "#d8bfd8"
          }
          t_len[i].onmouseout = function () {
            this.style.backgroundColor = "#ffe4e1"
          }
        }
      }
    }</script>
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

    #input2 {
      border: 1px solid #8b008b;
      align-items: center;
      background-color: #8b008b;
      color: #fff;
      border-radius: 5px;
      padding: 8px 9px;
      position: absolute;
      left: -180px;
      top: -0px;
      margin-top: 0;
      cursor: pointer;
      align-self: right;
      font-weight: bolder;
      font-size: 14px;
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

    #ma {
      position: absolute;
      left: 400px;
      padding: 30px;
      top: 480px;
    }

    #right2 {
      width: 95%;
      height: 90%;
      background: #fff5ee;
      margin-left: 35px;
      position: relative;
      left: 0;
      top: 28px;
      font-family: "himalaya-g";
      font-size: 15px;
    }

    th {
      padding-left: 30px;
      padding-top: 20px;
      font-size: 25px;
      text-align: left;
    }

    td {
      height: 60px;
      position: relative;
      left: 30px;
      top: 10px;
    }

    head {
      align-items: left;
    }

    a:hover {
      color: #ba55b3;
    }

    #ma {
      position: absolute;
      left: 500px;
      padding: 30px;
      top: 490px;
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
            <li>
              <div id="m">&nbsp;&nbsp;User management</div>
              <ol>
                <li> <a href="2.0.php">Accept student users</a></li>
                <li> <a href="2.2.php">
                    <div id="m">Delete student users</div</a> </li> </ol> </li> </br> <li> <a
                        href="wenzhangguanli.php">&nbsp;&nbsp;Article management</a></li>
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
          <?php
  $conn=mysql_connect("localhost","root","lhy");
  mysql_select_db("class",$conn);
  mysql_query("set names 'utf8'",$conn);
  
  $query="SELECT * FROM student";
  $result=mysql_query($query,$conn);
  $totalnum=mysql_num_rows($result);
  $pagesize=7;
  $page=isset($_GET["page"])?$_GET["page"]:1;
  $begin=($page-1) * $pagesize;
  $totalpage=ceil($totalnum/$pagesize);
  
  echo "<table id='tab' rules='none' border='0'><tr class='head'>
  <th width='250px'>name</th>
  <th width='250px'>password</th> 
  <th width='250px'>email</th>
  <th width='460px'>telephone</th>
  </tr>";

  $query="SELECT * FROM student limit $begin,$pagesize";
  $result=mysql_query($query,$conn);
  $datanum=mysql_num_rows($result);  
  for($i=1;$i<=$datanum;$i++){
   $info=mysql_fetch_assoc($result);
   echo "<tr><td>".$info['name']."</td>";
   echo "<td>".$info['password']."</td>";
   echo "<td>".$info['email']."</td>";
   echo "<td>".$info['tel']."</td>";
   echo "<td><a href='2.3.php?id=".$info['id']."'><input id='input2' type='button' value='delete'></div></a></td></tr>";
   }
  echo "</table>
  <div id='ma'>";
  for($j=1;$j<=$totalpage;$j++){
   echo "<a href=?page=".$j.">[".$j."]&nbsp;</a>";
  }
?>
        </div>
      </div>
    </div>
    <div id="footer">@The copyright of this page belongs to Li Heyin.</div>
    </div>
  </body>

</html>