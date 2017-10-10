<?php

add_theme_support('post-thumbnails');

if (function_exists('add_image_size')) {
	add_image_size('mapping-featured', 585, 500, true);
	add_image_size('mapping-normal', 280, 360, true);
}

register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'geonet' ),
) );

// Register Custom Navigation Walker
require_once('wp_bootstrap_navwalker.php');

// add sidebar
register_sidebars(1, array(
	'name'          => "Sidebar 1",
	'id'            => "sidebar-1",
	'description'   => 'Main sidebar',
	'class'         => '',
	'before_widget' => '<div id="%1$s" class="widget %2$s">',
	'after_widget'  => "</div>\n",
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => "</h2>\n",
) );


?>
