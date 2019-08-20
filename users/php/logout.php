<?php
	session_start();
	unset($_SESSION["user"]);
	unset($_SESSION["logInCheck"]);
	unset($_SESSION["passwordSuccess"]);
	unset($_SESSION["amount"]);
	header('Location:signup.php');
?>