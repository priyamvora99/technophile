<!DOCTYPE html>
<html>
<head>
	<title></title>

</head>
<body>
<?php
	session_start();
	$_SESSION["var"]=1;
	echo $_SESSION["var"];
?>
<script type="text/javascript">
	var name= "<?php echo $_SESSION["var"] ?>";
	document.write(name);
</script>
</body>
</html>
