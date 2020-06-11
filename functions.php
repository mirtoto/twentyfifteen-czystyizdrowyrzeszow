<?php

/**
 * Register two widget areas.
 */
function twentyfifteen_child_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Site Keywords' , 'twentyfifteen' ),
		'id'            => 'site-keywords',
		'description'   => __('Add site keywords widgets here.' , 'twentyfifteen' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'twentyfifteen_child_widgets_init' );
