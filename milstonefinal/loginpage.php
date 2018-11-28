<html>
<style type="text/css">

body{
    background-image:url(russia.png);
    <img src="images/ggg.jpg">
    background-color:blue;
    color:black;

    
}
</style>
<?php
session_start();
if ($_SESSION ["username"]){
echo "welcome to your session page <br><a href='logoutpage.php'>logout</a> ";
}
else
die ("session expired, please login")
?>
<body>

<form action="nsearch" method="get">
<label>
Search
<input type="text" name="keywords" autocomplete="off">

</label>    

<input type="submit" value="search">
</form>
</body>
</html>





