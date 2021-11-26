
<?php
/* style.css の読み込み */
function theme_name_scripts() {
    wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'theme_name_scripts');

/*script.jsの読み込み */
function link_scripts() {
wp_enqueue_script( 'script.js', get_stylesheet_directory_uri() . '/js/script.js', '', '', true );
}
add_action('wp_enqueue_scripts', 'link_scripts' );
