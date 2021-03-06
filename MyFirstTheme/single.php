<?php get_header();?>
<div class='container'>
	<div class='main'>
			<?php if(have_posts()) : ?>
				<?php while(have_posts()): the_post(); ?>
					<article class="post">
					<h3><?php the_title(); ?></h3>
					<div class='meta'>
						Created by <?php the_author();?> on <?php the_time('F j, Y g:i a'); ?>
					</div>
					<?php if(has_post_thumbnail()) : ?>
						<div class='post_thumbnail'>
							<?php the_post_thumbnail(); ?>
						</div>
					<?php endif; ?>
					<?php the_content();?>
					</article>
				<?php endwhile; ?>
			<?php else :
				echo wpautop("no posts found");
			endif; ?>
	</div>
<?php get_footer(); ?>