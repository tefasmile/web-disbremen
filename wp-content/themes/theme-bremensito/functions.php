<?php

//Esta es la funcion que activa las imagenes destacadas
add_theme_support('post-thumbnails');

//Esta es la funcion que añade un tamaño extra de imagen
//dar opciones de cambio en imagenes en tamaño
add_image_size('my-size',200,180, true);


//Esta es la funcion que llama al menu
//Registro de un solo menu
function register_my_menus() {
	//otra formas de hacerlo: register_nav_menu('header-nav', __('Header Navigation'));1 opcion
	register_nav_menus( array(
		'menu-header' => __( 'Menu encabezado'),
		'menu-footer' => __( 'Menu footer') 
	) ); 
}
add_action('init', 'register_my_menus');

//Esta es la funcion que añade un sidebar
function miplugin_register_sidebar(){
	register_sidebar(
		array(
			'id' => 'sidebar-footer',
			'name' => 'sidebar del footer',
			'description' => 'Sidebar donde colocar links del footer',
			'before_widget' => '<div class="sidebar__item">',
			'after_widget'=> '</div>',
			'before_title' => '<strong>',
			'after_title' => '</strong>'
			)

	);
}
add_action('widgets_init', 'miplugin_register_sidebar');

function miplugin_register_sidebar2(){
	register_sidebar(
		array(
			'id' => 'sidebar-header',
			'name' => 'sidebar header',
			'description' => 'Sidebar texto y calendario',
			'before_widget' => '<div class="sidebar__item">',
			'after_widget'=> '</div>',
			'before_title' => '<strong>',
			'after_title' => '</strong>'
			)

	);
}
add_action('widgets_init', 'miplugin_register_sidebar2');
