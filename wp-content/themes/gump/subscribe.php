<?php
/**
 * The Template for displaying all single posts.
 *
 * @package gump
 * @since gump 1.0
 */

get_header(); ?>














<?php 
/* Template Name: Subscribe To Comments */
if (isset($wp_subscribe_reloaded)){ global $posts; $posts = $wp_subscribe_reloaded->subscribe_reloaded_manage(); } 
?>










</div>




	<?php get_sidebar(); ?>

<?php get_footer(); ?>