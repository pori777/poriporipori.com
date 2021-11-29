
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

function post_has_archive( $args, $post_type) {//設定後に（パーマリンク更新すること）
    if ('post' == $post_type) {
        $args['rewrite'] = true;
        $args['has_archive'] = 'news';
        $args['label'] = 'お知らせ';
    }
    return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10,2);