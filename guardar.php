<?php
	
	include("conexionmongo.php");

	if(isset($_POST['guardar'])){
                $nombre = $_POST['Nombre'];
                $cedula = $_POST['Cedula'];
		$mesaje = $_POST['Mensaje'];
	 
                 

               $Cedula = $collection1->findOne([ 'Cedula' => $cedula]);
              // $document1 = array( 'Nombre' => $nombre, 'Apellido' => $apellido, 'Cedula' => $cedula, 'Correo' => $correo);	
                                

             
             if($Cedula) {
		        	//$_SESSION['Cedula'] = $cedula;
                                //$document1 = array( 'Nombre' => $nombre, 'Apellido' => $apellido, 'Cedula' => $cedula, 'Correo' => $correo);	
                                $document2 = array( 'Nombre' => $nombre, 'Cedula' => $cedula,'Mensaje' => $mesaje );	
                                $collection2->insertOne($document2);
                                header("Location: contactos.php");
		          } 
            
             else{               
                  ?> <style>
         h{
             text-align: center;
             font-family: 'Montserrat', sans-serif;
             font-size: 50px;
             color: white;
         }

       </style><?php
                                       ?><br><?php
                                       ?><br><?php
                                       ?><br><?php
                                       ?><br><?php
                                       ?><br><?php
                                       ?><br><?php
                                     echo '<h>El usuario, No está registrado</h>';
                 
             }            
                 


		
	}
	
 ?>