<?php

	//Llamada al modelo
	require_once("models/personas_model.php");
	
	//Creamos un objeto de la clase personas_model
	$persona = new personas_model();
	//Mediante el objeto invocamos al metodo getPersonas y guardamos
	//el resultado dentro de $datos
	$datos = $persona->getPersonas();
	 
	//Llamada a la vista
	require_once("views/personas_view.php");
	
?>

