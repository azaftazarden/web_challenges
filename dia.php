<!DOCTYPE html>
<html lang="pt">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<?php 
$d="sexta";
$fdia=$_POST["fdia"];
if ($d===$fdia): ?>
Hoje é sexta! YAAAAAAAAAAAAAAAAAAY!<br>
<object width="425" height="350" data="http://www.youtube.com/v/kfVsfOSbJY0" type="application/x-shockwave-flash"><param name="src" value="http://www.youtube.com/v/kfVsfOSbJY0" /></object>
<object width="425" height="350" data="http://www.youtube.com/v/mGgMZpGYiy8" type="application/x-shockwave-flash"><param name="src" value="http://www.youtube.com/v/mGgMZpGYiy8" /></object>
<object width="425" height="350" data="http://www.youtube.com/v/KlyXNRrsk4A" type="application/x-shockwave-flash"><param name="src" value="http://www.youtube.com/v/KlyXNRrsk4A" /></object>
<object width="425" height="350" data="http://www.youtube.com/v/--0zjb5SZck" type="application/x-shockwave-flash"><param name="src" value="http://www.youtube.com/v/--0zjb5SZck" /></object><br>
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
