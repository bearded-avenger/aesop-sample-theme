<?php

class ASTScriptLoader {

	public function __construct(){

		add_action('wp_enqueue_scripts', array($this,'styles'));

	}

	public function styles(){
		wp_enqueue_style('ast-style', AST_THEME_URL.'/style.css', AST_THEME_VERSION, true);
		wp_enqueue_script('ast-script', AST_THEME_URL.'/js/aesoptheme.js', array('jquery'),AST_THEME_VERSION, true);
	}

}
new ASTScriptLoader;



