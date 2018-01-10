<?php
/*
Template Name: Página Noticias
*/
?>
<?php get_header(); ?> 

	<div class="cuerpo">
		<div class="row hide" style="margin:0px!important;">
			<div class="card-panel bg-secundario centered flex-row" style="margin:0px!important;">
				<h2 class="white-text titulo-portada"><?php the_title() ?></h2>
			</div>
		</div>

		<div class="parallax-container  portada-sub portada-principal-oscuro" style="height:200px;">
			<div class="parallax">
			<img src="<?php bloginfo('template_url')?>/images/portadas/portada-noticias.jpg">

			</div>
			<div class="row   ">
					<div class=" flex seccion-2">
						<div class="row">
						<div class="col s12 l5 offset-l2">
							<h2 class="white-text titulo-portada"><?php the_title() ?></h2>
						</div>
						</div>
					</div>
				</div>
		</div>

		<div class="container seccion">
			<div class="row" style="margin-bottom: 10px!important" >
				
				<!--LOOP Wordpress Inicio-->
                <?php
                      query_posts(array(
                        "showposts" => 2,
                        "cat" => 12,
                        //'post_type'=>'',
                        'order' => 'DES'
                        ));
                ?>
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<div class="col s12 m6">
					<div class="card" style="padding:0px!important;">
						<div class="card-image waves-effect waves-block waves-light">
							<img class="activator" src="<?php the_field( 'portada_de_noticia' ); ?>">
						</div>
						<div class="card-content altura-igual-noticia-contenido-1" style="padding:15px!important;">
							<div class="row flex-row">
								<div class="col s10">
									<h5 class="titulo-borde-izquierdo-2 activator altura-igual-noticia-titulo-1"><?php the_title() ?></h5>
								</div>
								<div class="col s2">
									<span class="card-title activator grey-text text-darken-4"><i class="material-icons right">more_vert</i></span>
								</div>
							</div>
							<div class="row ">
								<div class="col s12 " style="margin: 8px 0px!important;">
									<div class="row">
											<div class="col s2 flex-row-start">
												<i class="material-icons tooltipped color-secundario" data-position="left" data-delay="50" data-tooltip="Fecha">event</i>
											</div>
											<div class="col s10">
												<?php the_field( 'fecha_de_noticia' ); ?>
											</div>
									</div>
								</div>
							</div>
							<div class="row" style="padding: 10px !important">
								<div><?php the_field( 'contenido_resumen_noticia' ); ?></div>
							</div>

						</div>
						<div class="card-action" style="padding: 5px 5px!important">
							<a class="btn btn-flat green-text text-negrita" href="<?php the_permalink() ?>" >Más</a>
						</div>
					</div>
				</div>
				
				<?php endwhile; ?>
                <!-- post navigation -->
                <?php else: ?>
                <!-- no posts found -->
                <?php endif; ?>
                <?php wp_reset_query(); ?>
                <!--LOOP Wordpress Fin-->

			</div>

			<div class="row">

				<!--LOOP Wordpress Inicio-->
                <?php
                      query_posts(array(
                        "showposts" => 9,
                        "cat" => 7,
                        //'post_type'=>'',
                        'order' => 'DES'
                        ));
                ?>
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<div class="col s12 m4">
					<div class="card" style="padding:0px!important;">
						<div class="card-image waves-effect waves-block waves-light">
							<img class="activator" src="<?php the_field( 'portada_de_noticia' ); ?>">
						</div>
						<div class="card-content altura-igual-noticia-contenido-2" style="padding:15px!important;">
							<div class="row flex-row">
								<div class="col s10">
									<h5 class="titulo-borde-izquierdo-2 activator altura-igual-noticia-titulo-2"><?php the_title() ?></h5>
								</div>
								<div class="col s2">
									<span class="card-title activator grey-text text-darken-4"><i class="material-icons right">more_vert</i></span>
								</div>
							</div>
							<div class="row ">
								<div class="col s12" style="margin: 8px 0px!important;">
									<div class="row">
											<div class="col s2 flex-row-start">
												<i class="material-icons tooltipped color-secundario" data-position="left" data-delay="50" data-tooltip="Fecha">event</i>
											</div>
											<div class="col s10">
												<?php the_field( 'fecha_de_noticia' ); ?>
											</div>
									</div>
								</div>
							</div>

						</div>
						<div class="card-action" style="padding: 5px 5px!important">
							<a class="btn btn-flat green-text text-negrita" href="<?php the_permalink() ?>" >Más</a>
						</div>
						<div class="card-reveal">
							<span class="card-title grey-text text-darken-4"><?php the_title() ?><i class="material-icons right">close</i></span>
							<?php the_field( 'contenido_resumen_noticia' ); ?>
						</div>
					</div>
				</div>

				<?php endwhile; ?>
                <!-- post navigation -->
                <?php else: ?>
                <!-- no posts found -->
                <?php endif; ?>
                <?php wp_reset_query(); ?>
                <!--LOOP Wordpress Fin-->
			</div>
		</div>
	</div>


	<?php get_footer() ?>
