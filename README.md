# thach-cao
```
// Menu
class Custom_Menu_Top_Walker extends Walker_Nav_Menu {
    function start_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = ( $depth > 0  ? str_repeat( "\t", $depth ) : '' ); // code indent
		$display_depth = ( $depth + 1); // because it counts the first submenu as 0
		// var_dump($depth);

        $classes = array(
			( $depth == -1 ? '' : 'dropdown-menu' ),
        );
        $class_names = implode( ' ', $classes );
 
        // Build HTML for output.
        $output .= "\n" . $indent . '<ul class="' . $class_names . '">' . "\n";
    }
 
    function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
        global $wp_query;
		$indent = ( $depth > 0 ? str_repeat( "\t", $depth ) : '' ); 
        $depth_classes = array(
			( $args->walker->has_children && $depth == 0 ? 'has-dropdown' : '' ),
			( $args->walker->has_children && $depth > 0 ? 'dropdown-submenu' : '' ),
			( $item->current || $item->current_item_ancestor || $item->current_item_parent  ? 'active' : '' ),
        );
        $depth_class_names = esc_attr( implode( ' ', $depth_classes ) );
 
        // Passed classes.
		$classes = empty( $item->classes ) ? array() : (array) $item->classes;
		// $class_names = in_array("current_page_item",$item->classes) ? ' active' : '';
        $class_names = esc_attr( implode( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) ) );
 
        // Build HTML.
        $output .= $indent . '<li class="' . $depth_class_names . '">';
 
        // Link attributes.
        $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
        $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
        $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
		$attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';

		// link parent not click 
		// $attributes .= ' data-toggle="' . ( $args->walker->has_children ? 'dropdown' : '' ) . '" class="' . ( $args->walker->has_children ? 'dropdown-toggle' : '' ) . '"';
        $attributes .= '" class="' . ( $args->walker->has_children ? 'dropdown-toggle' : '' ) . '"';
 
        // Build HTML output and pass through the proper filter.
        $item_output = sprintf( '%1$s<a%2$s>%3$s%4$s%5$s</a>%6$s',
            $args->before,
            $attributes,
            $args->link_before,
            apply_filters( 'the_title', $item->title, $item->ID ),
            $args->link_after,
            $args->after
        );
        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
    }
}

<?php wp_nav_menu( array(
    'theme_location' => 'top',
    // 'menu' => 'main',
    'container'=> false, 
    'menu_id'=> false, 
    'menu_class'	 => 'nav navbar-nav navbar-left',
    'walker' => new Custom_Menu_Top_Walker()
  )); 
?>

// Tag

<?php 
  $tags = get_tags();
  foreach ( $tags as $tag ) {
    $tag_link = get_tag_link( $tag->term_id );
    echo "<a href='/tag/?title={$tag->name}'>{$tag->name}</a>";
  }
?>


$s_tag = '';
if(isset($_GET['title']))
$s_tag = $_GET['title'];
$the_query = new WP_Query( 
  array( 
      'post_type' => array('san_pham','tin_tuc','du_an'),
      'tag' => $s_tag ) 
  );

<h2>Từ khóa: <?php echo $_GET['title']; ?></h2>

<?php if ( $the_query->have_posts() ) : 
      echo '<div class="row show-product">';
      while ( $the_query->have_posts() ) : $the_query->the_post(); 
      get_template_part( 'template-parts/post/content', 'excerpt' );
  ?>
  <?php
endwhile;
wp_reset_postdata();
      echo '</div>'; 
  else : 
      echo '<p>Không tìm thấy kết quả nào</p>';
  endif; 

```
