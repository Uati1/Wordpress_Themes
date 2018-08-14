<?php get_header(); ?>

<?php while(have_posts()): the_post(); ?>
	<section class="bar">
      <div class="wrap wider">
        <div class="grid">
          <h1><?php the_title(); ?></h1>
        </div>
      </div>
    </section>

	<section>
      <div class="wrap wider">
        <div class="grid">
          <div class="post-wrap">
              <article class="post post-thumb">            
                <?php if(has_post_thumbnail()) : ?>
					<?php the_post_thumbnail(); ?>
				<?php endif; ?>
				<?php if(is_active_sidebar('sidebar')) : ?>
					<div class="unit two-thirds">
				<?php endif; ?>

					<div class="meta">
						Posted by
							<a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
									<?php the_author(); ?>
							</a>
						on <?php the_time('F j, Y g:i a'); ?>
						in
							<?php
								$categories = get_the_category();
								$separator = ", ";
								$output = '';

								if($categories){
									foreach($categories as $category){
									$output .= '<a href="'.get_category_link($category->term_id).'">'.$category->cat_name .'</a>'. $separator;

									}
								}
								echo trim($output, $separator);
							?>
					</div>
                    <p><?php the_content(); ?></p>
					</div>
					<?php if(is_active_sidebar('sidebar')) : ?>
						<div class="unit one-third">
							<?php dynamic_sidebar('sidebar'); ?>
						</div>
					<?php endif; ?>
				 </article>
          </div>
        </div>
      </div>
    </section>
	<?php endwhile; ?>
<?php get_footer(); ?> 