<?php 
function reach_widgets_init() {
    register_sidebar( array(
		'name' => 'Topbar',
		'id' => 'topbar',
		'before_widget' => '<div id="%1$s" class=" %2$s">',
		'after_widget' => '</div> <!-- end .widget -->',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	) );
}
add_action( 'widgets_init', 'reach_widgets_init' );
