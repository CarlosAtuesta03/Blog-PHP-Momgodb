<?php
	
	include("conexionmongo.php");

	if(isset($_POST['guardar2'])){
                $nombre = $_POST['Nombre'];
		$apellido = $_POST['Apellido'];
                $cedula = $_POST['Cedula'];
                $correo = $_POST['Correo'];
	 
            // $document = array( 'Nombre' => $nombre, 'Apellido' => $apellido, 'Correo' => $correo, 'Mensaje' => $mesaje);
             //$collection->insertOne($document);
                
		//$query = "insert into amigos(cedula,nombre,apellido) values ('$cedula','$nombre','$apellido')";
		//$rta=mysqli_query($con, $query);
		//if(!$rta){
		//	die("ERROR");
		//}
               $Cedula = $collection1->findOne([ 'Cedula' => $cedula]);

             
             if($Cedula) {
		        	//$_SESSION['Cedula'] = $cedula;
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
                                     echo '<h>El usuario ya se encuentra registrado</h>';
		          } 
            else {
		     $document1 = array( 'Nombre' => $nombre, 'Apellido' => $apellido, 'Cedula' => $cedula, 'Correo' => $correo);	
                     $collection1->insertOne($document1);
            if($document1){
                           header("Location: registro.php");
                          
            }
            
            }


		//header("Location: index.php");
	}
	
 ?>	