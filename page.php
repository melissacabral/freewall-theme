<?php get_header(); ?>
<main id="content">
	
	<?php //THE LOOP
	if( have_posts() ): while( have_posts() ): the_post(); ?>
	<article <?php post_class(); ?>>
		<?php the_post_thumbnail( 'large' ); ?>
		
		<h1><?php  the_title(); ?></h1>
		<?php the_content(); ?>
		<?php wp_link_pages(); ?>
		
	</article>
<?php endwhile; ?>
<?php else: ?>
	Sorry, no posts found!
<?php endif; //END OF THE LOOP ?>
</main>
<?php get_sidebar();  ?>
<?php get_footer();  ?>