<?php

// Action qui permet de charger des scripts dans notre thème
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/css/theme.css'));
}

//mise en place du hook pour Admin

add_filter('wp_nav_menu_items','add_admin_link', 10, 1);
function add_admin_link($items){
//$items: les 2 menus "nous rencontrer" et "commander"
  if(is_user_logged_in()){
  
                // si connexion de l'utlilisateur
                $position= strpos ( $items, '<li', 10 ); 
                $items = substr($items, 0, $position) . '<li class="menu-item"><a class="menu-admin" href="'. get_site_url() .'/wp-admin/">Admin</a></li>' . substr($items, $position);
                
    }
    //file_put_contents('test.txt', $items, FILE_APPEND);
   // file_put_contents('test.txt', '***************************', FILE_APPEND);
        return $items;    
}

    ?> 
    