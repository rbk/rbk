<?php get_header(); ?>

<?php if( have_posts() ) : ?>

<?php while( have_posts() ) : the_post(); ?>

	<article>
		<div class="wrap">
			<h1 class="title">
				<span class="title-text"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span>
				<span class="date">
					<span class="month"><?php the_time('M'); ?></span>
					<span class="day"><?php the_time('d'); ?></span>
					<span class="year"><?php the_time('Y') ?></span>
				</span>
			</h1>
			<div class="content">
				<?php the_excerpt(); ?>
			</div>
			<div class="links">
				<a href="<?php the_permalink(); ?>">Continue reading</a>
			</div>
		</div>
	</article>
<?php endwhile; ?>

<?php else:  ?>
	<div class="wrap">
		<h1>There are posts at this time.</h1>
		<br><br><br>
	</div>
<?php endif; ?>


<?php get_footer(); ?>