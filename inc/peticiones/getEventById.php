<?php
	$usuario = "root";
	$contraseña = 1234;
	// var_dump($contraseña);
	// $db = new PDO('mysql:host=localhost;dbname=lufantasie', $usuario, $contraseña);
	try {
		$db = new PDO('mysql:host=localhost;dbname=lufantasie', $usuario, $contraseña);
		$db->query("SET NAMES 'utf8'");
		$db->query("SET CHARACTER SET utf8");

    try {
      //code...
      $id = $_POST['data'];
      // echo json_encode($id . "Hola");
      $data = $db->prepare("SELECT * FROM eventos WHERE id=?");
      $data->execute([$id]);
      $data = $data->fetch();
      // $data = $data->fetchAll(\PDO::FETCH_OBJ);
      // var_dump($data);
      echo json_encode($data); 
    } catch (\Throwable $th) {
      //throw $th
		  echo json_encode("¡Error!: " . $th->getMessage());
    }
	} catch (PDOException $e) {
		echo "¡Error!: " . $e->getMessage();
		die();
	}
?>