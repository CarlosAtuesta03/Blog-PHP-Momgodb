<?php
require 'vendor/autoload.php';

$connection = new MongoDB\Client;
// Connecting specifying host and port
// $connection = new MongoDB\Client('mongodb://localhost:27017');
$database = $connection->carlosb;
$collection1 = $database->persona;
$collection2 = $database->mensaje;
$collection3 = $database->publicacion;
// $collection = $connection->ggvdTest->actor;

//$document1 = array( 'Nombre' => 'Carlos', 'Apellido' => 'Atuesta', 'Cedula' => '1234', 'Correo' => 'carlos@hotmail.com');
//$collection1->insertOne($document1);

//$document2 = array( 'Nombre' => 'Carlos', 'Cedula' => '1234','Mensaje' => 'Hola mundo' );
//$collection2->insertOne($document2);

//$document3 = array( 'Nombre' => 'Carlos','Mensaje' => 'Hola' );
//$collection3->insertOne($document3);


?>


