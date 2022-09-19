<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );

// END ENQUEUE PARENT ACTION
add_action('woocommerce_after_add_to_cart_form','sale_products');
function sale_products()
{
    echo do_shortcode('[acf field="look_all_products_on_sale!!!"]');
}



add_action('woocommerce_after_add_to_cart_form','all_categories');
function all_categories()
{
    echo do_shortcode('[acf field="all_categories"]');
}