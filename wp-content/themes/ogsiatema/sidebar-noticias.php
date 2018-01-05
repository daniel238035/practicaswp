
        <div class="col s12 l3">
			<div class="row" style="padding-bottom: 25px">
				<h5 class="bordes">
					Ultimas Noticias
				</h5>

                <!--LOOP Wordpress Inicio-->
                <?php
                    query_posts(array(
                      "showposts" => 3,
                      "cat" => 12,
                      //'post_type'=>'',
                      'order' => 'DES'
                      ));
                ?>
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="col s12">
					<h6 class="text-negrita color-primario"><?php the_field('fecha_de_noticia');?></h6>
					<a href="<?php the_permalink()?>"><h6 class="color-oscuro titulo-item"><?php the_title() ?></h6></a>
				</div>
                
                <?php endwhile; ?>
                <!-- post navigation -->
                <?php else: ?>
                    
                <!-- no posts found -->
                <?php endif; ?>
                <?php wp_reset_query(); ?>
                <!--LOOP Wordpress Fin-->

			</div>
			<div class="row" >
				<h5 class="bordes">
					Ultimos Eventos
				</h5>
                
                <!--LOOP Wordpress Inicio-->
                <?php
                    query_posts(array(
                      "showposts" => 3,
                      "cat" => 11,
                      //'post_type'=>'',
                      'order' => 'DES'
                      ));
                ?>
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="col s12 espacioEvento">
					<div class="col s4 bg-primario">
						<p  style="text-align:center" class="white-text"><span style="font-size: 20px"><?php the_field('fecha_de_evento');?></p>
					</div>
					<div class="col s8">
						<a href="<?php the_permalink()?>"><h6 class="color-oscuro titulo-item"><?php the_title() ?></h6></a>
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