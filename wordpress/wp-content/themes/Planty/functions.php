<?php

// Action qui permet de charger des scripts dans notre thème
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/css/theme.css'));
}

//mise en place du hook pour Admin 

 function theme_register_menus() {
    register_nav_menu('header_planty', 'appel_header');
}

//add_action('after_setup_theme', 'theme_register_menus');
 
add_filter('wp_nav_menu_items','add_admin_link', 10, 2);
function add_admin_link($items, $arg){
  if(
        is_user_logged_in()){
            //echo ($items .='<li><a href="'.get_admin_url() .'">Admin</a></li>');
$items='<ul id="menu-1-c010785" class="hfe-nav-menu"><li id="menu-item-17" class="menu-item menu-item-type-post_type menu-item-object-page parent hfe-creative-menu"><a href="http://planty/nous-rencontrer/" class = "hfe-menu-item">Nous rencontrer</a></li><li class="menu-item"><a class="menu-admin" href="'.get_admin_url() .'">Admin</a></li><li id="menu-item-16" class="menu-item menu-item-type-post_type menu-item-object-page parent hfe-creative-menu"><a href="http://planty/commander/" class = "hfe-menu-item">Commander</a></li>
</ul>';
 
        }
       
        file_put_contents('test.txt', $items, FILE_APPEND);
        
        
    return $items;
    }

    ?> 
    