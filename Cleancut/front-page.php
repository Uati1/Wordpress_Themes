<?php get_header(); ?>
    <section class="row showcase animated fadeIn">
	    <div class="container">
		    <div class="col-md-12">
			    <div class="showcase-content">
				    <h1><?php echo get_theme_mod('showcase_heading'); ?></h1>
				    <p class="lead"><?php echo get_theme_mod('showcase_text'); ?></p>
				    <?php if(get_theme_mod('facebook_url') != '') : ?>
						<a class="btn btn-default btn-lg" href="<?php echo get_theme_mod('facebook_url'); ?>" target="_blank"><i class="fa fa-facebook fa-fw"></i> Facebook</a>
					<?php endif; ?>
					<?php if(get_theme_mod('facebook_url') != '') : ?>
						<a class="btn btn-default btn-lg" href="<?php echo get_theme_mod('twitter_url'); ?>" target="_blank"><i class="fa fa-twitter fa-fw"></i> Twitter</a>
				    <?php endif; ?>
					<?php if(get_theme_mod('facebook_url') != '') : ?>
						<a class="btn btn-default btn-lg" href="<?php echo get_theme_mod('linkedin_url'); ?>" target="_blank"><i class="fa fa-linkedin fa-fw"></i> Linkedin</a>
					<?php endif; ?>
			   </div>
		    </div>
	    </div>
    </section>

	<?php $latest = new WP_Query(array(
		'posts_per_page' => 3,
		'tax_query' => array(array(
			'taxonomy' => 'post_format',
			'field' => 'slug',
			'terms' => array(
				'post-format-aside',
				'post-format-gallery'
			),
			'operator' => 'NOT IN'
			)
		)
	));

	$i=0;

	if($latest-> have_posts()) : while($latest-> have_posts()): $latest->the_post(); 
		$i++;
		if($i % 2 != 0){
                $section_class = 'section-a';
                $left_class = 'col-lg-5 col-sm-6 animated fadeInLeft';
                $right_class = 'col-lg-5 col-lg-offset-2 col-sm-6';
                $img_class = 'img-circle img-responsive animated fadeInRight';
            } else {
                $section_class = 'section-b';
                  $left_class = 'col-lg-5 col-lg-offset-1 col-sm-push-6  col-sm-6 animated fadeInRight';
                  $right_class = 'col-lg-5 col-sm-pull-6  col-sm-6';
                  $img_class='img-responsive img-circle animated fadeInLeft';
                    }
	?>
		<div class="<?php echo $section_class; ?>">
			<div class="container">
				<div class="row">
					<div class="<?php echo $left_class; ?>">
						<hr class="section-heading-spacer">
						<div class="clearfix"></div>
						<h2 class="section-heading"><?php the_title(); ?></h2>
						<div class="excerpt"><p class="lead"><?php the_excerpt(); ?></p></div>
					</div>
					<div class="<?php echo $right_class; ?>">
                        <?php the_post_thumbnail('full', array(
                            'class' => $img_class
                        )); ?>
                    </div>
				</div>
			</div>
		</div>
	<?php endwhile; endif; ?>

    

<?php get_footer(); ?>