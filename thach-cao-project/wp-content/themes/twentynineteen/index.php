<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_header();
get_template_part( 'components/slider', '' );
get_template_part( 'components/iconbox', '' );
get_template_part( 'components/about', '' );
get_template_part( 'components/services', '' );
get_template_part( 'components/project', '' );
get_template_part( 'components/iconbox', 'background' );
get_template_part( 'components/testimonials', '' );
get_template_part( 'components/quote', '' );
get_template_part( 'components/tabs', '' );
get_template_part( 'components/partner', '' );
get_footer();
