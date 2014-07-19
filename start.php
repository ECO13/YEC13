<?php
/*
Your Embed Code by ECO13 (YEC:13)					a fork off Shortcodes 1.8.X
CMS:			Elgg 1.8.X					Elgg 1.8.X
author:			Axel Vanderhaeghen				Mohammed Aqeel
organisation:		ECO13						Team Webgalli
url:			http://r-evolutie.net				http://webgalli.com
licence:		GNU General Public License, version 3		GNU General Public License, version 2
copyright: 		2014 © ECO13					2011-2015 © Team Webgalli
*/

elgg_register_event_handler('init', 'system', 'yec13_init');

function yec13_init() {
	$root = dirname(__FILE__);
	// Shortcode processing library (from Wordpress)
	elgg_register_library('elgg:shortcodes', "$root/lib/shortcodes.php");	
	elgg_load_library('elgg:shortcodes');
	// Your Embed Code for Elgg
	elgg_register_library('elgg:yec13', "$root/lib/yec13.php");	
	elgg_load_library('elgg:yec13');
	// Extend JS and CSS for shortcode support
	elgg_extend_view('js/elgg', 'yec13/js');
	elgg_extend_view('css/elgg', 'yec13/css');
	// Process the shortcodes
	$views = array('output/longtext','river/item');
	foreach($views as $view){
		elgg_register_plugin_hook_handler("view", $view, "elgg_shortcode_filter", 1000);
	}	
	// Some plugin functions
	elgg_register_plugin_hook_handler('register', 'menu:longtext', 'shortcodes_longtext_menu');	
	elgg_register_page_handler('shortcodes', 'shortcodes_page_handler');
}

function elgg_shortcode_filter($hook, $entity_type, $returnvalue, $params){
	return elgg_do_shortcode($returnvalue);
}	

function shortcodes_longtext_menu($hook, $type, $items, $vars) {
	$url = 'shortcodes';
	$items[] = ElggMenuItem::factory(array(
		'name' => 'shortcodes',
		'href' => $url,
		'text' => elgg_echo('shortcodes:link'),
		'rel' => 'lightbox',
		'link_class' => "elgg-longtext-control elgg-lightbox",
		'priority' => 50,
	));
	elgg_load_js('lightbox');
	elgg_load_css('lightbox');
	return $items;
}
/**
 * Popup the content for the shortcodes help lightbox
 * @param array $page URL segments
 */
function shortcodes_page_handler($page) {
	echo elgg_view('yec13/list');
	exit;
}
