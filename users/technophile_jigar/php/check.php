<?php
	session_start();
	$a= array();
	$_SESSION["check"]=$a;
	$_SESSION["check"][]=1;
	$_SESSION["check"][]=13;
	$_SESSION["check"][]=242;



	
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<p>dw</p>
</body>
<?php
echo count($_SESSION["check"]);
var_dump($_SESSION["check"]);
?>
</html>