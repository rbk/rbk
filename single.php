<?php/*

	Template: Single posts


*/?>
<?php get_header(); ?>




<?php while( have_posts() ) : the_post(); ?>

	<article>
		<div class="wrap">
			<h1 class="title">
				<span><?php the_title(); ?></span>
				<div class="single-line-date"><?php echo the_date(); ?></div>
			</h1>
			<div class="content">
				<?php the_content(); ?>
			</div>
			<div class="links">
				<a href="<?php echo home_url(); ?>">Go back</a>
			</div>
		</div>
	</article>
<?php endwhile; ?>


<?php get_footer(); ?>