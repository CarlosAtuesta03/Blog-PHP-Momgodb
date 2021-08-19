<?php
	
	include("conexionmongo.php");

	
            $collection3 = $database->publicacion->remove(array('Nonbre'),array('Mensaje'));
	
            header("Location: index.php");
                
                
	
	

 ?>
     