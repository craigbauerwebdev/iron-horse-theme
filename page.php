<?php get_header(); ?>
<?php if ( have_posts() ) : while (have_posts() ) : the_post(); ?>
<div id="main-content" class="inner">
	<h1 id="main_title"><?php the_title(); ?></h1>
		<?php the_content(); ?>
	<?php endwhile; else: ?>
		<p>There are no posts available.</p>
	<?php endif; ?>
</div>
<?php get_footer(); ?>