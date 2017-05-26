<?php
function typical_title() { // функция вывода тайтла
	global $page, $paged; // переменные пагинации должны быть глобыльными
	wp_title('', true, 'right'); // вывод стандартного заголовка с разделителем "|"
	//bloginfo('name'); // вывод названия сайта
	$site_description = get_bloginfo('description', 'display'); // получаем описание сайта
	if ($site_description && (is_home() || is_front_page())) //если описание сайта есть и мы на главной
		echo " | $site_description"; // выводим описание сайта с "|" разделителем
	if ($paged >= 2 || $page >= 2) // если пагинация была использована
		echo '  '.sprintf(__( 'Страница %s'), max($paged, $page)); // покажем номер страницы с "|" разделителем
}
function wptuts_opengraph_for_posts() {
    if ( is_singular() ) {
        global $post;
        setup_postdata( $post );
        $output = '<meta property="og:type" content="article" />' . "\n";
        $output .= '<meta property="og:title" content="' . esc_attr( get_the_title() ) . '" />' . "\n";
        $output .= '<meta property="og:url" content="' . get_permalink() . '" />' . "\n";
        $output .= '<meta property="og:description" content="' . strip_tags( get_the_excerpt() ) . '" />' . "\n";
        if ( has_post_thumbnail() ) {
            $imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'medium' );
            $output .= '<meta property="og:image" content="' . $imgsrc[0] . '" />' . "\n";
        }
        echo $output;
    }
}
add_action( 'wp_head', 'wptuts_opengraph_for_posts' );

function theme_register_nav_menu() {
	register_nav_menu( 'header_menu', 'Header Menu' );
	register_nav_menu( 'footer_menu', 'Footer Menu' );
}
add_action( 'after_setup_theme', 'theme_register_nav_menu' );

/**
	* menu *
**/
class Bootstrap_Walker_Nav_Menu extends Walker_Nav_Menu {
 
  /**
   * Display Element
   */
  function display_element( $element, &$children_elements, $max_depth, $depth, $args, &$output ) {
    $id_field = $this->db_fields['id'];
 
    if ( isset( $args[0] ) && is_object( $args[0] ) )
    {
      $args[0]->has_children = ! empty( $children_elements[$element->$id_field] );
 
    }
 
    return parent::display_element( $element, $children_elements, $max_depth, $depth, $args, $output );
  }
 
  /* Start Element */
  function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
    if ( is_object($args) && !empty($args->has_children) )
    {
      $link_after = $args->link_after;
      $args->link_after = '';
    }
 
    parent::start_el($output, $item, $depth, $args, $id);
 
    if ( is_object($args) && !empty($args->has_children) )
      $args->link_after = $link_after;
  }
 
  /* Start Level */
  function start_lvl( &$output, $depth = 0, $args = array() ) {
    $indent = str_repeat("t", $depth);
    $output .= "\n$indent<ul class=\"dropdown-menu\">\n";
  }
}
add_filter('nav_menu_link_attributes', function($atts, $item, $args) {
  if ( $args->has_children )
  {
    $atts['class'] = 'dropdown-toggle';
  }
 
  return $atts;
}, 10, 3);

add_theme_support('post-thumbnails'); // включаем поддержку миниатюр
set_post_thumbnail_size(370, 265); // задаем размер миниатюрам 250x150

// Ограничение выводимых слов
function do_excerpt($string, $word_limit) {
	$string = strip_tags($string);
	$words = explode(' ', $string, ($word_limit + 1));
	if (count($words) > $word_limit)
	array_pop($words);
	return implode(' ', $words);
}
//slider
add_action('init', 'my_custom_init_slider');
function my_custom_init_slider(){
  $labels = array(
	'name'               => 'Slider',
	'singular_name'      => 'Slider',
	'menu_name'          => 'Slider',
	'name_admin_bar'     => 'Slider',
	'add_new'            => 'Add Slide',
	'add_new_item'       => 'Add Slide',
	'new_item'           => 'New Slide',
	'edit_item'          => 'Edit Slide',
	'view_item'          => 'Show Slide',
	'all_items'          => 'All slide',
	'search_items'       => 'Search Slide',
	'parent_item_colon'  => 'Parent Slide',
	'not_found'          => 'Slide no search',
	'not_found_in_trash' => 'Slide no search'
  );
  $args = array(
	'labels' => $labels,
	'public' => true,
	'publicly_queryable' => true,
	'show_ui' => true,
	'show_in_menu' => true,
	'menu_position' => 22,
	'menu_icon' => 'dashicons-images-alt',
	'query_var' => true,
	'rewrite' => true,
	'capability_type' => 'page',
	'has_archive' => false,
	'hierarchical' => false,
	'supports' => array('title', 'editor', 'thumbnail', 'custom-fields')
  );
  register_post_type('slider',$args);
}
//html теги в описании рубрик
remove_filter('pre_term_description', 'wp_filter_kses');
remove_filter('pre_term_description', 'wp_kses_data');

/*/отключение расстановки тегов параграфов start 
remove_filter('the_content', 'wpautop');     //записи
remove_filter('the_excerpt', 'wpautop');     //цитаты
remove_filter('comment_text', 'wpautop');    //комментарии
//отключение расстановки тегов параграфов end */
?>