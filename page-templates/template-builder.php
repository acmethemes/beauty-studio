<?php
/**
 * Template Name: AT Builder Page
 *
 * @link https://developer.wordpress.org/themes/template-files-section/page-template-files/
 *
 * @package Acme Themes
 * @subpackage Beauty Studio
 */
get_header();
$beauty_studio_customizer_all_values = beauty_studio_get_theme_options();

while ( have_posts() ) :
	the_post();

	the_content();

endwhile; // End of the loop.

get_footer();
