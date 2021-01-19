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
 * @subpackage your-project
 * @since 1.0.0
 */

get_header();

if ( have_posts() ) {

	// Load posts loop.
	while ( have_posts() ) {
    the_post();
    echo '<h2>' . get_the_title() . '</h2>';
    the_excerpt();
    echo '<a href="' . get_the_permalink() . '">Read more</a>';
	}

} else {

	// If no content

	echo 'Nothing found';

}

get_footer();
