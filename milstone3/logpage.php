
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
$username =$_POST['username'];
$password=$_POST['password'];



if ($username&&$password){
$connnection=mysqli_connect("localhost","PandemicSpark25","AARONBOSS+++","login");
$query=mysqli_query($connnection,"SELECT * FROM nusers WHERE username='$username'");
$rows=mysqli_num_rows($query);
}

//thing to check for valid username and password
if($rows!=0){
while ($numrow=mysqli_fetch_assoc($query))    {

$datanames=$numrow['username'];
$datapasswords=$numrow['password'];
}

if ($username==$datanames&&$password==$datapasswords){
echo "Welcome $username, <a href='loginpage.php'>click</a> here to enter webpage";
//session part
$_SESSION["username"]=$datanames;
}
else 
echo "ERROR 099-JIKH: Incorrect password";
}
else
die("ERROR 00-00jh9i: Username not found in database");

?>
