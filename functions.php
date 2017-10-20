<?php
    function afficher_titre(){
      add_theme_support('title_tag');
    }
    add_action('after_setup_theme','afficher_titre');

    function ajout_style(){
      wp_enqueue_style('site', get_stylesheet_uri());
      wp_enqueue_style('commun',get_template_directory_uri().'/style/commun.css');
    }
    add_action('wp_enqueue_scripts','ajout_style');
