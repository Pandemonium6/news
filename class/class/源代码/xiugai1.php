<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <title>登录 </title>
    <style type="text/css">
        body {
            font-family: "Microsoft Yahei"
        }

        label,input {
            display: block;
            width: 300px;
        }

        input#submit {
            border: none;
            background-color: #2F79BA;
            color: #fff;
            border-radius: 5px;
            padding: 10px 20px;
            margin-top: 10px;
            cursor: pointer;
            align-self: center;
            font-weight: bolder;
            font-size: 18px;
        }

        option {
            display: block;
            width: 316px;
            border: 1px solid #888;
            padding: 7px;
            color: darkgray;
        }

        select {
            display: block;
            width: 316px;
            border: 1px solid #888;
            padding: 7px;
            margin-top: 5px;
        }

        input#button {
            border: none;
            background-color: #2F79BA;
            color: #fff;
            border-radius: 5px;
            padding: 10px 20px;
            margin-top: 10px;
            cursor: pointer;
            align-self: right;
            font-weight: bolder;
            font-size: 18px;
        }

        a {
            width: 300px;
            align-self: center;
            text-decoration: none;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        div {
            margin: 5px auto;
            display: flex;
            flex-flow: inherit;
            width: 300px;
        }

        input {
            border: 1px solid #888;
            padding: 7px;
            margin-top: 5px;
        }
    </style>
    <style type="text/css">
        .all {
            width: 100%;
            height: 900px;
            background-image: url('image/3.png');
            background-size: 100% 900px;
            overflow: hidden;
            color: dimgrey;
        }

        .yemian {
            width: 100%;
            height: 400px;
            background: hsla(0, 0%, 100%, .4);
            color: gray;
            overflow: hidden;
            position: relative;
            left: 700px;
            top: 180px;
        }

        @font-face {
            font-family: "himalaya-g";
            src: url("font/himalaya-g.ttf");
        }

        .title {
            font-family: "himalaya-g";
            font-weight: bolder;
            width: 150%;
            height: 100px;
            position: relative;
            left: 600px;
            top: 150px;
            text-align: center;
            font-size: x-large;
        }

        p {
            margin: 0px;
        }
    </style>
</head>

<body>
    <div class="all">
        <form action="xiugai.php" method="post" id="form">
            <div class="title">
                <h1>Change Passcode</h1>
            </div>
            <div class="yemian">
                <div></br>
                    <label for="name"><b>old password</b></label>
                    <input type="password" id="password" name="old" onblur="check()" />
                    <p id='password_p'>old password</p>

                </div>
                <div>
                    <label for="password"><b> new password</b></label>
                    <input type="password" name="new" id="password1" />
                    <p id="password1_p">new password</p>
                </div>

                <div>
                    <label for="password_confirm"><b>password confirm</b></label>
                    <input type="password" id="password_confirm" />
                    <p id="password_confirm_p">repeat new password </p>
                </div>
                <div><input type="submit" id="submit" value="submit" /></div>
            </div>
    </div>
    </form>

    <script type="text/javascript">
        var password_info = document.getElementById('password');
        var password_p = document.getElementById('password_p')
        check = function () {
    <?php
    echo "var tru='".$_COOKIE["user"]["pass"]."';";
    ?>
    var i = password_info.value;
            if (password_info.value != tru) {
                password_p.innerHTML = "wrong password";
                password_p.style.color = "#b22222";
                password_info.style.border = "1.5px solid #b22222";
                return false;
            }
            else {
                password_p.innerHTML = "right!";
                password_p.style.color = "#008080";
                password_info.style.border = "1.5px solid #008080";
                return true;
            }
        }
        var password1_info = document.getElementById('password1');
        var password_confirm_info = document.getElementById('password_confirm');
        var password1_p = document.getElementById('password1_p');
        var password_confirm_p = document.getElementById('password_confirm_p');
        var validatePassword = function () {
            if (password_info.value != "") {
                password1_p.innerHTML = "valid password!";
                password1_p.style.color = "#008080";
                password1_info.style.border = "1.5px solid #008080"
                return true;
            } else {
                password1_p.innerHTML = "new password";
                password1_p.style.color = "#BBBBBB";
                password1_info.style.border = "1px solid #888";
                return false;
            }
        }
        var validateConPassword = function () {
            if (password_confirm_info.value != "") {
                if (password1_info.value === password_confirm_info.value) {
                    password_confirm_p.innerHTML = "same password";
                    password_confirm_p.style.color = "#008080";
                    password_confirm_info.style.border = "1.5px solid #008080";
                    return true;
                } else {
                    password_confirm_p.innerHTML = "error repeat";
                    password_confirm_p.style.color = "#b22222";
                    password_confirm_info.style.border = "1.5px solid #b22222";
                    return false;
                }
            } else {
                password_confirm_p.innerHTML = "repeat new password ";
                password_confirm_p.style.color = "#bbb";
                password_confirm_info.style.border = "1px solid #888";
                return false;
            }
        }
        for (var i = 0, j = document.getElementsByTagName("input"); i < j.length; i++) {
            j[i].onblur = function () {//表单失去焦点时，显示验证结果
                check();
                validatePassword();
                validateConPassword();
            }
        }


    </script>
</body>

</html>