<?php

function register_theme_menus() {
  register_nav_menus(
    array(
        'primary-menu' => __('Primary Menu'),
        'individual-menu' => __('Individual Menu')
      )
  );
}

add_action('init', 'register_theme_menus');

function wp_theme_styles() {
  wp_enqueue_style( 'main_css', get_template_directory_uri() . '/css/bundle.css');
  wp_enqueue_style( 'google_fonts', "https://fonts.googleapis.com/css?family=Ubuntu|Merriweather");
}

add_action('wp_enqueue_scripts', 'wp_theme_styles');

function wp_theme_js(){
  wp_enqueue_script('parallax_js', get_template_directory_uri() . '/js/parallax.js', array(), '', true);
  wp_enqueue_script('tweenmax_min_js', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.2/TweenMax.min.js', array(), '', true);
  wp_enqueue_script('scrollmagic_min_js', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js', array(), '', true);
  wp_enqueue_script('animation_gsap_js', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/animation.gsap.js', array(), '', true);
  wp_enqueue_script('scrollto_js', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.2/plugins/ScrollToPlugin.min.js', array(), '', true);
  wp_enqueue_script('addIndicators', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.min.js', array(), '', true);
  wp_enqueue_script('common_js', get_template_directory_uri() . '/js/common.js', array('jquery'), '', true);
  $page = is_single();
  if(!$page){
  wp_enqueue_script('index_js', get_template_directory_uri() . '/js/index.js', array('jquery'), '', true);
  }else{
    wp_enqueue_script('individual_js', get_template_directory_uri() . '/js/individual.js', array('jquery'), '', true);
  }
}

add_action('wp_enqueue_scripts', 'wp_theme_js');

?>