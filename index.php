<?php
/**
 * The main template file.
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
		
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
			<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
			<?php the_content(); ?>
			
		
		
			<?php endwhile; else: ?>
			<p>Error</p>
		<?php endif; ?>
	

		</div><!-- #content -->
	</div><!-- #primary -->
<!--  sidebar *would* go here  -->
<?php get_footer(); ?>