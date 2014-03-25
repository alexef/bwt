<?php get_header(); ?>
    
	<div class="row">
		<div class="col-md-2" id="sidebar">
            <div class="menu">
            <?php
                wp_nav_menu(array('menu_class'=>'nav', 'menu'=>'main_nav', 'container' => false));
            ?>
            </div>

            <?php get_sidebar(); ?>
		</div>
		<div class="col-md-10" id="content">
			<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post(); ?>
				<h2><?php the_title(); ?></h2>
				<?php the_content(); ?>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>

<?php get_footer(); ?>
