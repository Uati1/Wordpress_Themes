<?php get_header(); ?>
	
	<section class="title-section">
      <p class="welcome-text">Welcome To</p>
      <h1>Gallery</h1>
    </section>

	<section class="gallery">

		<?php $gallery= new WP_Query(array(
				'category_name' => 'gallery'
			));

			while($gallery->have_posts()): $gallery->the_post(); 
		?>
      
      <div class="large-4 small-12 columns">
            <a href="<?php the_permalink(); ?>">
              <?php the_post_thumbnail('full', array('class' => 'hvr-grow')); ?>
            </a>
      </div>

		<?php endwhile; ?>
    </section>
   
<?php get_footer(); ?>
