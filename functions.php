<?php


function registeer_widgets() {
    register_sidebar( array(
        'name'          => 'Mijn zijkant widget',
        'id'            => 'zijkant_widget',
    ) );
    }
    add_action( 'widgets_init', 'registeer_widgets' );



    

?>