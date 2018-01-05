<?php include("header.php"); ?>

		<div class="cuerpo">
			<div class="row" style="margin:0px!important;">
				<div class="card-panel bg-secundario centered flex-row" style="margin:0px!important;">
					<h2 class="white-text">Eventos</h2>
				</div>
			</div>

			<div class="row seccion" >
				<div class="col s12 offset-l1 l7">
					<div class="row">
						<h4><?php the_title() ?></h4>
					</div>
					<div class="row" style="padding-bottom: 5px">
						<div class="col s12 l6">
							<div class="row" style="margin: 8px 0px!important;" >
									<div class="col s4 flex-row-start text-negrita">
										<i class="material-icons tooltipped color-secundario" data-position="left" data-delay="50" data-tooltip="Lugar">place</i>
										Lugar:
									</div>
									<div class="col s8">
										<?php the_field( 'lugar_de_evento' ); ?>
									</div>
							</div>
						</div>
						<div class="col s12 l6">
							<div class="row" style="margin: 8px 0px!important;">
									<div class="col s4 flex-row-start text-negrita">
										<i class="material-icons tooltipped color-secundario" data-position="left" data-delay="50" data-tooltip="Fecha">event</i>
										Fecha:
									</div>
									<div class="col s8">
										<?php the_field( 'fecha_de_evento' ); ?>
									</div>
							</div>
							<div class="row" style="margin: 8px 0px!important;">
									<div class="col s4 flex-row-start text-negrita">
										<i class="material-icons tooltipped color-secundario" data-position="left" data-delay="50" data-tooltip="Hora">date_range</i>
										Hora:
									</div>
									<div class="col s8">
										<?php the_field( 'hora_de_evento' ); ?>
									</div>
							</div>
						</div>
						<div class="col s12">
							<div class="row" style="margin: 15px 0px!important;">
								<img src="<?php the_field( 'portada_evento' ); ?>" class="responsive-img z-depth-1 imagen-evento" style="width: 100%;!important; height:450px!important;">
							</div>
						</div>
					</div>


					<div class="row" style="padding: 10px 20px 10px 20px!important">
						<?php the_field( 'contenido_evento' ); ?>
					</div>
				</div>
				
				<?php get_sidebar('noticias'); ?>
				

			</div>
		</div>

<?php include("footer.php"); ?>
