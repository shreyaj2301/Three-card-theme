<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }

function three_cards_enqueue() {
    wp_enqueue_style('three-cards-google', 'https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap', array(), null);
    wp_enqueue_style('three-cards-main', get_template_directory_uri() . '/css/main.css', array(), '1.0.0');
}
add_action('wp_enqueue_scripts', 'three_cards_enqueue');
?>