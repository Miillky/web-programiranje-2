<?php
/*
Plugin Name: Demo
Plugin URI: https://vmilkovic.dev
Description: Prvi demo plugin .
Version: 1.0
Author: Vedran Milković
Author URI: https://vmilkovic.dev
*/


add_filter('admin_footer_text', 'dodaj_opis');
function dodaj_opis($text){
	return '<p style="color:red">Hvala vam što ste insalirali Demo plugin</p>' . $text;
}

add_action('admin_bar_menu', 'dodaj_custom_menu');
function dodaj_custom_menu(){
	global $wp_admin_bar;
	$custom_menu = array(
		'id' => 'demo_menu',
		'title' => 'Prvi plugin',
		'parent' => 'top-secondary',
		'href' => site_url()
	);
	$custom_sumbenu = array(
		'title' => 'Drugi plugin',
		'parent' => 'demo_menu',
		'href' => site_url()
	);
	$wp_admin_bar->add_node($custom_menu);
	$wp_admin_bar->add_node($custom_sumbenu);
}

require_once('settings.php');