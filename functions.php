<?php

if ( ! class_exists( 'Timber' ) ) {
	add_action( 'admin_notices', function() {
			echo '<div class="error"><p>Timber not activated. Make sure you activate the plugin in <a href="' . esc_url( admin_url( 'plugins.php#timber' ) ) . '">' . esc_url( admin_url( 'plugins.php' ) ) . '</a></p></div>';
		} );
	return;
}

Timber::$dirname = array('templates', 'views');

class StarterSite extends TimberSite {

	function __construct() {
		add_theme_support( 'post-formats' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'menus' );
		add_filter( 'timber_context', array( $this, 'add_to_context' ) );
		add_filter( 'get_twig', array( $this, 'add_to_twig' ) );
		add_action( 'init', array( $this, 'register_post_types' ) );
		add_action( 'init', array( $this, 'register_taxonomies' ) );
		parent::__construct();
	}

	function register_post_types() {
		//this is where you can register custom post types
	}

	function register_taxonomies() {
		//this is where you can register custom taxonomies
	}

	function add_to_context( $context ) {
		$context['menu'] = new TimberMenu('main');
		$context['site'] = $this;

		$context['posts'] = Timber::get_posts();
		$context['pagination'] = Timber::get_pagination();

		$context['grid'] = [ ['src'=>'http://placehold.it/350x150', 'alt'=>'Alt desc',
		                      'link'=>'http://coderdojo.org','target'=>'_blank'],
		                     ['src'=>'http://placehold.it/350x150', 'alt'=>'Alt desc 2',
		                      'link'=>'http://coderdojo.org', 'target'=>'_self'],
		                     ['src'=>'http://placehold.it/350x150', 'alt'=>'Alt desc 2',
		                      'link'=>'http://coderdojo.org', 'target'=>'_self'],
		                     ['src'=>'http://placehold.it/350x150', 'alt'=>'Alt desc 2',
		                      'link'=>'http://coderdojo.org', 'target'=>'_self'],
		                     ['src'=>'http://placehold.it/350x150', 'alt'=>'Alt desc 2',
		                      'link'=>'http://coderdojo.org', 'target'=>'_self'],
		                     ['src'=>'http://placehold.it/350x150', 'alt'=>'Alt desc 2',
		                      'link'=>'http://coderdojo.org', 'target'=>'_self'],
		                     ['src'=>'http://placehold.it/350x150', 'alt'=>'Alt desc 2',
		                      'link'=>'http://coderdojo.org', 'target'=>'_self'],
		                     ['src'=>'http://placehold.it/350x150', 'alt'=>'Alt desc 2',
		                      'link'=>'http://coderdojo.org', 'target'=>'_self'],
		                     ['src'=>'http://placehold.it/350x150', 'alt'=>'Alt desc 2',
		                      'link'=>'http://coderdojo.org', 'target'=>'_self'],
		                     ['src'=>'http://placehold.it/350x150', 'alt'=>'Alt desc 2',
		                      'link'=>'http://coderdojo.org', 'target'=>'_self'],
		                     ['src'=>'http://placehold.it/350x150', 'alt'=>'Alt desc 2',
		                      'link'=>'http://coderdojo.org', 'target'=>'_self'],
		                     ['src'=>'http://placehold.it/350x150', 'alt'=>'Alt desc 2',
		                      'link'=>'http://coderdojo.org', 'target'=>'_self']
		                  ];

		$context['teamimages'] = [ ['src'=>'http://placehold.it/125x125', 'alt'=>'Alt desc',
														 'link'=>'http://coderdojo.org','target'=>'_blank','name'=>'Name', 'role'=>'Role'],
														['src'=>'http://placehold.it/125x125', 'alt'=>'Alt desc 2',
														 'link'=>'http://coderdojo.org', 'target'=>'_self','name'=>'Name', 'role'=>'Role'],
													  ['src'=>'http://placehold.it/125x125', 'alt'=>'Alt desc 2',
														 'link'=>'http://coderdojo.org', 'target'=>'_self','name'=>'Name', 'role'=>'Role'],
														['src'=>'http://placehold.it/125x125', 'alt'=>'Alt desc 2',
												     'link'=>'http://coderdojo.org', 'target'=>'_self','name'=>'Name', 'role'=>'Role'],
														['src'=>'http://placehold.it/125x125', 'alt'=>'Alt desc 2',
												  	 'link'=>'http://coderdojo.org', 'target'=>'_self','name'=>'Name','role'=>'Role'],
														['src'=>'http://placehold.it/125x125', 'alt'=>'Alt desc 2',
														 'link'=>'http://coderdojo.org', 'target'=>'_self','name'=>'Name','role'=>'Role'],
														['src'=>'http://placehold.it/125x125', 'alt'=>'Alt desc 2',
														 'link'=>'http://coderdojo.org', 'target'=>'_self','name'=>'Name','role'=>'Role'],
														['src'=>'http://placehold.it/125x125', 'alt'=>'Alt desc 2',
														 'link'=>'http://coderdojo.org', 'target'=>'_self','name'=>'Name','role'=>'Role'],
														['src'=>'http://placehold.it/125x125', 'alt'=>'Alt desc 2',
														 'link'=>'http://coderdojo.org', 'target'=>'_self','name'=>'Name','role'=>'Role']
													];
		$context['boardimages'] = [ ['src'=>'http://placehold.it/125x125', 'alt'=>'Alt desc',
													 	'link'=>'http://coderdojo.org','target'=>'_blank','name'=>'Name', 'role'=>'Role'],
													 ['src'=>'http://placehold.it/125x125', 'alt'=>'Alt desc 2',
													 	'link'=>'http://coderdojo.org', 'target'=>'_self','name'=>'Name', 'role'=>'Role'],
													 ['src'=>'http://placehold.it/125x125', 'alt'=>'Alt desc 2',
													 	'link'=>'http://coderdojo.org', 'target'=>'_self','name'=>'Name', 'role'=>'Role'],
													 ['src'=>'http://placehold.it/125x125', 'alt'=>'Alt desc 2',
													  'link'=>'http://coderdojo.org', 'target'=>'_self','name'=>'Name', 'role'=>'Role'],
													 ['src'=>'http://placehold.it/125x125', 'alt'=>'Alt desc 2',
														'link'=>'http://coderdojo.org', 'target'=>'_self','name'=>'Name','role'=>'Role'],
													 ['src'=>'http://placehold.it/125x125', 'alt'=>'Alt desc 2',
														'link'=>'http://coderdojo.org', 'target'=>'_self','name'=>'Name','role'=>'Role']
													];

		$context['gridtitle'] = "Categories";
		$context['team'] = "Meet the Team";
		$context['board'] = "Meet the Board";

		$context['categories'] = Timber::get_terms('category');
		return $context;
	}

	function myfoo( $text ) {
		$text .= ' bar!';
		return $text;
	}

	function add_to_twig( $twig ) {
		/* this is where you can add your own fuctions to twig */
		$twig->addExtension( new Twig_Extension_StringLoader() );
		$twig->addFilter('myfoo', new Twig_SimpleFilter('myfoo', array($this, 'myfoo')));
		return $twig;
	}

}

new StarterSite();
