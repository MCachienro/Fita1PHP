<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php 
	$quantitat = $_POST['quantitat'];
	for ($i = 1; $i <= $quantitat; $i++){
		echo "<a href ='ex22pagina3.php?id=$i'>comanda ".$i."</a><br>\n";
	}


?>

</body>
</html>