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
    }
  </script>
  <style>
    ::-webkit-scrollbar {
      display: none;
    }

    #all {
      width: 100%;
      height: 100%;
      background-image: url('image2/2.png');
      background-size: 100% 100%;
      overflow: hidden;
      color: dimgrey;
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

    a {
      width: 100%;
      text-decoration: none;
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
      position: absolute;
      left: 1000px;
      padding: 30px;
      top: 10px;
      text-align: center;
      font-size: 20px;
      margin: -10px;
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
      height:43px;
  
    }

    #a1 {
      color: grey;
      font-size: 16px;
    }



    #h123 {
      position: absolute;
      left: 770px;
      top: 17px;
    }



    #img2 {
      position: relative;
      top: 26px;
      left: 90px;
    }



    #ti {
      text-align: center;
    }

    #zhengwen {
      margin: 20px;
    }

    #hh {
      font-weight: bolder;
      font-family: "himalaya-g";
      font-size: 25px;
      margin: 28px;
      position: absolute;
      left: 750px;
      top: -25px;
    }

    a:hover {
      color: #ba55b3;
    }

    #a1:hover {
      color: #ba55b3;
    }

    #r1wen {
      font-weight: bolder;
      font-family: "1.BMing_test003";
      font-size: 40px;
      margin: 13px;
      position: absolute;
      left: 370px;
      top: 10px;
      color: #9370d8;
    }

    #box {
      width: 380px;

      font-family: 'Microsoft YaHei';
      font-size: 14px;
    }

    input {
      width: 195px;
      border: 2px solid #e2e2e2;
      height: 35px;
    
      background-image: url('image/20.png');
      background-repeat: no-repeat;
      background-size: 25px;
      background-position: 5px center;
      position: absolute;
      left: 1035px;
      top: 35px;
      border-radius: 10px;
    }

    #search {
      width: 70px;
      height: 35px;
      float: right;
      border-radius: 10px;
      background: grey;
      color: white;
      position: absolute;
      left: 1230px;
      top: 35px;
      text-align: center;
      line-height: 32px;
      cursor: pointer;
    }

    #new {
      position: absolute;
      width: 300px;
      top: 120px;
      left: 1035px;
      text-align: left;
    }

    #back {
      background-color: #9370d8;
      background-image: none;
      position: absolute;
      left: 343px;
      top: 505px;
      width: 70px;
      height: 30px;
      color: white;
    }

    #a1 {
      color: dimgrey;
      font-size: 18px;
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

    #ma {
      position: absolute;
      left: 400px;
      padding: 30px;
      top: 480px;
    }
    @font-face {
      font-family: "1.BMing_test003";
      src: url("font/1.BMing_test003.ttf");
      font-family: "himalaya-g";
      src: url("font/himalaya-g.ttf");
    }
  </style>


  </style>
</head>

<body>
  <div id="all">
    <div id="top">
      <div id="top2">
        <div id="top3">Student</div>
      </div>
    </div>

    <div id="left">
      <div id="left2">
        <div id="geren">
          Self Info</br></div>
        <img id='img' src="image2/2.jpg" width="200px" height="200px" />
        <div id='xinxi'>
          <?php
$name=$_COOKIE["user"]["xm"];
echo $name;
echo "</br>";
$conn=mysql_connect("localhost","root","wlf611510");
mysql_select_db("class",$conn);
$result=mysql_query("Select * from student where name='".$name."'",$conn);
$info=mysql_fetch_assoc($result);
echo $info['email'];
echo "</br>";
echo $info['tel'];
echo "</div>";
?>

        </div>
      </div>


      <div id="right">
        <div id="right2">
          <div id="rightone">
            <div id='r1wen'>Menu</div>
            <div id="hh">
              <a href='exit.php'><input type="button" id="back" value="Exit">
              </a></div>
          </div>
          <div id="rightthree">
            <?php
    $author=$_POST['search'];
     $conn=mysql_connect("localhost","root","wlf611510");
     mysql_select_db("class",$conn);
     $result=mysql_query("SELECT * FROM title ",$conn);
     $totalnum=mysql_num_rows($result);
     $pagesize=8;
 


    
  
  echo "<table border='0' id='tab'rules='none'><tr class='head'><th width='630px'>Title</th><th width='260px'>Author</th></tr>";

if($author!=""){
  }
  else{
    echo "<script>location.href = '1.1.php ';</script>";
  } $author=strtolower($author);
  $result=mysql_query("SELECT * FROM title ",$conn);
  $datanum=mysql_num_rows($result);  
  $totalnum=0;
  while( $info=mysql_fetch_assoc($result)){   $title=strtolower($info['title']);
    $title=str_replace(" ","",$title);
   
  if(strpos($title,$author)!==false ){
    $totalnum=$totalnum+1;
   echo "<tr><td ><a href=2.31.php?id=".$info['id'].">".$info['title']."</a></td>";
   echo "<td>".$info['name']."</td>
   </tr>";}
 
  }
   

  $page=isset($_GET["page"])?$_GET["page"]:1;

  $begin=($page-1) * $pagesize;
  $totalpage=ceil($totalnum/$pagesize);
  echo "</table>"; 
  if($totalnum==0){
    echo "<script>alert('Does not exist!');location.href = '1.1.php ';</script>";
  }
  echo "<div id='ma'>";
  for($j=1;$j<=$totalpage;$j++){
    echo "<a href=?page=".$j.">[".$j."]</a>";
  }
  echo "</div>";
  ?></div>
          <div idert="rightfour">
            <form action="1.11.php" method='post'>
              <input type="text" name="search" placeholder="            author" />
              <input type='submit' id="search" value="Search" /> </form>
            <div id='new'> <h3>The Latest Articals</h3>
              <?php
     $conn=mysql_connect("localhost","root","wlf611510");
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
        </div>
      </div>
      <div id="footer">@The copyright of this page belongs to Li Heyin and Wu Luofei.</div>
    </div>
</body>

</html>