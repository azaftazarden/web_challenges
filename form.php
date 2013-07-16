<!DOCTYPE html>
<html lang="pt">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Form simples</title>
</head>

<body>

<form action="result.php" method="post">
First name: <input type="text" name="firstname"><br>
Last name: <input type="text" name="lastname"><br>
Balls: <input type="password" name="pwd"><br><br>
<input type="radio" name="gender" value="male">Male<br>
<input type="radio" name="gender" value="female">Female<br><br>
<input type="checkbox" name="likes[]" value="turtles">I like turtles<br>
<input type="checkbox" name="likes[]" value="mudkipz">I liek Mudkipz<br>
<input type="checkbox" name="likes[]" value="trains">I like trains<br>
<input type="checkbox" name="likes[]" value="big butts">I like big butts (and I cannot lie)<br><br>
<input type="submit" value="Submit">
</form>

</body>
</html>

