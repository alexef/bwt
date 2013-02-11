<?php get_header(); ?>
    
	<div class="row-fluid">
		<div class="span3">
			<?php get_sidebar(); ?>
		</div>
		<div class="span9">
			<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post(); ?>
				<h2><?php the_title(); ?></h2>
				<?php the_content(); ?>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>

<?php get_footer(); ?>
