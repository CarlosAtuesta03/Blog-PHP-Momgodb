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
                               <h3>Contacto </h3>
                               <div>
                            <form action="guardar.php" method="POST">
                                    
					<div class="form-group">
						<input type="text"id=cedula name="Nombre" class="form-control"
						placeholder="Nombre" autofocus>
                                        </div><br>
                                       
                                        <div class="form-group">
						<input type="text" id=nombre name="Cedula" class="form-control"
						placeholder="Cedula" autofocus>
					</div><br>
                                        
                                
                                        <div class="form-group">
						<textarea name="Mensaje" rows="4" cols="40" placeholder="Mensaje" autofocus></textarea>
					</div><br>
                                   
					<input type="submit" class ="btn btn-success btn-block" name="guardar" onclick="return validar()" value="Enviar" >
    
				     </form>
                                   
                                   <script>
					var Nombre= document.getElementById('Nombre');

					function validar(){
						var mensajeerror=[];
						if(Nombre.value === null || Nombre.value === '')
						{
							mensajeerror.push('INGRESE UN NOMBRE');
						}

						if(mensajeerror.length != 0)
						{
							mensajeerror.join(', ');
							alert(mensajeerror);
							return false;
						}
						return true;
					}
				</script>
                              </div>
                            <br>
                            <br>
                       
                            <form action="registro.php">
                                  <input type="submit" class ="btn btn-primary btn-block" name="mostrar" value="Registrarse">
			    </form><br>
  <style>
         h3{
             font-family: 'Montserrat', sans-serif;
             font-size: 20px;
             color: white;
           }
</style>
         <h3>En este espacio podrás enviarme preguntas relacionadas con mi blog, y con mucho gusto te responderé :)</h3>
         <h3>Nota: Solo las personas registradas pueden enviar mensajes :)</h3>

			</div>
		</div>
	</div>
</div>
</body>