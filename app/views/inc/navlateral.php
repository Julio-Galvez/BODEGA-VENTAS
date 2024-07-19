<section class="full-width navLateral scroll" id="navLateral">
	<div class="full-width navLateral-body" style="background-color: #088395;">
		<div class="full-width navLateral-body-logo has-text-centered tittles is-uppercase" style="background-color: black;">
    		Bodega Los Mellizos
		</div>

		<figure class="full-width" style="height: 77px;">
			<div class="navLateral-body-cl">
				<?php
                    if(is_file("./app/views/fotos/".$_SESSION['foto'])){
                        echo '<img class="is-rounded img-responsive" src="'.APP_URL.'app/views/fotos/'.$_SESSION['foto'].'">';
                    }else{
                        echo '<img class="is-rounded img-responsive" src="'.APP_URL.'app/views/fotos/default.png">';
                    }
                ?>
			</div>
			<figcaption class="navLateral-body-cr" style="color: white;padding-top: 20px; font-weight: bold;">
				<span>
				<?php echo $_SESSION['nombre'] . ' ' . $_SESSION['apellido']; ?><br>
					<small><?php echo $_SESSION['usuario']; ?></small>
				</span>
			</figcaption>
		</figure>
		<div class="full-width tittles navLateral-body-tittle-menu has-text-centered is-uppercase" >
			<i class="fas fa-th-large fa-fw"></i> &nbsp; <?php echo APP_NAME; ?>
		</div>
		<nav class="full-width">
			<ul class="full-width list-unstyle menu-principal">

				<li class="full-width">
					<a href="<?php echo APP_URL; ?>dashboard/" class="full-width">
						<div class="navLateral-body-cl">
							<i class="fab fa-dashcube fa-fw" style="color: white"></i>
						</div>
						<div class="navLateral-body-cr" style="color: white">
							Inicio
						</div>
					</a>
				</li>
				

				<li class="full-width divider-menu-h"></li>

				<li class="full-width">
					<a href="#" class="full-width btn-subMenu">
						<div class="navLateral-body-cl">
							<i class="fas fa-cash-register fa-fw COLO-LATERAL-TEXTO"></i>
						</div>
						<div class="navLateral-body-cr COLO-LATERAL-TEXTO">
							CAJAS
						</div>
						<span class="fas fa-chevron-down COLO-LATERAL-TEXTO"></span>
					</a>
					<ul class="full-width menu-principal sub-menu-options">
						<li class="full-width">
							<a href="<?php echo APP_URL; ?>cashierNew/" class="full-width">
								<div class="navLateral-body-cl">
									<i class="fas fa-cash-register fa-fw COLO-LATERAL-TEXTO"></i>
								</div>
								<div class="navLateral-body-cr COLO-LATERAL-TEXTO">
									Nueva caja
								</div>
							</a>
						</li>
						<li class="full-width">
							<a href="<?php echo APP_URL; ?>cashierList/" class="full-width">
								<div class="navLateral-body-cl">
									<i class="fas fa-clipboard-list fa-fw COLO-LATERAL-TEXTO"></i>
								</div>
								<div class="navLateral-body-cr COLO-LATERAL-TEXTO">
									Lista de cajas
								</div>
							</a>
						</li>
						<li class="full-width">
							<a href="<?php echo APP_URL; ?>cashierSearch/" class="full-width">
								<div class="navLateral-body-cl">
									<i class="fas fa-search fa-fw COLO-LATERAL-TEXTO"></i>
								</div>
								<div class="navLateral-body-cr COLO-LATERAL-TEXTO">
									Buscar caja
								</div>
							</a>
						</li>
					</ul>
				</li>

				<li class="full-width divider-menu-h"></li>

				<li class="full-width">
					<a href="#" class="full-width btn-subMenu">
						<div class="navLateral-body-cl">
							<i class="fas fa-users fa-fw COLO-LATERAL-TEXTO"></i>
						</div>
						<div class="navLateral-body-cr COLO-LATERAL-TEXTO">
							USUARIOS
						</div>
						<span class="fas fa-chevron-down COLO-LATERAL-TEXTO"></span>
					</a>
					<ul class="full-width menu-principal sub-menu-options">
						<li class="full-width">
							<a href="<?php echo APP_URL; ?>userNew/" class="full-width">
								<div class="navLateral-body-cl">
									<i class="fas fas fa-user-tie fa-fw fa-fw COLO-LATERAL-TEXTO"></i>
								</div>
								<div class="navLateral-body-cr COLO-LATERAL-TEXTO">
									Nuevo usuario
								</div>
							</a>
						</li>
						<li class="full-width">
							<a href="<?php echo APP_URL; ?>userList/" class="full-width">
								<div class="navLateral-body-cl">
									<i class="fas fa-clipboard-list fa-fw COLO-LATERAL-TEXTO"></i>
								</div>
								<div class="navLateral-body-cr COLO-LATERAL-TEXTO">
									Lista de usuarios
								</div>
							</a>
						</li>
						<li class="full-width">
							<a href="<?php echo APP_URL; ?>userSearch/" class="full-width">
								<div class="navLateral-body-cl">
									<i class="fas fa-search fa-fw COLO-LATERAL-TEXTO"></i>
								</div>
								<div class="navLateral-body-cr COLO-LATERAL-TEXTO">
									Buscar usuario
								</div>
							</a>
						</li>
					</ul>
				</li>

				<li class="full-width divider-menu-h"></li>

				<li class="full-width">
					<a href="#" class="full-width btn-subMenu">
						<div class="navLateral-body-cl">
							<i class="fas fa-address-book fa-fw COLO-LATERAL-TEXTO"></i>
						</div>
						<div class="navLateral-body-cr COLO-LATERAL-TEXTO">
							CLIENTES
						</div>
						<span class="fas fa-chevron-down COLO-LATERAL-TEXTO"></span>
					</a>
					<ul class="full-width menu-principal sub-menu-options">
						<li class="full-width">
							<a href="<?php echo APP_URL; ?>clientNew/" class="full-width">
								<div class="navLateral-body-cl">
									<i class="fas fa-male fa-fw COLO-LATERAL-TEXTO"></i>
								</div>
								<div class="navLateral-body-cr COLO-LATERAL-TEXTO">
									Nuevo cliente
								</div>
							</a>
						</li>
						<li class="full-width">
							<a href="<?php echo APP_URL; ?>clientList/" class="full-width">
								<div class="navLateral-body-cl">
									<i class="fas fa-clipboard-list fa-fw COLO-LATERAL-TEXTO"></i>
								</div>
								<div class="navLateral-body-cr COLO-LATERAL-TEXTO">
									Lista de clientes
								</div>
							</a>
						</li>
						<li class="full-width">
							<a href="<?php echo APP_URL; ?>clientSearch/" class="full-width">
								<div class="navLateral-body-cl">
									<i class="fas fa-search fa-fw COLO-LATERAL-TEXTO"></i>
								</div>
								<div class="navLateral-body-cr COLO-LATERAL-TEXTO">
									Buscar cliente
								</div>
							</a>
						</li>
					</ul>
				</li>

				<li class="full-width divider-menu-h"></li>

				<li class="full-width">
					<a href="#" class="full-width btn-subMenu">
						<div class="navLateral-body-cl">
							<i class="fas fa-tags fa-fw COLO-LATERAL-TEXTO"></i>
						</div>
						<div class="navLateral-body-cr COLO-LATERAL-TEXTO">
							CATEGORIAS
						</div>
						<span class="fas fa-chevron-down COLO-LATERAL-TEXTO"></span>
					</a>
					<ul class="full-width menu-principal sub-menu-options">
						<li class="full-width">
							<a href="<?php echo APP_URL; ?>categoryNew/" class="full-width">
								<div class="navLateral-body-cl">
									<i class="fas fa-tag fa-fw COLO-LATERAL-TEXTO"></i>
								</div>
								<div class="navLateral-body-cr COLO-LATERAL-TEXTO">
									Nueva categoría
								</div>
							</a>
						</li>
						<li class="full-width">
							<a href="<?php echo APP_URL; ?>categoryList/" class="full-width">
								<div class="navLateral-body-cl">
									<i class="fas fa-clipboard-list fa-fw COLO-LATERAL-TEXTO"></i>
								</div>
								<div class="navLateral-body-cr COLO-LATERAL-TEXTO">
									Lista de categorías
								</div>
							</a>
						</li>
						<li class="full-width">
							<a href="<?php echo APP_URL; ?>categorySearch/" class="full-width">
								<div class="navLateral-body-cl">
									<i class="fas fa-search fa-fw COLO-LATERAL-TEXTO"></i>
								</div>
								<div class="navLateral-body-cr COLO-LATERAL-TEXTO">
									Buscar categoría
								</div>
							</a>
						</li>
					</ul>
				</li>

				<li class="full-width divider-menu-h"></li>

				<li class="full-width">
					<a href="#" class="full-width btn-subMenu">
						<div class="navLateral-body-cl">
							<i class="fas fa-cubes fa-fw COLO-LATERAL-TEXTO"></i>
						</div>
						<div class="navLateral-body-cr COLO-LATERAL-TEXTO">
							PRODUCTOS
						</div>
						<span class="fas fa-chevron-down COLO-LATERAL-TEXTO"></span>
					</a>
					<ul class="full-width menu-principal sub-menu-options">
						<li class="full-width">
							<a href="<?php echo APP_URL; ?>productNew/" class="full-width">
								<div class="navLateral-body-cl">
									<i class="fas fa-box fa-fw COLO-LATERAL-TEXTO"></i>
								</div>
								<div class="navLateral-body-cr COLO-LATERAL-TEXTO">
									Nuevo producto
								</div>
							</a>
						</li>
						<li class="full-width">
							<a href="<?php echo APP_URL; ?>productList/" class="full-width">
								<div class="navLateral-body-cl">
									<i class="fas fa-clipboard-list fa-fw COLO-LATERAL-TEXTO"></i>
								</div>
								<div class="navLateral-body-cr COLO-LATERAL-TEXTO">
									Lista de productos
								</div>
							</a>
						</li>
						<li class="full-width">
							<a href="<?php echo APP_URL; ?>productCategory/" class="full-width">
								<div class="navLateral-body-cl">
									<i class="fas fa-boxes fa-fw COLO-LATERAL-TEXTO"></i>
								</div>
								<div class="navLateral-body-cr COLO-LATERAL-TEXTO">
									Productos por categoría
								</div>
							</a>
						</li>
						<li class="full-width">
							<a href="<?php echo APP_URL; ?>productSearch/" class="full-width">
								<div class="navLateral-body-cl">
									<i class="fas fa-search fa-fw COLO-LATERAL-TEXTO"></i>
								</div>
								<div class="navLateral-body-cr COLO-LATERAL-TEXTO">
									Buscar producto
								</div>
							</a>
						</li>
					</ul>
				</li>

				<li class="full-width divider-menu-h"></li>

				<li class="full-width">
					<a href="#" class="full-width btn-subMenu">
						<div class="navLateral-body-cl">
							<i class="fas fa-shopping-cart fa-fw COLO-LATERAL-TEXTO"></i>
						</div>
						<div class="navLateral-body-cr COLO-LATERAL-TEXTO">
							VENTAS
						</div>
						<span class="fas fa-chevron-down COLO-LATERAL-TEXTO"></span>
					</a>
					<ul class="full-width menu-principal sub-menu-options">
						<li class="full-width">
							<a href="<?php echo APP_URL; ?>saleNew/" class="full-width">
								<div class="navLateral-body-cl">
									<i class="fas fa-cart-plus fa-fw COLO-LATERAL-TEXTO"></i>
								</div>
								<div class="navLateral-body-cr COLO-LATERAL-TEXTO">
									Nueva venta
								</div>
							</a>
						</li>
						<li class="full-width ">
							<a href="<?php echo APP_URL; ?>saleList/" class="full-width">
								<div class="navLateral-body-cl">
									<i class="fas fa-clipboard-list fa-fw COLO-LATERAL-TEXTO"></i>
								</div>
								<div class="navLateral-body-cr COLO-LATERAL-TEXTO">
									Lista de ventas
								</div>
							</a>
						</li>
						<li class="full-width">
							<a href="<?php echo APP_URL; ?>saleSearch/" class="full-width">
								<div class="navLateral-body-cl">
									<i class="fas fa-search-dollar fa-fw COLO-LATERAL-TEXTO"></i>
								</div>
								<div class="navLateral-body-cr COLO-LATERAL-TEXTO">
									Buscar venta
								</div>
							</a>
						</li>
					</ul>
				</li>

				<li class="full-width divider-menu-h"></li>

				<li class="full-width">
					<a href="#" class="full-width btn-subMenu">
						<div class="navLateral-body-cl">
							<i class="fas fa-cogs fa-fw COLO-LATERAL-TEXTO"></i>
						</div>
						<div class="navLateral-body-cr COLO-LATERAL-TEXTO">
							CONFIGURACIONES
						</div>
						<span class="fas fa-chevron-down COLO-LATERAL-TEXTO"></span>
					</a>
					<ul class="full-width menu-principal sub-menu-options">
						<li class="full-width">
							<a href="<?php echo APP_URL; ?>companyNew/" class="full-width">
								<div class="navLateral-body-cl">
									<i class="fas fa-store-alt fa-fw COLO-LATERAL-TEXTO"></i>
								</div>
								<div class="navLateral-body-cr COLO-LATERAL-TEXTO">
									Datos de empresa
								</div>
							</a>
						</li>
						<li class="full-width">
							<a href="<?php echo APP_URL."userUpdate/".$_SESSION['id']."/"; ?>" class="full-width">
								<div class="navLateral-body-cl">
									<i class="fas fa-user-tie fa-fw COLO-LATERAL-TEXTO"></i>
								</div>
								<div class="navLateral-body-cr COLO-LATERAL-TEXTO">
									Mi cuenta
								</div>
							</a>
						</li>
						<li class="full-width">
							<a href="<?php echo APP_URL."userPhoto/".$_SESSION['id']."/"; ?>" class="full-width">
								<div class="navLateral-body-cl">
									<i class="fas fa-camera COLO-LATERAL-TEXTO"></i>
								</div>
								<div class="navLateral-body-cr COLO-LATERAL-TEXTO">
									Mi foto
								</div>
							</a>
						</li>
					</ul>
				</li>

				<li class="full-width divider-menu-h "></li>

				<li class="full-width mt-5">
					<a href="<?php echo APP_URL."logOut/"; ?>" class="full-width btn-exit" >
						<div class="navLateral-body-cl">
							<i class="fas fa-power-off COLO-LATERAL-TEXTO"></i>
						</div>
						<div class="navLateral-body-cr COLO-LATERAL-TEXTO">
							Cerrar sesión
						</div>
					</a>
				</li>

			</ul>
		</nav>
	</div>
</section>

<style>
    .pageContent {
        padding: 0 5px; /* Padding a la izquierda y derecha */
        max-width: calc(100% - 40px); /* Ancho máximo del contenido (menos el doble del padding) */
        margin: 0 auto; /* Centrar el contenido horizontalmente */
    }

    /* Estilo para evitar el scroll horizontal */
    .scroll {
        overflow-x: hidden; /* Oculta el desplazamiento horizontal */
        overflow-y: auto; /* Añade scroll vertical si es necesario */
        scrollbar-width: none; /* Para navegadores Firefox */
        -ms-overflow-style: none; /* Para navegadores Internet Explorer y Edge */
    }

    .scroll::-webkit-scrollbar {
        width: 0px; /* Oculta la barra de desplazamiento en navegadores WebKit (Chrome, Safari, etc.) */
        background: transparent; /* Fondo transparente */
    }

	.COLO-LATERAL-TEXTO{
		color: white;
	}
		/* Estilo inicial del texto */
	.COLO-LATERAL-TEXTO {
	color: black; /* Color inicial del texto */
	transition: color 0.3s ease; /* Transición suave para el cambio de color */
	}

	/* Cambio de color al pasar el cursor sobre el texto */
	.COLO-LATERAL-TEXTO:hover {
	color: white; /* Color del texto al pasar el cursor */
	}

</style>

