<?php
// Exit if accessed directly

use Elementor\Core\Admin\UI\Components\Button;

if (!defined('ABSPATH')) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if (!function_exists('chld_thm_cfg_locale_css')) :
    function chld_thm_cfg_locale_css($uri)
    {
        if (empty($uri) && is_rtl() && file_exists(get_template_directory() . '/rtl.css'))
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter('locale_stylesheet_uri', 'chld_thm_cfg_locale_css');

if (!function_exists('chld_thm_cfg_parent_css')) :
    function chld_thm_cfg_parent_css()
    {
        wp_enqueue_style('chld_thm_cfg_parent', trailingslashit(get_template_directory_uri()) . 'style.css', array());
    }
endif;
add_action('wp_enqueue_scripts', 'chld_thm_cfg_parent_css', 10);

add_filter('wp_nav_menu_items', 'add_admin_link', 10, 2);

function add_admin_link($items, $args)
{
    if (is_user_logged_in() ) {
        $items .= '<li><a href="' . get_admin_url() . '">Admin</a></li>';
    }

    return $items;
}

add_filter( 'wp_nav_menu_items', 'move_admin_menu_item', 10, 2 );
function move_admin_menu_item( $items, $args ) {
    // Vérifiez si l'utilisateur est connecté
    if ( is_user_logged_in() ) {
        // Trouvez la position de l'élément "Admin" dans la liste
        $admin_position = strpos( $items, 'class="menu-item admin-item"' );

        // Si l'élément "Admin" est trouvé, déplacez-le après le premier élément
        if ( false !== $admin_position ) {
            $items = substr_replace( $items, 'class="menu-item admin-item"', $admin_position, 0 );
        }
    }

    return $items;
}


// END ENQUEUE PARENT ACTION
