<?php  
	try {
		// Creamos la conexión con la DB
		require_once('includes/functions/bd_conection.php');
		// Escribimos la consulta en SQL
		$sql = "SELECT * FROM invitados ";
		// Consultamos la base
		$resultado = $conn->query($sql);
	} catch (\Exception $e) {
		echo $e->getMessage();
	}
?>


<section class="invitados contenedor seccion">
	<h2>Nuestro invitados</h2>
	<ul class="lista-invitados clearfix">
	
	<?php while ($invitados = $resultado->fetch_assoc()) { ?>
		<li>
			<div class="invitado">
				<a class="invitado-info" href="#invitado<?php echo $invitados['invitado_id']; ?>">
		     		<img src="img/<?php echo $invitados['url_imagen']; ?>" alt="imagen invitado">
		     		<p><?php echo $invitados['nombre_invitado'] . " " . $invitados['apellido_invitado']; ?></p>
		     	</a>
		    </div>
		</li>
		<div style="display:none;">
			<div class="invitado-info" id="invitado<?php echo $invitados['invitado_id']; ?>">
				<h2><?php echo $invitados['nombre_invitado'] . " " . $invitados['apellido_invitado']; ?></h2>
				<img src="img/<?php echo $invitados['url_imagen']; ?>" alt="imagen invitado">
				<p><?php echo $invitados['descripcion']; ?></p>
			</div>
		</div>
	<?php } ?>

	</ul>
</section>

<?php // Siempre cerrar la conexión ?>
<?php $conn->close(); ?>