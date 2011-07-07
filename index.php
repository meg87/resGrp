<?php get_header(); ?>
<div id="content">
	<?php while(have_posts()): the_post() ?>
		<?php
			if(is_single())
			{?>
				<div class="post">
					<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					<small>By <?php echo get_the_author(); ?> on <?php echo the_date('j F Y'); ?></small>
					<div class="post-content"><?php the_content(); ?></div>
					<div class="metadata">
						<br /><?php echo get_the_tag_list('<b>Tags:</b> ', ', ', '') ?>
					</div>
				</div>
				<?php comments_template(); ?>
			<?php }
			else
			{ ?>
				<div class="post">
					<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					<div class="post-content"><?php the_content(); ?></div>
				</div>
			<?php } ?>
	<?php endwhile; ?>	
	<div class="pagebar">
		<span class="previous"><?php previous_posts_link(); ?></span>
		<span class="next"><?php next_posts_link(); ?></span>
	</div>
</div>
<?php get_footer(); ?>
