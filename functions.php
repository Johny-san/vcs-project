<?php
define('ASSETS_URL', get_template_directory_uri() . "/assets/");

function adding_scripts_and_styles(){
  wp_enqueue_style('reset', ASSETS_URL . "css/reset.css", true);
  wp_enqueue_style('style', ASSETS_URL . "css/style.css", true);
  wp_enqueue_style('slick-theme', ASSETS_URL . "slick-master/slick/slick-theme.css", true);
  wp_enqueue_style('slick-css', ASSETS_URL . "slick-master/slick/slick.css", true);
  wp_enqueue_style('fonts', ASSETS_URL . "fonts/stylesheet.css", true);
  wp_enqueue_style('fontawesome', ASSETS_URL . "fonts/fontawesome/css/font-awesome.min.css", true);


// if(!is_admin()){
  wp_enqueue_script('jquery', ASSETS_URL . "js/jquery-3.2.1.min.js", array('jquery'), true);
  wp_enqueue_script('slick-master', ASSETS_URL . "slick-master/slick/slick.min.js", array('jquery'), true);
  wp_enqueue_script('app', ASSETS_URL . "js/app.js", array('jquery'), true);
  
  // }

}
add_action('init', 'adding_scripts_and_styles');
//disabling admin bar
function disabling_admin_bar(){
  show_admin_bar(false);
}
//adding these supports
function add_theme_supports() {
  add_theme_support('menus');
  add_theme_support('menus-2');
  add_theme_support('custom-logo');
}
add_action('init', 'add_theme_supports');

// registering wordpress navigation menu_position
function registering_nav_menus(){
  register_nav_menus(array(
    'top-menu' =>__('This is the very top menu!'),
    'top-menu-2' =>__('This is the tab menu')
  ));
}
add_action('init', 'registering_nav_menus');
