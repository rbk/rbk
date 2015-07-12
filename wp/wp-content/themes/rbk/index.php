<?php get_header(); ?>

<?php if( have_posts() ) : ?>

<?php while( have_posts() ) : the_post(); ?>

	<article>
		<div class="wrap">
			<h1 class="title">
				<span class="title-text"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span>
				<span class="date">
					<span class="month"><?php echo date('M', strtotime( $post->post_date ) ); ?></span>
					<span class="day"><?php echo date('dS', strtotime( $post->post_date ) ); ?></span>
					<span class="year"><?php echo date('Y', strtotime( $post->post_date ) ); ?></span>
				</span>
			</h1>
			<div class="content">
				<?php the_content(); ?>
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
