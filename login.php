<!DOCTYPE html>
<html>
<head>
<title>Form</title>
<style>
form{padding-top:120px;
text-align:center;
font-size:30px;
}
input{width:250px;
height:40px;
font-size:30px;
}
</style>
</head>
<body>
<form method="post" action="connectio1.php">
Username:<input type="text" name="Username"><br>
<br>
Password:<input type="password" name="password"><br><br>
<input type="submit" value="submit">
<br><br>
<input type="button" value="Sign Up" onclick="window.location='sign.php'" class="btn btn-danger"/>
</form>
</body>
</html>