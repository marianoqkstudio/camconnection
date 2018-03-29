index.<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="wrapsemibox">

		<div class="semiboxshadow text-center">
			<img src="<?php echo THEME_IMAGES; ?>/shp.png" class="img-responsive" alt="">
		</div>


		<?php if(get_field('agregar_cursos')): ?>  

			<!-- PAGINA TRAINING SOFTWARE -->	
			<section class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<ol class="breadcrumb animated fadeInDown bottomspace20">
							<li><a href="../index-2.html">Home</a></li>
							<li class="active">Training Vero Software</li>
						</ol>
					</div>
				</div>

				<div class="col-md-4 animated fadeInRight notransition">
					<div class="well well-large well-transparent clearfix">  
					<?php the_field('informacion_de_cursos'); ?>    
		            </div>
					<h2 class="smalltitle">
						<span><?php the_field('titulo_modalidad'); ?></span>
					</h2>

	                <?php if(have_rows('tipo_de_modalidades')):
	                    while(have_rows('tipo_de_modalidades')): the_row();?>
							<div class="box effect3 bottomspace10">
								<h3><i class="icon <?php the_sub_field('poner_icono_al_curso'); ?>"></i> <?php the_sub_field('lugar_del_curso'); ?> </h3>

								<p><?php the_sub_field('descripcion'); ?></p>

								<a class="btn btn-default btn-md btn-block" href="<?php the_sub_field('boton_consultar'); ?>"><i class="icon-envelope"></i> <?php the_sub_field('texto_del_boton'); ?>
								</a>
							</div>
	                	<?php endwhile;
	                endif;?>	
				</div>

				<!-- PENDIENTE PARA HACER LA PROGRAMACION QUERY -->

				<div class="col-md-8 animated fadeInLeft notransition">
					<h2 class="smalltitle">
						<span>Nuestros Cursos</span>
					</h2>
					<div class="row">
						<div class="col-md-12 text-center">
							<div id="filter" class="animated fadeInDown bottomspace10">
								<ul>
									<li><a href="#" data-filter="*" class="selected"><i class="icon icon-reorder"></i> Ver Todos</a></li>

									<li><a href="#" data-filter=".activo" title="¡Fechas Definidas!"><i class="icon icon-th"></i> Cursos Activos</a></li>

									<li>Líneas:</li>

									<li><a href="#" data-filter=".Alphacam"><i class="icon icon-th"></i> Alphacam</a></li>

									<li><a href="#" data-filter=".<?php echo $post->ID ?>"><i class="icon icon-th"></i> Radan</a></li>
									
									<li><a href="#" data-filter=".Edgecam"><i class="icon icon-th"></i> Edgecam</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- END filtering menu -->
					<div id="content">
						
						<!-- box lista-->
						<div class="boxportfolio1 bp-height item Radan ">
							<div class="boxcontainer">
								<div class="prod-imagecontainer"><img src="<?php echo THEME_IMAGES; ?>/pics/2d-01.jpg" alt="Radraft 2D CAD Essential"></div>

								<div class="roll">
									<div class="wrapcaption">
										<a href="8"><i class="icon-arrow-right captionicons"></i></a>
									</div>
								</div>
								<div class="prod-infocontainer">
								<h1><a href="vero-alphacam-router.html">Radraft 2D CAD Essential</a></h1>
								<p>Este curso de un día en nuestro centro de entrenamiento está diseñado para proveerle de los conocimientos para el dibujo bidimensional en Radraft.</p>
								</div>
							</div>
						</div>
						<!-- /box lista -->			
						
						
					</div>
					<!-- MASONRY ITEMS END -->
				</div>
			</section>
			<!-- / PAGINA TRAINING SOFTWARE -->	
</div>
</body>
</html>