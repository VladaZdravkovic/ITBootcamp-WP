<?php
/**
 * Recommended way to include parent theme styles.
 * (Please see http://codex.wordpress.org/Child_Themes#How_to_Create_a_Child_Theme)
 *
 */  

 add_action( 'wp_enqueue_scripts', 'Divi_child_style' );
  function Divi_child_style() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css',array('parent-style'));
}

/**
 * Your code goes below.
 */

add_action('woocommerce_after_add_to_cart_form','dodaj_autora');
function dodaj_autora()
{
    echo do_shortcode('[acf field="ime_autora"]');
}

//Change the WooCommerce "Related products" text

add_filter('gettext', 'change_relatedproducts_text', 10, 3);

function change_relatedproducts_text($new_text, $related_text, $source)
{
     if ($related_text === 'Related products' && $source === 'woocommerce') {
         $new_text = esc_html__('Možda vam se dopadne', $source);
     }
     return $new_text;
}

// Change_cart

add_filter('gettext', 'change_cart', 10, 3);

function change_cart($new_text, $related_text, $source)
{
     if ($related_text === 'Product' && is_cart(26)) {
         $new_text = esc_html__('Proizvod', $source);
     }
     return $new_text;
}