<?php
echo'
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>SITE</title>
</head>
<body>
<form method="post" action="../../index.php/connection/connect">
	Login : <input type="text" name="login"><br>
	Pass : <input type="password" name="password"><br>
	<input type="submit" value="Se connecter">
</form>


<form method="post" action="../../index.php/connection/inscription">
    Login : <input type="text" name="login"><br/>
    Password : <input type="password" name="password1"><br/>
    Confirm Password : <input type="password" name="password2"><br/>
    <input type="submit" value="S\'inscrire">
</form>

</body>
</html>';
