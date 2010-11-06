<?php
/**
 * Template Name: Links
 * The template for displaying Links pages.
 *
 * @package WordPress
 * @subpackage Expozine
 * @since expozine 1.0
 */

get_header(); ?>
<div class="bd yui3-u-3-4"> 
	<div class="content">
        <?php wp_list_bookmarks( ) ?>
	</div><!-- .content -->
</div><!-- .bd -->
<div class="sidebar yui3-u-1-4">
    <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
