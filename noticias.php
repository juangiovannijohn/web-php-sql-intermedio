<?php
include('includes/header.php');
 ?>
<!--En ésta página se crea un listado de articulos de noticias en forma de loop, ordenado de la más reciente a la más antigua. La información de las noticias en éste caso esta guardada en un array asociativo de un nivel.  -->
<section id="contenido">
	<h2>Noticias - Unidad VI</h2>
	<div class="contenedor_noticias">
		<?php
		//array con informacion de noticias
		$noticias = [
			['titulo' => 'Cuál es el origen de la crisis mundial de microchips y cómo puede afectarte',
				'descripcion' => 'Los fabricantes de autos y las compañias de dispositivos electronicos enfrentan problemas para abastecerse de chips de computadora.',
				'imagen'=> 'microchips.jpeg', 'url' => 'microchips.php'],
			['titulo' => 'Transistores inversos',
				'descripcion' => 'Qué son, para qué sirven y por qué inspiran a reinventar. Los transcistores nos prometen circuitos integrados mas sencillos.',
				'imagen'=> 'transistores.jpeg', 'url' => 'transistores.php'],
			['titulo' => 'El país que está luchando contra la cultura de tirar todo lo viejo a la basura',
				'descripcion' => 'Un combinacion de aficionados entusiastas, cafés de reparacion y nuevas leyes que protegen el "derecho a reparar" podría ayudar a disminuir las crecientes montañas de aparatos electrónicos averiados.',
				'imagen'=> 'basura.jpeg', 'url' => 'basura.php'],
			['titulo' => 'Qué es el litio geotérmico y por qué puede revolucionar las energías limpias',
				'descripcion' => 'Un novedoso sistema para extraer litio ha resultado ser más respetuoso con el medio ambiente.',
				'imagen'=> 'litio.webp', 'url' => 'litio.php']
		];
		//ordenado de noticia mas nueva a mas antigua
		for ($i=(count($noticias)-1); $i >= 0 ; $i--) { ?>
			<div class="card_noticias">
				<div class="card_img">
					<img src="imagenes/<?php echo $noticias[$i]['imagen']; ?>" alt="">
				</div>
				<div class="card_text">
					<h4 class="card_titulo"> <a href="<?php echo $noticias[$i]['url']; ?>"><?php echo $noticias[$i]['titulo']; ?></a></h4>
					<p class="card_descripcion"><?php echo $noticias[$i]['descripcion']; ?></p>
					<a class="card_link" href="<?php echo $noticias[$i]['url']; ?>">Leer más</a>
				</div>
			</div>
		<?php } ?>
	</div>
</section>
<?php
include('includes/footer.php');
?>
