<?php

function theme_styles(){

wp_enqueue_style( 'normalize' ,  get_template_directory_uri() . '/css/normalize.css');
wp_enqueue_style( 'grid' ,  get_template_directory_uri() . '/css/grid.css');
wp_enqueue_style( 'main' ,  get_template_directory_uri() . '/style.css');
wp_enqueue_style( 'googlefonts' , 'http://fonts.googleapis.com/css?family=Open+Sans');
wp_enqueue_style( 'googlefonts2' , 'http://fonts.googleapis.com/css?family=Roboto');

wp_register_style( 'flexslider' ,  get_template_directory_uri() . '/css/flexslider.css');
if( is_page('home')){
	wp_enqueue_style('flexslider');
}
}

function theme_js(){

	wp_register_script('flexslider' ,  get_template_directory_uri() . '/js/flexslider.js' , array('jquery'), '', true );
	if( is_page('home')){
	wp_enqueue_script('flexslider');
}

	wp_enqueue_script('theme_js' ,  get_template_directory_uri() . '/js/theme.js' , array('jquery'), '', true );
    wp_enqueue_script('theme2_js' ,  get_template_directory_uri() . '/js/theme2.js' , array('jquery'), '', true );
	wp_enqueue_script('jquery_js' ,  get_template_directory_uri() . '/js/jquery-1.10.2.min.js' , array('jquery'), '', true );
	wp_enqueue_script('jqueryui' ,"http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/jquery-ui.min.js", array('jquery'), '', true );
	/*wp_enqueue_script('app_js' ,  get_template_directory_uri() . '/js/app.js' , array('jquery'), '', true );*/
	
}

add_action('wp_enqueue_scripts', 'theme_js');

add_action ( 'wp_enqueue_scripts', 'theme_styles');




//Enable custom menus

add_theme_support('menus');
add_theme_support('post-thumbnails');

Function create_widget( $name, $id, $description){
$args = array(
	'name'          => __( $name),
	'id'            => $id,
	'description'   => $description,
	'before_widget' => '',
	'after_widget'  => '',
	'before_title'  => '<h5>',
	'after_title'   => '</h5>' 
); 

register_sidebar( $args );

}


create_widget('Left Footer', "footer_left", "Displays in the bottom left of footer");
create_widget('Middle Footer', "footer_middle", "Displays in the bottom middle of footer");
create_widget('Right Footer', "footer_right", "Displays in the bottom right of footer");
?>