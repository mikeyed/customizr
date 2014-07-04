<?php
/**
* This is where you can copy and paste your functions !
*/


//creates widget objects
function create_widget( $name, $id, $desc, $class ) {
	$args = array(
		'name'          => __( $name ),
		'id'            => $id,
		'description'   => $desc,
		'class'         => $class,
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>' ); 
	
	register_sidebar( $args );
	
}

create_widget( 'bannerSidebar', 'banner_right', 'Displayed next to slider images where possible', 'meta');
