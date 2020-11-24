<?php
	$usuario = "root";
	$contraseña = 1234;

	try {
		$db = new PDO('mysql:host=localhost;dbname=lufantasie', $usuario, $contraseña);
		$db->query("SET NAMES 'utf8'");
		$db->query("SET CHARACTER SET utf8");
	} catch (PDOException $e) {
		print "¡Error!: " . $e->getMessage() . "<br/>";
		die();
	}
?>