<?php

require_once get_template_directory() . '/Menu.php';

add_action( 'wp_enqueue_scripts', 'end_mystyle' );
add_action('after_setup_theme', 'setup_theme');
add_filter('excerpt_more', function($more) {
    return '...';
});

function end_mystyle()
{

    wp_enqueue_style('bootstrap.min', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style('animate.css', get_template_directory_uri() . '/css/animate.css');
    wp_enqueue_style('owl.carousel.min.css', get_template_directory_uri() . '/css/owl.carousel.min.css');
    wp_enqueue_style('themify-icons.css', get_template_directory_uri() . '/css/themify-icons.css');
    wp_enqueue_style('flaticon.css', get_template_directory_uri() . '/css/flaticon.css');
    wp_enqueue_style('magnific-popup.css', get_template_directory_uri() . '/css/magnific-popup.css');
    wp_enqueue_style('slick.css', get_template_directory_uri() . '/css/slick.css');
    wp_enqueue_style('all.css', get_template_directory_uri() . '/css/all.css');
    wp_enqueue_style('style.css', get_template_directory_uri() . '/css/style.css');


    wp_deregister_script( 'jquery' );
    wp_register_script('jquery', get_template_directory_uri() .'/js/jquery-1.12.1.min.js', [], '', true);
    wp_enqueue_script( 'jquery' );

    wp_enqueue_script( 'popper.min.js', get_template_directory_uri() . '/js/popper.min.js', array('jquery'), '', true );
    wp_enqueue_script( 'bootstrap.min.js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '', true );
    wp_enqueue_script( 'jquery.magnific-popup.js', get_template_directory_uri() . '/js/jquery.magnific-popup.js', array('jquery'), '', true );
    wp_enqueue_script( 'swiper.min.js', get_template_directory_uri() . '/js/swiper.min.js', array('jquery'), '', true );
    wp_enqueue_script( 'masonry.pkgd.js', get_template_directory_uri() . '/js/masonry.pkgd.js', array('jquery'), '', true );
    wp_enqueue_script( 'owl.carousel.min.js', get_template_directory_uri() . '/js/owl.carousel.min.js', array('jquery'), '', true );
    wp_enqueue_script( 'jquery.counterup.min.js', get_template_directory_uri() . '/js/jquery.counterup.min.js', array('jquery'), '', true );
    wp_enqueue_script( 'waypoints.min.js', get_template_directory_uri() . '/js/waypoints.min.js', array('jquery'), '', true );
    wp_enqueue_script( 'owl.carousel2.thumbs.min.js', get_template_directory_uri() . '/js/owl.carousel2.thumbs.min.js', array('jquery'), '', true );
    wp_enqueue_script( 'slick.min.js', get_template_directory_uri() . '/js/slick.min.js', array('jquery'), '', true );
    wp_enqueue_script( 'custom.js', get_template_directory_uri() . '/js/custom.js', array('jquery'), '', true );

}

function setup_theme(){

    register_nav_menus( array(
        'header_menu' => 'Для шапки',
    ) );

    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'title-tag' );

}

function bluerex_widgets_init() {
//    register_sidebar( array(
//        'name'          => esc_html__( 'Footer Left', 'Mrocks' ),
//        'id'            => 'sidebar-footer1',
//        'description'   => esc_html__( 'Add widgets here.', 'Mrocks' ),
//        'before_widget' => '<div id="%1$s" class="widget %2$s col-6">',   // %2$s - класс, который будет генерировать номер виджета
//        'after_widget'  => '</div>',
//        'before_title'  => '<h5>',
//        'after_title'   => '</h5>',
//    ) );
//
//    register_sidebar( array(
//        'name'          => esc_html__( 'Footer Right', 'Mrocks' ),
//        'id'            => 'sidebar-footer2',
//        'description'   => esc_html__( 'Add widgets here.', 'Mrocks' ),
//        'before_widget' => '<div id="%1$s" class="widget %2$s">',   // %2$s - класс, который будет генерировать номер виджета
//        'after_widget'  => '</div>',
//    ) );

    register_sidebar( array(
        'name'          => esc_html__( 'Tag-title', 'Mrocks' ),
        'id'            => 'tag-title',
        'description'   => esc_html__( 'Add tag-title.', 'Mrocks' ),
        'before_widget' => '<aside id="%1$s" class="single_sidebar_widget tag_cloud_widget">',   // %2$s - класс, который будет генерировать номер виджета
        'after_widget'  => '</aside>',
        'before_title'  => '<h4 class="widget_title">',
        'after_title'   => '</h4>',
    ) );

    register_sidebar( array(
        'name'          => esc_html__( 'Category', 'Mrocks' ),
        'id'            => 'sidebar-widgets',
        'description'   => esc_html__( 'Add category here.', 'Mrocks' ),
        'before_widget' => '<aside id="%1$s" class="single_sidebar_widget post_category_widget %2$s">',   // %2$s - класс, который будет генерировать номер виджета
        'after_widget'  => '</aside>',
        'before_title'  => '<h4 class="widget_title">',
        'after_title'   => '</h4>',
    ) );
	
	register_sidebar( array(
        'name'          => esc_html__( 'Text footer', 'Mrocks' ),
        'id'            => 'text-footer',
        'description'   => esc_html__( 'Add textto footer here.', 'Mrocks' ),
        'before_widget' => '',  
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => '',
    ) );
}
add_action( 'widgets_init', 'bluerex_widgets_init' );



add_action('init', 'bluerex_reviews'); // функция bluerex_reviews цепляется на хук init
function bluerex_reviews(){
    register_post_type('reviews', array(
        'labels'             => array( // ярлыки
            'name'               => 'Отзывы',
            'singular_name'      => 'Отзыв',
            'add_new'            => __('Добавить новый отзыв', 'bluerex'),
            'add_new_item'       => __('Новый отзыв', 'bluerex'),
            'edit_item'          => __('Редактировать', 'bluerex'),
            'new_item'           => __('Новый отзыв', 'bluerex'),
            'view_item'          => __('Посмотреть', 'bluerex'),
            'menu_name'          => 'Отзывы клиентов',
            'all_items'          => 'Все отзывы',
        ),
        'public'             => true, // определяет является ли тип записи публичным или нет - мы данный тип записи делаем видимым
        'supports'           => array('title','editor','thumbnail'), // то, что будет доступно для данного типа записи
        'menu_icon'          => 'dashicons-universal-access', // иконка, которая может быть назначена для данного пункта меню
        'show_in_rest' => true, // чтобы был не старый редактор, а новый - Gutenberg
    ) );


    // удаляет H2 из шаблона пагинации
    add_filter('navigation_markup_template', 'my_navigation_template', 10, 2 );
    function my_navigation_template( $template, $class ){
        /*
        Вид базового шаблона:
        <nav class="navigation %1$s" role="navigation">
            <h2 class="screen-reader-text">%2$s</h2>
            <div class="nav-links">%3$s</div>
        </nav>
        */

        return '
	<nav class="blog-pagination justify-content-center d-flex %1$s" role="navigation">
		<div class="nav-links">%3$s</div>
	</nav>    
	';
    }


}


add_filter('comment_form_fields', 'kama_reorder_comment_fields' ); // Изменить порядок вывода полей
function kama_reorder_comment_fields( $fields ){
    // die(print_r( $fields )); // посмотрим какие поля есть

    $new_fields = array(); // сюда соберем поля в новом порядке

    $myorder = array('author','email','url','comment'); // нужный порядок

    foreach( $myorder as $key ){
        $new_fields[ $key ] = $fields[ $key ];
        unset( $fields[ $key ] );
    }

    // если остались еще какие-то поля добавим их в конец
    if( $fields )
        foreach( $fields as $key => $val )
            $new_fields[ $key ] = $val;

    return $new_fields;
}

function getPostViews($postID){
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0 View";
    }
    return $count.' View';
}
function setPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}

function wpspec_excude_category( $query ) {
	if ( ! is_admin() && $query->is_main_query() ) {
		if ( $query->is_home() ) {
			$query->set( 'cat', '-9, -7' ); // ID рубрики со знаком минус
		}
	}
}

add_action( 'pre_get_posts', 'wpspec_excude_category' );


?>