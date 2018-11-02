<html>

<body>

<form action="new.php" method="get">
Username: <input type="text" name= "username">
<br>
Password: <input type="number" name="password">
<input type="SUBMIT">
</form>
<br>
Welcome:<?php echo $_GET["username"];?>
        
<br>
Your password is:<?php echo $_GET["password"]?>
</body>
</html>

