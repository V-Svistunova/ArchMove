<?php

// Переменные для путей
define('THEME_ROOT', get_template_directory_uri() );
define('CSS_DIR', THEME_ROOT . '/assets/css');
define('JS_DIR', THEME_ROOT . '/assets/js');
define('LIBS_DIR', THEME_ROOT . '/assets/libs');
define('IMG_DIR', THEME_ROOT . './assets/images');

// подключаем стили и скрипты
add_action( 'wp_enqueue_scripts', 'archmove_style' );
add_action( 'wp_enqueue_scripts', 'archmove_scripts' );

function archmove_style() {
	wp_enqueue_style( 'style-main', get_stylesheet_uri() );
	
	wp_enqueue_style( 'style-normalize', CSS_DIR . '/normalize.css' );
  wp_enqueue_style( 'style-magnific', LIBS_DIR . '/magnific-popup/magnific-popup.css' );
  
}

function archmove_scripts() {
  wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'https://code.jquery.com/jquery-3.6.0.min.js' );
	wp_enqueue_script( 'jquery' );
  
  wp_enqueue_script( 'script-magnific', LIBS_DIR . '/magnific-popup/jquery.magnific-popup.min.js', array(jquery), 'null', true );
  wp_enqueue_script( 'script-slick', LIBS_DIR . '/slick/slick.min.js', array(jquery), 'null', true );
  wp_enqueue_script( 'script-main', JS_DIR . '/index.js', array(jquery), 'null', true );

}