<?php include ("conexionmongo.php") ?>
<body background="fondo.jpg">
<style>
         h2{
             text-align: center;
             font-family: 'Montserrat', sans-serif;
             font-size: 40px;
             color: white;
           }
</style>
         <h2>Blog Carlos</h2>
        <style>
                .carlos{
                         float: left;
                         padding-left: 1rem;
                       }
        </style>
    <div class="container p-4">
	
	<div class="row">
		
		<div class="col-md-4 mx-auto">
			<?php  if(isset($_SESSION['message'])){ ?>
				
				<div class="alert alert-<?= $_SESSION['message_type']; ?> alert-dismissible fade show" role="alert">
  				<?= $_SESSION['message'] ?>
  				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    			<span aria-hidden="true">&times;</span>
  				</button>
				</div>

			<?php session_unset(); } ?>
                    
                              
                       
                     </body>
 
			<div class="card card-body">
                            <div class="carlos">
                                <form action="index.php">
                                  <input type="submit" class ="btn btn-primary btn-block" name="mostrar" value="Inicio">
			        </form>
                             </div>  
                            <div class="carlos">
                               <form action="perfil.php">
                                 <input type="submit" class ="btn btn-primary btn-block" name="mostrar" value="Sobre mí">
			       </form>
                                   </div>
                               <div class="carlos">
                                <form action="contactos.php">
                                   <input type="submit" class ="btn btn-primary btn-block" name="mostrar" value="Contacto">
			         </form>  
                               </div>
                               <br>
                               <br>
                               <br>
                               <div>
                                   <form action="publicacion.php" method="POST">
                                    
                                       <fieldset>
                                          <textarea name="Mensaje" rows="4" cols="50" placeholder="Mensaje" autofocus></textarea><br>
                                          <input type="text"id=cedula name="Nombre" class="form-control"
						placeholder="Nombre" autofocus><br>
                                          <input type="text" id=nombre name="Cedula" class="form-control"
						placeholder="Cedula" autofocus>
                                          <br>                                          
						
                                   
                                          <input type="submit" class ="btn btn-success btn-block" name="publicacion" value="Publicar" >
                                        </fieldset>
					
				    </form>
                             
                                   
                               </div>
         
			</div>
		</div>
	</div>
</div>
 </body>
 <html>
   <body>
       <style>
         h{
             font-family: 'Montserrat', sans-serif;
             font-size: 15px;
             color: white;
           }
           h3{
             font-family: 'Montserrat', sans-serif;
             font-size: 12px;
             color: white;
           }

       </style>
       <div>
           <?php
             $c1=$collection3 = $database->publicacion->find(array());
                  foreach ( $c1 as $value) 
                      { 
                             echo '<h> -</h>'; echo '<h>'. $value['Nombre'] .'</h>'; echo '<h>:</h>';
                             echo '  '; echo '<h>'. $value['Mensaje'] .'</h>';
                             echo '<h3>___________________________________________________________________________________________________________________________________________________________________________________________________________</h3>';
               
                            
                      }                    
           ?>
    </body>
</html>