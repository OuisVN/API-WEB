<?php include_once('includes/header.php'); ?>
		
		<br/><br/>
		<script type="text/javascript" src="assets/js/scripts/app.js"></script>
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-7">
				<div class="titulo font-weight-bold text-center">INICIO</div>
				<div class="contenido">
					<div id="MostrarAPI" class="row text-center"></div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="titulo font-weight-bold text-center">AGREGAR</div>
				<div class="contenido text-center">
					<form action="insertar_api" method="POST">
						<input type="text" name="imagen" class="form-control form-control-sm" placeholder="Ingrese URL Imagen" /><br/>
						<input type="text" name="nombre" class="form-control form-control-sm" placeholder="Ingrese Nombre Producto" /><br/>
						<button type="submit" class="btn btm-sm btn-success font-weight-bold">INSERTAR PRODUCTO</button>
					</form>
				</div>
				
				<div class="titulo font-weight-bold text-center">MODIFICAR</div>
				<div class="contenido text-center">
					<form action="modificar_api" method="POST">
						<input type="number" name="modificar_id" class="form-control form-control-sm" placeholder="Ingrese Codigo" /><br/>
						<input type="text" name="modificar_imagen" class="form-control form-control-sm" placeholder="Ingrese Nueva URL Imagen" /><br/>
						<input type="text" name="modificar_nombre" class="form-control form-control-sm" placeholder="Ingrese Nuevo Nombre Producto" /><br/>
						<button type="submit" class="btn btm-sm btn-success font-weight-bold">MODIFICAR PRODUCTO</button>
					</form>
				</div>
			</div>
			<div class="col-md-1"></div>
		</div>
	<?php include_once 'includes/footer.php'; ?>