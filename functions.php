
<?php
/* style.css の読み込み */
function css_scripts() {
    wp_enqueue_style( 'reset',
    'https://unpkg.com/ress/dist/ress.min.css');

    wp_enqueue_style( 'font',
    'https://use.fontawesome.com/releases/v5.6.1/css/all.css');

    wp_enqueue_style( 'fontAnimation',
    'https://cdnjs.cloudflare.com/ajax/libs/font-awesome-animation/0.0.10/font-awesome-animation.css');

    wp_enqueue_style( 'style', 
    get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'css_scripts');

/*script.jsの読み込み */
function link_scripts() {
wp_enqueue_script( 'script.js', get_stylesheet_directory_uri() . '/js/script.js', '', '', true );
}
add_action('wp_enqueue_scripts', 'link_scripts' );