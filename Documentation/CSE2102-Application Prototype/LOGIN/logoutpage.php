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

session_destroy();
echo "session expired <a href='MainPage.php'>Click </a>to return to login page";
?>