<?php

function odin_carro_cpt() {
    $carro = new Odin_Post_Type(
        'Carro', // Nome (Singular) do Post Type.
        'carro' // Slug do Post Type.
    );

    $carro->set_labels(
        array(
            'menu_name' => __( 'Carros', 'odin' )
        )
    );

    $carro->set_arguments(
        array(
            'supports' => array( 'title', 'editor', 'thumbnail' )
        )
    );
}

add_action( 'init', 'odin_carro_cpt', 1 );