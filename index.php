<?php
include('includes/header.php');
 ?>
 <!-- En ésta pagina iniciamos con lo básico de php, como los tipos de variables, arrays, como imprimirlas en pantalla y hacer algunos calculos simples. -->
<section id="contenido">
	<h2>Unidad IV - Introducción a PHP</h2>
	<div id="uni4_1">
		<?php
		$subtitulo4_1 = 'Tipos de Variables Compuestas';
		$tipo_variable_compuesta_1 = 'Variables Arrays';
		$tipo_variable_compuesta_2 = 'Variables de Objeto';
		?>
		<h3><?php echo $subtitulo4_1; ?></h3>
		<ul>
			<li><?php echo $tipo_variable_compuesta_1; ?></li>
			<li><?php echo $tipo_variable_compuesta_2; ?></li>
		</ul>
	</div>

	<div id="uni4_2">
		<?php
		echo 'EVALUACIÓN '.'<br>'.' INTEGRADORA '.'<br>'.' PHP '.'<br>'.'y MySQL';
		?>
	</div>

	<div id="uni4_3">
		<?php
		$nombre = 'Juan';
		$edad = 32;
		$boolean = true;
		echo 'Nombre del alumno: '.$nombre.'<br>';
		echo 'Edad del alumno: '.$edad.'<br>';
		echo 'Variable booleana "true" se interpreta como: '.$boolean.'<br>';
		?>
	</div>
	<div id="uni4_4">
		<?php
		$calificacion_unidad1 = 77;
		$calificacion_unidad2 = 100;
		$calificacion_unidad3 = 100;
		?>
		<p>La calificacion de la unidad 1 fué: <?php echo $calificacion_unidad1; ?>/100</p>
		<p>La calificacion de la unidad 2 fué: <?php echo $calificacion_unidad2; ?>/100</p>
		<p>La calificacion de la unidad 3 fué: <?php echo $calificacion_unidad3; ?>/100</p>
		<p><strong>El promedio de calificación es de: <?php echo (($calificacion_unidad1+$calificacion_unidad2+$calificacion_unidad3)/3); ?> /100</strong></p>
	</div>
</section>
<?php
include('includes/footer.php');
?>
