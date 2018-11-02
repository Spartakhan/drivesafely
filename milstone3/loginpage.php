<html>
<style type="text/css">

body{
    background-image:url(russia.png);
    <img src="images/ggg.jpg">
    background-color:blue;
    color:black;
}
</style>
</html>



<?php
session_start();
if ($_SESSION ["username"]){
echo "welcome to your session page <br><a href='logoutpage.php'>logout</a> ";
}
else
die ("session expired, please login")
?>