<?php
function bwt_addmenus() {
	register_nav_menus(
		array(
			'main_nav' => 'The Main Menu',
		)
	);
}
add_action( 'init', 'bwt_addmenus' );

function bwt_nav_class($classes, $item){
	 if (in_array('current-menu-item', $classes) or in_array('current-page-ancestor', $classes))
		$classes[] = 'active';
     return $classes;
}
add_filter('nav_menu_css_class' , 'bwt_nav_class' , 10 , 2);

function bwt_widgets_init() {
	register_sidebar( array(
		'name' => __( 'Main Sidebar', 'bwt' ),
		'id' => 'sidebar-1',
		'description' => __( 'Appears on posts and pages except the optional Front Page template, which has its own widgets', 'bwt' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
}
add_action( 'widgets_init', 'bwt_widgets_init' );
