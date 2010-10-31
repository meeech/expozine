<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>
<div class="bd yui3-u-3-4"> 
	<div class="content">
<?php //echo fetchSponsors(); ?>
<?php //echo fetchExhibitors(); ?>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="entry-content">
						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>
						<?php edit_post_link( __( 'Edit' ), '<span class="edit-link">', '</span>' ); ?>
					</div><!-- .entry-content -->
				</div><!-- #post-## -->

<?php endwhile; ?>
<?php 
if(2010 == the_title('','',false)) {
    echo fetchExhibitors( get_current_language() );
} 
?>

	</div><!-- .content -->
</div><!-- .bd -->
<div class="sidebar yui3-u-1-4">
    <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
