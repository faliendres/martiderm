<?php

if(isset($_POST['quiz'])){
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "db_quiz";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 

	$sql = "INSERT INTO `quiz` (`trabaja_farmacia`, `conocias_martiderm`, `tipos_ampollas`, `afirmaciones_martiderm`, `primer_laboratorio`, `relacion_producto_descripcion`, `canal_comunicacion`, `recomiendas_martiderm`, `fecha_creacion`) VALUES ($_POST["pregunta_1"], $_POST["pregunta_2"], $_POST["pregunta_3"], $_POST["pregunta_4"], $_POST["pregunta_5"], $_POST["pregunta_6"], $_POST["pregunta_7"], $_POST["pregunta_8"], CURRENT_TIMESTAMP);";

	if ($conn->query($sql) === TRUE) {
	    echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}

$conn->close();



}
?>