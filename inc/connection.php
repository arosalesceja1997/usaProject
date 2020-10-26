<?php
	// error_reporting(0);
	// $usuario = "root";
	// $contraseña = 1234;
	// // var_dump($contraseña);
	// // $db = new PDO('mysql:host=localhost;dbname=lufantasie', $usuario, $contraseña);
	// // $db = mysqli_connect('localhost', $usuario, $contraseña);
	// // mysqli_select_db('DATABASENAME', $db)
	// // $db->query("SET NAMES 'utf8'");
	// // $db->query("SET CHARACTER SET utf8");
	// try {
	// 	$mbd = new PDO('mysql:host=localhost;dbname=lufantasie', $usuario, $contraseña);
	// 	// foreach($mbd->query('SELECT * from FOO') as $fila) {
	// 	// 	print_r($fila);
	// 	// }
	// 	$mbd = null;
	// } catch (PDOException $e) {
	// 	print "¡Error!: " . $e->getMessage() . "<br/>";
	// 	die();
	// }
	// error_reporting(0);
	$usuario = "root";
	$contraseña = 1234;
	// var_dump($contraseña);
	// $db = new PDO('mysql:host=localhost;dbname=lufantasie', $usuario, $contraseña);
	try {
		$db = new PDO('mysql:host=localhost;dbname=lufantasie', $usuario, $contraseña);
		$db->query("SET NAMES 'utf8'");
		$db->query("SET CHARACTER SET utf8");
		// print "¡Error!: " . $db . "<br/>";
		// $mbd = null;
	} catch (PDOException $e) {
		print "¡Error!: " . $e->getMessage() . "<br/>";
		die();
	}
?>