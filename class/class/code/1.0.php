<html>

<head>


  <style type="text/css">
    a {
      text-decoration: none;
      color: black;
    }

    .box {
      width: 85%;
      height: 90%;
      margin: 20px auto;
      overflow: hidden;
      position: relative;
      left: -30px;
    }

    .box-1 ul {}

    .box-1 ul li {
      width: 100%;
      width: 100%;
      position: relative;
      overflow: hidden;
    }

    .box-1 ul li img {
      display: block;
      width: 100%;
      width: 100%;
    }

    .box-1 ul li h2 {
      position: absolute;
      left: 0;
      bottom: 0;
      height: 40px;
      width: 300px;
      background: rgba(125, 125, 120, .4);
      text-indent: 2em;
      padding-right: 500px;
      font-size: 15px;
      line-height: 40px;
      text-overflow: ellipsis;
      overflow: hidden;
      white-space: nowrap;
      font-weight: normal;
      color: ghostwhite
    }

    .box-2 {
      position: absolute;
      right: 10px;
      bottom: 14px;
    }

    .box-2 ul li {
      float: left;
      width: 12px;
      height: 12px;
      overflow: hidden;
      margin: 0 5px;
      border-radius: 50%;
      background: rgba(0, 0, 0, 0.5);
      text-indent: 100px;
      cursor: pointer;
    }

    .box-2 ul .on {
      background: rgba(255, 255, 255, 0.6);
    }

    .box-3 span {
      position: absolute;
      color: white;
      background: rgba(125, 125, 120, .3);
      width: 50px;
      height: 80px;
      top: 50%;
      font-family: "宋体";
      line-height: 80px;
      font-size: 60px;
      margin-top: -40px;
      text-align: center;
      cursor: pointer;
    }

    .box-3 .prev {
      left: 40px;
    }

    .box-3 .next {
      right: 0px;
    }

    .box-3 span::selection {
      background: transparent;
    }

    .box-3 span:hover {
      background: rgba(125, 125, 120, .8);
    }
  </style>

  <script type="text/javascript">
    window.onload = function () {
      function $(param) {
        if (arguments[1] == true) {
          return document.querySelectorAll(param);
        } 
        else {
          return document.querySelector(param);
        }
      }
      var $box = $(".box");
      var $box1 = $(".box-1 ul li", true);
      var $box2 = $(".box-2 ul");
      var $box3 = $(".box-3");
      var $length = $box1.length;

      var str = "";
      for (var i = 0; i < $length; i++) {
        if (i == 0) {
          str += "<li class='on'>" + (i + 1) + "</li>";
        } 
        else {
          str += "<li>" + (i + 1) + "</li>";
        }
      }
      $box2.innerHTML = str;

      var current = 0;

      var timer;
      timer = setInterval(go, 1000);
      function go() {
        for (var j = 0; j < $length; j++) {
          $box1[j].style.display = "none";
          $box2.children[j].className = "";
        }
        if ($length == current) {
          current = 0;
        }
        $box1[current].style.display = "block";
        $box2.children[current].className = "on";
        current++;
      }

      for (var k = 0; k < $length; k++) {
        $box1[k].onmouseover = function () {
          clearInterval(timer);
        }
        $box1[k].onmouseout = function () {
          timer = setInterval(go, 1000);
        }
      }
      for (var p = 0; p < $box3.children.length; p++) {
        $box3.children[p].onmouseover = function () {
          clearInterval(timer);
        };
        $box3.children[p].onmouseout = function () {
          timer = setInterval(go, 1000);
        }
      }

      for (var u = 0; u < $length; u++) {
        $box2.children[u].index = u;
        $box2.children[u].onmouseover = function () {
          clearInterval(timer);
          for (var j = 0; j < $length; j++) {
            $box1[j].style.display = "none";
            $box2.children[j].className = "";
          }
          this.className = "on";
          $box1[this.index].style.display = "block";
          current = this.index + 1;
        }
        $box2.children[u].onmouseout = function () {
          timer = setInterval(go, 1000);
        }
      }

      $box3.children[0].onclick = function () {
        back();
      }
      $box3.children[1].onclick = function () {
        go();
      }
      function back() {
        for (var j = 0; j < $length; j++) {
          $box1[j].style.display = "none";
          $box2.children[j].className = "";
        }
        if (current == 0) {
          current = $length;
        }
        $box1[current - 1].style.display = "block";
        $box2.children[current - 1].className = "on";
        current--;
      }
    }
  </script>
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

    a {
      width: 100%;
      text-decoration: none;
    }

    #img {
      position: absolute;
      top: 95px;
      left: 53px;
      border-radius: 100%;
    }

    #geren {
      text-align: center;
      font-weight: bolder;
      color: grey;
      position: absolute;
      left: 98px;
      top: 30px;
      font-size: 26px;
    }

    #xinxi {
      text-align: center;
      color: grey;
      position: absolute;
      left: 80px;
      top: 340px;
    }
  </style>
</head>

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
              <li> <a href="2.0.php">Accept users</a></li>
              <li> <a href="2.2.php">Delete users</a></li>
            </ol>
          </li></br>
          <li> <a href="wenzhangguanli.php">&nbsp;&nbsp;News management</a></li>
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

      <div class="box">
        <div class="box-1">
          <ul>
            <li>
              <img src="image2/1.png" alt="这里是第一场图片"></img>
            </li>
            <li>
              <img src="image2/2.png" alt="这里是第二张图片"></img>
            </li>
            <li>
              <img src="image2/3.png" alt="这里是第三张图片"></img>
            </li>
            <li>
              <img src="image2/4.png" alt="这里是第一场图片"></img>
            </li>
            <li>
              <img src="image2/5.png" alt="这里是第一场图片"></img>
            </li>
          </ul>
        </div>
        <div class="box-2">
          <ul>
          </ul>
        </div>
        <div class="box-3">
          <span class="prev">
            < </span> <span class="next"> >
          </span>
        </div>
      </div>
    </div>
    <div id="footer">@The copyright of this page belongs to Li Heyin.</div>
  </div>
</body>

</html>