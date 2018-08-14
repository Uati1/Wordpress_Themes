<?php get_header(); ?>

	<section class="showcase">
		<div class="my-slider">
			<ul>
			<?php $slides= new WP_Query(array(
				'category_name' => 'slideshow',
				'orderby' => 'date',
				'order' => 'ASC'
			)); ?>

			<?php while($slides->have_posts()): $slides->the_post(); ?>
			<li>
				<?php the_post_thumbnail(); ?>
				<div class="caption">
					<h2><?php the_title(); ?></h2>
					<p><?php the_content(); ?></p>
				</div>
			</li>
			<?php endwhile; ?>
			</ul>
		</div>
	</section>

	<section>
      <div class="wrap wider">
        <div class="grid">
          <div id="tabs">
            <ul>
			<?php $tabsq= new WP_Query(array(
				'category_name' => 'tabs',
				'orderby' => 'date',
				'order' => 'ASC'
			)); ?>
			<?php while($tabsq->have_posts()): $tabsq->the_post(); ?>
              <li><a href="#<?php the_ID(); ?>"><?php the_title(); ?></a></li>
			  <?php endwhile; ?>
            </ul>
			<?php while($tabsq->have_posts()): $tabsq->the_post(); ?>
            <div id="<?php the_ID(); ?>">
              <h3><?php the_title(); ?></h3>
              <p><?php the_content(); ?></p>
            </div>
			<?php endwhile; ?>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="wrap wider">
        <div class="grid">
          <div class="post-wrap">

			<?php $query= new WP_Query(array(
				'category__not_in' => array(15,16),
				'orderby' => 'date',
				'order' => 'ASC'
			)); ?>
			<?php while($query->have_posts()): $query->the_post(); ?>
				<article class="post">
				  <div class="unit one-third post-thumb">
					<?php the_post_thumbnail(); ?>
				  </div>
				  <div class="unit two-thirds">
					<h3><?php the_title(); ?></h3>
					<p><?php the_excerpt(); ?></p>
					<a href="<?php the_permalink(); ?>" class="button">Read More</a>
				  </div>
				</article>
			<?php endwhile; ?>
          </div>
        </div>
      </div>
    </section>
<?php get_footer(); ?> 