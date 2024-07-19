<div class="main-container">

    <form class="box login" action="" method="POST" autocomplete="off" style="width: 800px; ">
    	<p class="has-text-centered">
            <i class="fas fa-home fa-5x"></i>
        </p>
		<br>
		<h5 class="title is-5 has-text-centered" style= "color: white">BODEGA LOS MELLIZOS</h5>

		<?php
			if(isset($_POST['login_usuario']) && isset($_POST['login_clave'])){
				$insLogin->iniciarSesionControlador();
			}
		?>

		<div class="field">
			<label class="label" style= "color: white"><i class="fas fa-user" style= "color: white"></i> &nbsp; Usuario</label>
			<div class="control">
			    <input class="input" type="text" name="login_usuario" pattern="[a-zA-Z0-9]{4,20}" maxlength="20" required >
			</div>
		</div>

		<div class="field">
		  	<label class="label" style= "color: white"><i class="fas fa-key" style= "color: white"></i> &nbsp; Contraseña</label>
		  	<div class="control">
		    	<input class="input" type="password" name="login_clave" pattern="[a-zA-Z0-9$@.-]{7,100}" maxlength="100" required >
		  	</div>
		</div>

		<p class="has-text-centered mb-4 mt-3">
			<button type="submit" class="button  is-rounded">INICIAR SESIÓN</button>
		</p>

	</form>
</div> 

<style>
    .main-container {
        background: linear-gradient(235deg, #2222, #088395); /* Nuevo fondo degradado */
        background-image: url('http://localhost/VENTAS/app/views/img/666.jpg');
    }
    
    

    .box.login {
            background-color: rgba(255, 255, 0.0, 0.0); /* Fondo semi-transparente para el formulario */
            padding: 20px;
            border-radius: 4px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.9); /* Sombra más definida */
            width: 100%; /* Ancho completo del contenedor */
            box-sizing: border-box;
            color: white;
        }
    .button {
            padding: 12px 24px;
            background-color: #191717; /* Color inicial del botón */
            color: #ffffff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        .button:hover {
            background-color: #053B50; /* Cambio de color al pasar el ratón */
            color: #ffffff;
        }
</style>