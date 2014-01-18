<?php

class ASTFunctions {

	function __construct(){

		// Set some constants
		define('AST_THEME_VERSION', '0.1');

		define('AST_THEME_DIR', get_template_directory());
		define('AST_THEME_URL', get_template_directory_uri());

		require_once(AST_THEME_DIR.'/inc/scripts.php');
		require_once(AST_THEME_DIR.'/inc/aesopmeta.php');
		require_once(AST_THEME_DIR.'/inc/styles.php');

				// Custom Nav Menus
		if ( function_exists( 'register_nav_menus' ) ){
			$this->nav();
		}


		// Run the rest
		add_action('after_theme_setup', 				array($this,'theme_supports'));

	}
	function nav(){

		register_nav_menus(
			array(
			  'main_nav' => 'Main Nav'
			)
		);

	}

	public function theme_supports(){
		add_theme_support( 'post-thumbnails' );
	}

}
new ASTFunctions;



