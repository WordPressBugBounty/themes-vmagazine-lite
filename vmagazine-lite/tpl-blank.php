<?php 
/**
* Template Name: Blank Page
*
*
*/
get_header(); 

while ( have_posts() ) : the_post();
	the_content();
endwhile;
wp_reset_postdata();

get_footer();
