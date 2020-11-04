<?php
	/*****
		Plugin Name: my first plugin
		Plugin URI: http://here will be url of gib hub/other site where your plugin resides
		Description: This is not just a plugin, it symbolizes the hope and enthusiasm of an entire generation summed up in two words sung most famously by Louis Armstrong: Hello, Dolly. When activated you will randomly see a lyric from <cite>Hello, Dolly</cite> in the upper right of your admin screen on every page.
		Author: ShivInfoTeach
		Version: 1.0
		Author URI: http://here will be my sites url/fb links/install links etc
	*/

if(! defined('ABSPATH')){
    define('ABSPATH',dirname(__FILE__) .'/');
}

define("DBP_DIR",dirname(__FILE__) );
define("DBP_URL",plugins_url('',__FILE__) );

add_action('admin_menu','addAdminMenu');   //add menu
add_action('admin_menu','addAdminSubMenu');   //add menu
add_action('admin_enquque_scripts','adminStyles');
add_action('admin_enquque_scripts','adminScripts'); 

function adminStyles(){
    wp_enquque_Style('DBP_style',DBP_url  .'/assets/css/styles.css');
}

function addAdminMenu(){
    add_menu_page(
        'pageTitle',
        'MenuTitle',
        'manage_options',
        'menu_slug',
        'add_frontend_page'
    );
}
function addAdminSubMenu(){
    add_submenu_page(
        'menu_slug',
        'pageTitle',
        'MenuTitle',
        'manage_options',
        'menu_slug',
        'add_frontend_page'
    );
}
function add_frontend_page(){
    include('includes/form.php');
}
/*include( plugin_dir_path( __FILE__ ) . 'includes/movie-content.php' );

function tutsplus_register_post_type() {
     
    // movies
    $labels = array( 
        'name' => __( 'Movies' , 'tutsplus' ),
        'singular_name' => __( 'Movie' , 'tutsplus' ),
        'add_new' => __( 'New Movie' , 'tutsplus' ),
        'add_new_item' => __( 'Add New Movie' , 'tutsplus' ),
        'edit_item' => __( 'Edit Movie' , 'tutsplus' ),
        'new_item' => __( 'New Movie' , 'tutsplus' ),
        'view_item' => __( 'View Movie' , 'tutsplus' ),
        'search_items' => __( 'Search Movies' , 'tutsplus' ),
        'not_found' =>  __( 'No Movies Found' , 'tutsplus' ),
        'not_found_in_trash' => __( 'No Movies found in Trash' , 'tutsplus' ),
    );
    $args = array(
        'labels' => $labels,
        'has_archive' => true,
        'public' => true,
        'hierarchical' => false,
        'supports' => array(
            'title', 
            'editor', 
            'excerpt', 
            'custom-fields', 
            'thumbnail',
            'page-attributes'
        ),
        'rewrite'   => array( 'slug' => 'movies' ),
        'show_in_rest' => true
 
    );
    register_post_type( 'shiv_movie', $args );
         
}

add_action( 'init', 'tutsplus_register_post_type' );


function tutsplus_register_taxonomy() {    
     
    // books
    $labels = array(
        'name' => __( 'Genres' , 'tutsplus' ),
        'singular_name' => __( 'Genre', 'tutsplus' ),
        'search_items' => __( 'Search Genres' , 'tutsplus' ),
        'all_items' => __( 'All Genres' , 'tutsplus' ),
        'edit_item' => __( 'Edit Genre' , 'tutsplus' ),
        'update_item' => __( 'Update Genres' , 'tutsplus' ),
        'add_new_item' => __( 'Add New Genre' , 'tutsplus' ),
        'new_item_name' => __( 'New Genre Name' , 'tutsplus' ),
        'menu_name' => __( 'Genres' , 'tutsplus' ),
    );
     
    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
        'sort' => true,
        'args' => array( 'orderby' => 'term_order' ),
        'rewrite' => array( 'slug' => 'genres' ),
        'show_admin_column' => true,
        'show_in_rest' => true
 
    );
     
    register_taxonomy( 'tutsplus_genre', array( 'shiv_movie' ), $args);
     
}
add_action( 'init', 'tutsplus_register_taxonomy' );



function tutsplus_movie_styles() {
    wp_enqueue_style( 'styles',  plugin_dir_url( __FILE__ ) . '/assets/css/styles.css' );                      
}
add_action( 'wp_enqueue_scripts', 'tutsplus_movie_styles' );*/