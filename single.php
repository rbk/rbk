<?php/*

	Template: Single posts


*/?>
<?php get_header(); ?>
<?php while( have_posts() ) : the_post(); ?>
	<article>
		<div class="wrap">
			<h1 class="title">
				<span><?php the_title(); ?></span>
			</h1>
			<div class="entry-meta"><h4><?php the_date(); ?></h4></div>
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
