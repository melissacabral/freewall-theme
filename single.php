<?php get_header();  //include header.php ?>
<main id="content">
	
	<?php //THE LOOP
	if( have_posts() ): while( have_posts() ): the_post(); ?>
	<article <?php post_class(); ?>>
		<?php the_post_thumbnail( 'large' ); ?>
		
		<h1><?php echo $count;?> <?php  the_title(); ?></h1>
		<?php the_content(); ?>

	</article>
<?php endwhile; ?>
<?php else: ?>
	Sorry, no posts found!
<?php endif; //END OF THE LOOP ?>
</main><!-- end #content -->
<?php get_sidebar(); //include sidebar.php ?>
<?php get_footer(); //include footer.php ?>