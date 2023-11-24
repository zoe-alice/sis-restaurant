<aside class="main-sidebar">

	 <section class="sidebar">

		<ul class="sidebar-menu">

		<?php

		if($_SESSION["perfil"] == "Administrador"){

			echo '<li class="active">

				<a href="inicio">

					<i class="fa fa-home"></i>
					<span>INICIO</span>

				</a>

			</li>

			<li>

				<a href="usuarios">

					<i class="fa fa-user"></i>
					<span>PERSONAL</span>

				</a>

			</li>';

		}

		if($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] == "Especial"){

			echo '<li>

				<a href="categorias">

					<i class="fa fa-th"></i>
					<span>TIPOS DE BANQUETES</span>

				</a>

			</li>

			<li>

				<a href="productos">

					<i class="fa fa-product-hunt"></i>
					<span>MENU GENERAL</span>

				</a>

			</li>';

		}

		if($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] == "Vendedor"){

			echo '<li>

				<a href="nuevosSuscriptores">

					<i class="fa fa-users"></i>
					<span>SUSCRIPTORES</span>

				</a>

			</li>


			<li>

				<a href="clientes">

					<i class="fa fa-users"></i>
					<span>PROSPECTOS</span>

				</a>

			</li>

			<li>

				<a href="nuevosContratos">

					<i class="fa fa-users"></i>
					<span>Nuevos Contratos</span>

				</a>

			</li>';

		}

		if($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] == "Vendedor"){

			echo '<li class="treeview">

				<a href="#">

					<i class="fa fa-list-ul"></i>
					
					<span>CONTRATOS</span>
					
					<span class="pull-right-container">
					
						<i class="fa fa-angle-left pull-right"></i>

					</span>

				</a>

				<ul class="treeview-menu">
					
					<li>

						<a href="ventas">
							
							<i class="fa fa-circle-o"></i>
							<span>Administrar contratos</span>

						</a>

					</li>

					<li>

						<a href="crear-venta">
							
							<i class="fa fa-circle-o"></i>
							<span>Crear contrato</span>

						</a>

					</li>';

					if($_SESSION["perfil"] == "Administrador"){

					echo '<li>

						<a href="reportes">
							
							<i class="fa fa-circle-o"></i>
							<span>Reporte de contratos</span>

						</a>

					</li>';

					}

				

				echo '</ul>

			</li>';

		}
		if($_SESSION["perfil"] == "Administrador"){

			echo '<li class="active">

				<a href="http://localhost/phpmyadmin/index.php?route=/database/structure&server=1&db=sis_inventario">

					<i class="fa fa-th"></i>
					<span>Base de datos</span>

				</a>

			</li>';

		}

		?>

		</ul>

	 </section>

</aside>