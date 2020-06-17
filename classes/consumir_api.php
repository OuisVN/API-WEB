<?php
	header('Content_type: application/json');
	header("Access-Control-Allow-Origin: *");
	
	require_once('config.php');
	
	if($_GET['metodo'] == NULL){
		$metodo = $_SERVER['REQUEST_METHOD']; // SI SE VA A UTILIZAR DESDE POSTMAN
	}else{
		$metodo = $_GET['metodo']; // SI SE VA A UTILIZAR DESDE EL APLICATIVO
	}
	
	switch($metodo){
		case 'GET':
			$id = $_GET['id'];

			if($id == 'lista'){
				$consulta = mysqli_query($conexion, "SELECT * FROM productos");
				$datos    = mysqli_fetch_all($consulta, MYSQLI_ASSOC);
			}else{
				$consulta = mysqli_query($conexion, "SELECT * FROM productos WHERE codigo = '".$id."'");
				$datos    = mysqli_fetch_array($consulta);
			}

			exit(json_encode($datos));
			break;
		
		case 'POST':
			$imagen = $_POST['imagen'];
			$nombre = $_POST['nombre'];
			
			if($imagen == NULL || $nombre == NULL){
				$data['validacion'] = 'error';
				$data['mensaje']    = 'Hacen falta datos por ingresar.';
			}else{
				$consulta = mysqli_query($conexion, "INSERT INTO productos(imagen, nombre) VALUES('".$imagen."', '".$nombre."')");
				if(!$consulta){
					$data['validacion'] = 'error';
					$data['mensaje']    = 'Hubo un error al momento de insertar el registro.';
				}else{
					$data['validacion'] = 'exito';
					$data['mensaje']    = 'El registro ha sido insertado con exito.';
				}
			}

			exit(json_encode($data));
			break;

		case 'PUT':
			$id     = $_REQUEST['modificar_id'];
			$imagen = $_REQUEST['modificar_imagen'];
			$nombre = $_REQUEST['modificar_nombre'];
			
			if($id == NULL || $imagen == NULL || $nombre == NULL){
				$data['validacion'] = 'error';
				$data['mensaje']    = 'Hacen falta datos por ingresar.';
			}else{
				$consulta = mysqli_query($conexion, "UPDATE productos SET imagen = '".$imagen."', nombre = '".$nombre."' WHERE codigo = '".$id."'");
				if(!$consulta){
					$data['validacion'] = 'error';
					$data['mensaje']    = 'Hubo un error al momento de modificar el registro.';
				}else{
					$data['validacion'] = 'exito';
					$data['mensaje']    = 'El registro ha sido modificado con exito.';
				}
			}

			exit(json_encode($data));
			break;

		case 'DELETE':
			$id = $_GET['eliminar_id'];
			
			$consulta = mysqli_query($conexion, "DELETE FROM productos WHERE codigo = '".$id."'");
			if(!$consulta){
				$data['validacion'] = 'error';
				$data['mensaje']    = 'Hubo un error al momento de eliminar el registro.';
			}else{
				$data['validacion'] = 'exito';
				$data['mensaje']    = 'El registro ha sido eliminado con exito.';
			}

			exit(json_encode($data));
			break;
	}
?>