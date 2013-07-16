<!DOCTYPE html>
<html lang="pt">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php 
$d="sexta";
$fdia=$_POST["fdia"];
if ($d===$fdia): ?>
<title>FRIDAY FRIDAY FUN FUN FUN FUN</title>
<?php else: ?>
<title>Dia da semana</title>
<?php endif;?>
</head>

<body>
<?php 
if ($d===$fdia): ?>
Hoje é sexta! YAAAAAAAAAAAAAAAAAAY!<br>
<iframe title="YouTube video player" width="425" height="350" src="http://www.youtube.com/embed/kfVsfOSbJY0?autoplay=1" frameborder="0" allowfullscreen></iframe>
<iframe title="YouTube video player" width="425" height="350" src="http://www.youtube.com/embed/mGgMZpGYiy8?autoplay=1" frameborder="0" allowfullscreen></iframe>
<iframe title="YouTube video player" width="425" height="350" src="http://www.youtube.com/embed/KlyXNRrsk4A?autoplay=1" frameborder="0" allowfullscreen></iframe>
<iframe title="YouTube video player" width="425" height="350" src="http://www.youtube.com/embed/--0zjb5SZck?autoplay=1" frameborder="0" allowfullscreen></iframe><br>
<font color="red">
<?php
for ($i = 1; $i <=500; $i++) {
echo "FUN ";
}?>
</font>
<?php else:
echo "Hoje é $fdia!";
endif;?>
</body>
</html> 
