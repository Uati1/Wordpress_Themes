<?php get_header();?>
<div class='container'>
	<div class='main'>
			<?php if(have_posts()) : ?>
				<?php while(have_posts()): the_post(); ?>
					<article class="post">
					<h3><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h3>
					<div class='meta'>
						Created by <a href='<?php get_author_posts_url(get_the_author_meta('ID'));?>'>
							<?php the_author();?>
						</a>
						on <?php the_time('F j, Y g:i a'); ?>
					</div>
					<?php if(has_post_thumbnail()) : ?>
						<div class='post_thumbnail'>
							<?php the_post_thumbnail(); ?>
						</div>
					<?php endif; ?>
					<?php the_excerpt();?>
					<br>
					<a class='button' href="<?php the_permalink(); ?>">
						Read more
					</a>
					</article>
				<?php endwhile; ?>
			<?php else :
				echo wpautop("no posts found");
			endif; ?>
			<?php comments_template(); ?>
	</div>
<?php get_footer(); ?>