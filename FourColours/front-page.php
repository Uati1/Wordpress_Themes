<?php get_header(); ?>

	<?php $featured= new WP_Query(array(
			'category_name'=>'featured'
		));

		$i=0;

		while($featured->have_posts()) : $featured->the_post(); 

		$i++;

		if($i%2!=0){
			$float='no-float';
		}else{
			$float='float-right';
		}
	?>

		<article class="post">
		  <div class="post-desc <?php echo $float; ?>">
			<span><?php the_time('F j, Y g:i a'); ?></span>
			<h3><?php the_title(); ?></h3>
			<p><?php the_excerpt(); ?></p>
			<h3><a href="<?php the_permalink(); ?>" class="read-btn read-more-btn hvr-bounce-out">Read More</a></h3>
		  </div>
		  <div class="post-img">
			<?php the_post_thumbnail('home-thumb'); ?>
		  </div>
		</article>

	<?php endwhile; ?>
   
<?php get_footer(); ?>
