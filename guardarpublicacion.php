<?php
	
	include("conexionmongo.php");

	if(isset($_POST['guardarpublicacion.php'])){
              
		$mesaje = $_POST['Mensaje'];
	 
              
                //$document1 = array( 'Nombre' => $nombre, 'Apellido' => $apellido, 'Cedula' => $cedula, 'Correo' => $correo);	
                $document3 = array( 'Mensaje' => $mesaje );	
                $collection3->insertOne($document3);
                               
	

		
	}
	 header("Location: index.php");
 ?>