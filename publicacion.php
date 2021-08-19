<?php
	
	include("conexionmongo.php");

	if(isset($_POST['publicacion'])){
                $cedula = $_POST['Cedula'];
                $nombre = $_POST['Nombre'];
		$mesaje = $_POST['Mensaje'];
	 

               $Cedula = $collection1->findOne([ 'Cedula' => $cedula]);
              // $document1 = array( 'Nombre' => $nombre, 'Apellido' => $apellido, 'Cedula' => $cedula, 'Correo' => $correo);	
                                

             
             if($Cedula) {
		        	$_SESSION['Cedula'] = $cedula;
                                //$document1 = array( 'Nombre' => $nombre, 'Apellido' => $apellido, 'Cedula' => $cedula, 'Correo' => $correo);	
                                $document3 = array('Nombre'=>$nombre, 'Mensaje' => $mesaje );	
                                $collection3->insertOne($document3);
                                header("Location: index.php");
		          } 
            
             else{               
                 header("Location: index.php");
                 
             }            
                 


		
	}
	
 ?>