<?php get_header();  ?>
<main id="content">	
	<?php if( have_posts() ): ?>
	<?php $count = 0; ?>
	<div id="container">
		<?php while( have_posts() ): the_post();
				//increase the counter
		$count++;
		switch($count){
		//just a handful of items to make small, these can be pretty random numbers
			case 3:
			case 5:
			case 6:
			case 11:
			case 7:
			case 10:
			$size = 'img-small'; //registered this in functions.php
			break;
		//a couple of long skinny ones
			case 2:
			case 8:
			$size = 'img-skinny';
			break;
		//the rest will be large
			default:
			$size = 'img-large'; //registered this in functions.php
		} 
	//get the image so we can use it in embedded style. this worked smoother than <img>
		$feat_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), $size );

		?>
		<div class="item <?php echo $size; ?>" style="background-image:url(<?php echo $feat_image[0]; ?>);">

			<a href="<?php the_permalink(); ?>">
				<h2><?php echo $count;?> <?php  the_title(); ?></h2>
			</a>
		</div>
	<?php endwhile; ?>
</div>	

<?php posts_nav_link() ?>
<?php else: ?>
	<p class="noposts">Sorry, no posts found!</p>
<?php endif; //END OF THE LOOP ?>
</main>
<?php get_sidebar();  ?>
<?php get_footer();  ?>