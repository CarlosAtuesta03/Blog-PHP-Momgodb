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
      <style>
         h3{
             font-family: 'Montserrat', sans-serif;
             font-size: 20px;
             color: white;
           }

</style>
         
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
                 
                               </div>><br>
                               <br>
                               <br>
                               
                               <h3>Registro </h3>
                            <form action="guardar2.php" method="POST">
                                    
					<div class="form-group">
						<input type="text"id=cedula name="Nombre" class="form-control"
						placeholder="Nombre" autofocus>
                                        </div><br>
                                        <div class="form-group">
						<input type="text" id=nombre name="Apellido" class="form-control"
						placeholder="Apellido" autofocus>
					</div><br>
                                        <div class="form-group">
						<input type="text" id=apellido name="Cedula" class="form-control"
						placeholder="Cedula" autofocus>
					</div><br>
                                        <div class="form-group">
						<input type="text" id=apellido name="Correo" class="form-control"
						placeholder="Correo" autofocus>
					</div><br>
                                        
					<input type="submit" class ="btn btn-success btn-block" name="guardar2" value="Registrar" >
                                          
				  
				</form><br>
                            
<style>
         h3{
             font-family: 'Montserrat', sans-serif;
             font-size: 20px;
             color: white;
           }
</style>
<br>
         <h3>Nota: Solo las personas registradas me pueden enviar mensajes :)</h3>
         
				

				
                          			</div>
		</div>
	</div>
</div>
</body>