<?php

add_action('admin_menu', 'prvi_menu_item');
function prvi_menu_item(){
	add_menu_page(
		'Page Title',
		'Menu title',
		'administrator',
		'menu_slug',
		'menu_callback',
		'dashicons-buddicons-replies',
		'1'
	);
	add_submenu_page(
		'menu_slug',
		'Submenu page title',
		'Submenu title',
		'administrator',
		'submenu_slug',
		'submenu_callback',
		'1'
	);
}

function menu_callback(){
	echo "Hello World";
}

function submenu_callback(){
	echo "Hello World Submenu";
}