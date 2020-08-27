<?php

class Menu extends Walker_Nav_Menu // будем наследоваться от класса alker_Nav_Menu
{
    /*
	 * Позволяет перезаписать <ul class="sub-menu">
	 */
    public function start_lvl( &$output, $depth = 0, $args = array() ) { // – используется для формирования начала уровня. Т.е. если у нас открывается новый, то мы начинаем его формировать. По сути открывается блок ul.

        $output .= "<ul class=\"dropdown-menu animated\">";         // для вложенного тега ul
    }
    /**
     * @see Walker::start_el()
     * @since 3.0.0
     *
     * @param string $output
     * @param object $item Объект элемента меню, подробнее ниже.
     * @param int $depth Уровень вложенности элемента меню.
     * @param object $args Параметры функции wp_nav_menu
     */
    public function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) { // вызывается для начала формирования ссылки, т.е. грубо говоря, мы открываем тег li, начинаем формировать ссылку, end_el() – формирует закрывающие теги ссылки. Т.е. li необходимо закрыть, ссылочку необходимо закрыть.

        // echo '<pre>' .print_r($item) . '</pre>';
        if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
            $t = '';
            $n = '';
        } else {
            $t = "\t";
            $n = "\n";
        }
        $indent = ( $depth ) ? str_repeat( $t, $depth ) : '';

        /*
		 * Генерируем строку с CSS-классами элемента меню
		 */

        $classes[] = ($args->walker->has_children) ? 'dropdown' : '';
        $classes[] = 'nav-item'; // добавляем для тега li класс nav-item

        /*
            * current - равен 1, если является текущим элементом
            * current_item_ancestor - равен 1, если текущим (открытым на сайте) является вложенный элемент данного
        */
        $classes[] = ($item->current || $item->current_item_anchestor) ? 'active' : '';

        // или так можно переписать:
        //if($item->current) $classes[] = 'active'; // добавляем класс active для активного пункта меню. Если у объекта item и его свойства current значение равно true - т.е.1, то в массив $classes[] мы дописываем еще один класс active

        if( $depth && $args->walker->has_children ){
            $classes[] = 'dropdown-menu'; // добаляем класс: dropdown-menu для тега ul
        }
        /**
         * Filters the arguments for a single nav menu item.
         *
         * @since 4.4.0
         *
         * @param stdClass $args  An object of wp_nav_menu() arguments.
         * @param WP_Post  $item  Menu item data object.
         * @param int      $depth Depth of menu item. Used for padding.
         */
        $args = apply_filters( 'nav_menu_item_args', $args, $item, $depth );

        /**
         * Filters the CSS class(es) applied to a menu item's list item element.
         *
         * @since 3.0.0
         * @since 4.1.0 The `$depth` parameter was added.
         *
         * @param array    $classes The CSS classes that are applied to the menu item's `<li>` element.
         * @param WP_Post  $item    The current menu item.
         * @param stdClass $args    An object of wp_nav_menu() arguments.
         * @param int      $depth   Depth of menu item. Used for padding.
         */

        // функция join превращает массив в строку
        $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args, $depth ) );
        $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';


        /**
         * Filters the ID applied to a menu item's list item element.
         *
         * @since 3.0.1
         * @since 4.1.0 The `$depth` parameter was added.
         *
         * @param string   $menu_id The ID that is applied to the menu item's `<li>` element.
         * @param WP_Post  $item    The current menu item.
         * @param stdClass $args    An object of wp_nav_menu() arguments.
         * @param int      $depth   Depth of menu item. Used for padding.
         */

        /*
		 * Генерируем ID элемента
		 */

        $id = apply_filters('nav_menu_item_id', 'menu-item-'.$item->ID, $item, $args);
        $id = strlen( $id ) ? ' id="' . esc_attr( $id ) . '"' : '';

        /*
            * Генерируем элемент меню
        */

        $output .= $indent . '<li '  . $value . $class_names . $li_attributes . '>'; // после li должен быть пробел и чтобы id не выводить мы убрали   .$id

        $atts = array();

        // атрибуты элемента, title="", rel="", target="" и href=""

        $atts['title']  = ! empty( $item->attr_title ) ? $item->attr_title : '';
        $atts['target'] = ! empty( $item->target )     ? $item->target     : '';
        $atts['rel']    = ! empty( $item->xfn )        ? $item->xfn        : '';
        $atts['href']   = ! empty( $item->url )        ? $item->url        : '';

        /**
         * Filters the HTML attributes applied to a menu item's anchor element.
         *
         * @since 3.6.0
         * @since 4.1.0 The `$depth` parameter was added.
         *
         * @param array $atts {
         *     The HTML attributes applied to the menu item's `<a>` element, empty strings are ignored.
         *
         *     @type string $title  Title attribute.
         *     @type string $target Target attribute.
         *     @type string $rel    The rel attribute.
         *     @type string $href   The href attribute.
         * }
         * @param WP_Post  $item  The current menu item.
         * @param stdClass $args  An object of wp_nav_menu() arguments.
         * @param int      $depth Depth of menu item. Used for padding.
         */
        $atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args, $depth );

        // для элемента меню a, который имеет детей
        $attributes .= ( $args->walker->has_children ) ? ' class="nav-link dropdown-toggle" data-toggle="dropdown"' : ' class="nav-link"';

        foreach ( $atts as $attr => $value ) {
            if ( ! empty( $value ) ) {
                $value = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
                $attributes .= ' ' . $attr . '="' . $value . '"';
            }
        }

        /** This filter is documented in wp-includes/post-template.php */
        $title = apply_filters( 'the_title', $item->title, $item->ID );

        /**
         * Filters a menu item's title.
         *
         * @since 4.4.0
         *
         * @param string   $title The menu item's title.
         * @param WP_Post  $item  The current menu item.
         * @param stdClass $args  An object of wp_nav_menu() arguments.
         * @param int      $depth Depth of menu item. Used for padding.
         */
        $title = apply_filters( 'nav_menu_item_title', $title, $item, $args, $depth );

        // ссылка и околоссылочный текст (для тега а внутри выпадающего меню)

        $item_output = $args->before;
        $item_output .= ( $depth > 0 ) ? '<a class="nav-link"' . $attributes . '>' : '<a' . $attributes . '>';
        $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
        $item_output .= '</a>';
        $item_output .= $args->after;

        /**
         * Filters a menu item's starting output.
         *
         * The menu item's starting output only includes `$args->before`, the opening `<a>`,
         * the menu item's title, the closing `</a>`, and `$args->after`. Currently, there is
         * no filter for modifying the opening and closing `<li>` for a menu item.
         *
         * @since 3.0.0
         *
         * @param string   $item_output The menu item's starting HTML output.
         * @param WP_Post  $item        Menu item data object.
         * @param int      $depth       Depth of menu item. Used for padding.
         * @param stdClass $args        An object of wp_nav_menu() arguments.
         */
        $output .= apply_filters ( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
    }

}