<?php

function load_stylesheets(){
  wp_register_style('iPhone',get_template_directory_uri().'/css/iphone.css',array(),1,'all');
  wp_enqueue_style('iPhone');
  wp_register_style('desktop',get_template_directory_uri().'/css/style995_1.css',array(),1,'all');
  wp_enqueue_style('desktop');
}

add_action('wp_enqueue_scripts','load_stylesheets');

function load_scripts(){
  wp_register_script('slider',get_template_directory_uri().'/js/slider.js',array(),1,'all');
  wp_enqueue_script('slider');
  wp_register_script('answer',get_template_directory_uri().'/js/answer.js',array(),1,'all');
  wp_enqueue_script('answer');
  wp_register_script('feedback',get_template_directory_uri().'/js/feeback_click.js',array(),1,'all');
  wp_enqueue_script('feedback');
}

add_action('wp_enqueue_scripts','load_scripts');
?>	