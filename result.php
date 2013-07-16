<!DOCTYPE html>
<html lang="pt">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Tabelas</title>
</head>

<body>
<h4>Table headers:</h4>
<table border="1">
<tr>
  <th>First Name</th>
  <th>Last Name</th>
  <th>Gender</th>
  <th>Likes</th>
</tr>
<tr>
  <td><?php echo $_POST['firstname'];?></td>
  <td><?php echo $_POST['lastname'];?></td>
  <td><?php echo $_POST['gender'];?></td>
  <td><?php
  	$aLike = $_POST['likes'];
  	if(!empty($aLike))
  	{
  	  $N = count($aLike);

  	  for($i=0; $i < $N; $i++)
  	  {
  	    echo($aLike[$i] . ", ");
  	  }
  	}?></td>
</body>
</html>
