<?php

  	require_once('conector.php');

  	$datos = array(
      'nombre' => 'Edgar Duvan Lemus Ramos',
      'email' => 'edgar_duvan_l_r@hotmail.com',
      'clave' => password_hash("123456", PASSWORD_DEFAULT),
      'nacimiento' => '1996-03-20');

    $con = new ConectorBD('localhost','root','');
  	$respuesta = $con->iniciarConexion('nextu_Edgar_SQL');

  	if ($respuesta == 'OK') {
    	if($con->insertarRegistro('usuarios', $datos)){
      		$respuesta = "exito en la inserción";
	    }else {
	      	$respuesta = "Hubo un error y los datos no han sido cargados";
	    }
  	}else {
    	$respuesta = "No se pudo conectar a la base de datos";
  	}
    $con->cerrarConexion();
?>
