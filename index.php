<?php
/*
 * Default Template for blog or category/archive pages.
 *
 * Index - home - front-page
 */
?>
<?php get_header(); ?>
<?php if( have_posts() ) : ?>
<?php while( have_posts() ) : the_post(); ?>
	<article>
		<div class="wrap">
			<h1 class="title">
				<span class="title-text"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span>
      </h1>
      <div class="entry-meta"><h4><?php the_date(); ?></h4></div>
			<div class="content">
				<?php the_content(); ?>
			</div>
		</div>
	</article>
<?php endwhile; ?>
<?php else:  ?>
	<div class="wrap">
		<blockquote>The only way to get ahead is to get started.</blockquote>
	</div>
<?php endif; ?>
<?php get_footer(); ?>
