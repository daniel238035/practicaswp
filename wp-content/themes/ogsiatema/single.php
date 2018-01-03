<?php
if (in_category(4)) { // Si el post pertenece a la categoría con id = 1
    include(TEMPLATEPATH . '/single-movilidad.php');
} elseif (in_category(5)) { // Si el post pertenece a la categoría con id = 2
    include(TEMPLATEPATH . '/single-interdocentes.php');
} elseif (in_category(6)) { // Si el post pertenece a la categoría con id = 2
    include(TEMPLATEPATH . '/single-otrasconv.php');
} elseif (in_category(7)) { // Si el post pertenece a la categoría con id = 2
    include(TEMPLATEPATH . '/single-noticia.php');
} elseif (in_category(12)) { // Si el post pertenece a la categoría con id = 2
    include(TEMPLATEPATH . '/single-noticia.php');
} elseif (in_category(8)) { // Si el post pertenece a la categoría con id = 2
    include(TEMPLATEPATH . '/single-evento.php');
} elseif (in_category(11)) { // Si el post pertenece a la categoría con id = 2
    include(TEMPLATEPATH . '/single-evento.php');
} else { // Sino, cargo otro single por defecto
    include(TEMPLATEPATH . '/single-movilidad.php');
}
 ?>