<?php
add_action('after_setup_theme', 'woocommerce_support');
add_theme_support('menus');



function my_login_stylesheet()
{
    wp_enqueue_style('custom-login', get_stylesheet_directory_uri() . '/css/login.css');
}
add_action('login_enqueue_scripts', 'my_login_stylesheet');

function my_login_logo_url()
{
    return home_url();
}
add_filter('login_headerurl', 'my_login_logo_url');

function my_login_logo_url_title()
{
    return 'Your Site Name and Info';
}
add_filter('login_headertext', 'my_login_logo_url_title');



add_filter('wp_nav_menu_items', 'login_logout_link', 10, 2);


function login_logout_link($items, $args)
{

    if (is_user_logged_in()) {
        $loginoutlink = wp_loginout('index.php', false);
        $items .= '<li class="menu-item login-but">' . $loginoutlink . '</li>';
        return $items;
    } else {
        $loginoutlink = wp_loginout('index.php', false);
        $items .= '<li class="menu-item login-but">' . $loginoutlink . '</li>';
        return $items;
    }
}


function woocommerce_support()
{
    add_theme_support('woocommerce');
}


remove_action('woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30);
remove_action('woocommerce_before_shop_loop', 'woocommerce_result_count', 20);

remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30);

remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_price', 10); ///

add_action('woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 30);

add_action('woocommerce_single_product_summary', 'make_price', 10);

remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40);

remove_action('woocommerce_simple_add_to_cart', 'woocommerce_after_quantity_input_field');
remove_action('woocommerce_simple_add_to_cart', 'woocommerce_product_meta_start');
remove_action('woocommerce_simple_add_to_cart', 'woocommerce_product_meta_end');


add_action('woocommerce_after_single_product_summary', 'make_hr', 5);
add_action('woocommerce_after_single_product_summary', 'make_hr', 15);
function make_hr()
{
    echo "<div class='woocommerce-tabs wc-tabs-wrapper'><hr></div>";
}

add_action('gc_price', 'woocommerce_template_single_price', 5);
add_action('gc_price', 'woocommerce_template_single_add_to_cart', 10);

function make_price()
{
    echo "<div class='my-price'>";
    do_action('gc_price');
    echo "</div>";
}

add_action('woocommerce_cart_collaterals', 'make_hr', 5);
