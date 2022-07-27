<?php
include('includes/header.php');
 ?>
<!-- En ésta página se creo un catálogo de productos utilizando condicionales y cargando los productos en un "switch". -->
<section id="contenido">
	<h2>Catálogo - Unidad V</h2>
	<ul class="botonera_catalogo mt-5">
			<li class="botonera_catalogo_li" ><a class="botonera_catalogo_a" href="catalogo.php?id=1#contenido">Sillón Capri </a></li>
			<li class="botonera_catalogo_li" ><a class="botonera_catalogo_a" href="catalogo.php?id=2#contenido">Mesa Ipanema  </a></li>
			<li class="botonera_catalogo_li" ><a class="botonera_catalogo_a" href="catalogo.php?id=3#contenido">Banco Venecia </a></li>

	</ul>
	<?php
	//Verificacion si existe el parametro id en la url
	if (isset($_GET['id'])): ?>
		<h3 class="h3 detalles_h3">Detalles</h3>
	<?php
	//Captura del parametro id y definifion de caracteristicas de cada producto
	switch ($_GET['id']) {
		case '1':
			$producto = 'Sillón Capri';
			$precio = '$ 345.00 ';
			$caracteristica='Concebida para ser utilizada tanto bajo techo como a la intemperie. La madera de origen brasilera está acabada con un recubrimiento de Resina Polisten que la embellece.';
			$url_img_prod='imagenes/sillon1.jpg';
			break;
		case '2':
			$producto = 'Mesa Ipanema';
			$precio = '$ 500.00';
			$caracteristica='Se trata de una colección de muebles de madera de eucaliptos, certificada con el sello FSC y concebida para ser utilizada tanto bajo techo como a la intemperie. La madera es de origen brasilera. Las medidas son: 120 cms';
			$url_img_prod='imagenes/ipanema.jpg';
			break;
		case '3':
			$producto = 'Banco Venecia';
			$precio = '$ 450.00';
			$caracteristica='Se trata de una colección de muebles de madera de eucaliptos, certificada con el sello FSC (SWCOC-091) y concebida para ser utilizada tanto bajo techado como a la intemperie. La madera es de origen brasilera. Las medidas son: 120 cms.';
			$url_img_prod='imagenes/venecia.jpg';
			break;
	}
	?>
	<!-- Estructura html de producto individual -->
	<div class="detalle_producto">
		<div class="detalle_producto_img">
			<span class="detalle_producto_php_img"><img src="<?php echo $url_img_prod;   ?>" alt=""></span>
		</div>
		<div class="detalle_producto_listado">
			<ul class="detalle_producto_ul">
				<li class="detalle_producto_li"><span class="detalle_producto_php detalle_producto_php_tit"> <?php echo $producto;   ?> </span> </li>
				<li class="detalle_producto_li"><span class="detalle_producto_php detalle_producto_php_pre"><?php echo $precio;   ?> </span> </li>
				<li class="detalle_producto_li">Caracteristica: <span class=" detalle_producto_php"><?php echo $caracteristica;   ?> </span></li>
			</ul>
		</div>
	</div>
	<?php endif; ?>
</section>
<?php
include('includes/footer.php');
?>
