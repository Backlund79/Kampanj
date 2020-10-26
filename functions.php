<?php

add_theme_support('post-thumbnails');

function register_my_menus()
{
    register_nav_menus(
        array(
      'header-menu' => __('Header Menu'),
      'extra-menu' => __('Extra Menu')
    )
    );
}
add_action('init', 'register_my_menus');


//***********************
//Funktion för att ladda CSS styleing
//***********************
function load_stylesheets()
{
    wp_register_style('font_awesome', 'https://pro.fontawesome.com/releases/v5.10.0/css/all.css', array(), false, 'all');
    wp_enqueue_style('font_awesome');

    wp_register_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css', array(), false, 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('style', get_template_directory_uri() . '/assets/css/style.css', array(), false, 'all');
    wp_enqueue_style('style');
}

//***********************
//Funktion för att avregistrera den begränsade jquery som följer med wordpress och ladda in senaste versionen.
//***********************
function include_jquery()
{
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.5.1.slim.min.js', array(), null, false);

    add_action('wp_enqueue_scripts', 'jquery');
}

//***********************
//Funktion för att ladda in JavaScript
//***********************
function loadJs()
{
    wp_register_script('bs', 'https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js', array(), null, false);
    wp_enqueue_script('bs');
}

add_action('wp_enqueue_scripts', 'load_stylesheets'); //Kör Funktionen för att ladda in .css filer
add_action('wp_enqueue_scripts', 'include_jquery'); //Kör funktion för att ladda in jquery
add_action('wp_enqueue_scripts', 'loadJs'); //Kör funktion för att ladda in Javascript
