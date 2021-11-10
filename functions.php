<?php


function registeer_widgets() {
    register_sidebar( array(
        'name'          => 'Mijn zijkant widget',
        'id'            => 'zijkant_widget',
    ) );
    }
    add_action( 'widgets_init', 'registeer_widgets' );

function register_my_menus() {
    register_nav_menus(
      array(
        'header-menu' => __( 'Hoofdmenu' ),
        'extra-menu' => __( 'Extra Menu' )
       )
     );
   }
   add_action( 'init', 'register_my_menus' );
      





?>