<?php
function register_sidebar_in_wordpress() {
	register_sidebar( array(
		'name'          => __('Copyright', 'textdomain'),
		'id'            => 'copyright',
		'description'   => __('This widget will show you the copyright information.', 'textdomain' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'register_sidebar_in_wordpress' );

// Calling of sidebars
if(is_active_sidebar('copyright')):
  dynamic_sidebar('copyright');
endif;
?>
