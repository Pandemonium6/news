<?php
setcookie('user[xm]',''); 
setcookie('user[pass]','');
var_dump($_COOKIE); 
echo "<script>alert('Exit!');location.href='01.html ';</script>"
?>