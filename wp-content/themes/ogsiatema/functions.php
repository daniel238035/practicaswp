<?php 
    
    //Agregando mis estilos
    function misrecursos() {
		/*ESTILOS*/
		wp_enqueue_style("style",get_stylesheet_uri());
		wp_register_style('materialize-css',get_template_directory_uri() . '/css/materialize.css', array('style'));
		wp_enqueue_style( 'materialize-css' );
		/*JAVA SCRIP*/

	}
	add_action( 'wp_enqueue_scripts', 'misrecursos' );

	//Agregando mis menus
	if (function_exists('register_nav_menus')) {
		register_nav_menus(array('menu_principal' => 'Menu Principal Superior'));
		register_nav_menus(array('menu_movil' => 'Menu Principal Movil'));
	}

	//Agregando estilo al <li> de mi menun principal

	function clase_li_menu_superior ($classes, $item, $args) {
		if ($args->theme_location == 'menu_principal') {
			$classes[] = 'col s2 color-oscuro btn-menu center';
		}
		return $classes;
	}

	add_filter( 'nav_menu_css_class', 'clase_li_menu_superior', 1, 3 );

	//Agregando estilo al <li> de mi menun principal

	function clase_li_menu_movil ($classes, $item, $args) {
		if ($args->theme_location == 'menu_movil') {
			$classes[] = 'li_menu_movil';
		}
		return $classes;
	}

	add_filter( 'nav_menu_css_class', 'clase_li_menu_movil', 1, 3 );


?>

