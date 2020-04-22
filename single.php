<?php get_header(); ?>
	<?php if ( have_posts() ) : while (have_posts() ) : the_post(); ?>
		<div id="listing">
			<h1 class="blog-title"><?php the_title(); ?></h1>
			<div id="featured">
				<?php the_post_thumbnail(); ?>
			</div>
			<ul id="post-meta">
				<li>Posted in: <?php the_category(', '); ?></li>
				<li>Written By: <a class="post-meta" href="about"><?php the_author(); ?></a></li>
				<li>On: <?php the_time( 'F j, Y' ); ?></li>
			</ul>
			<?php the_content(); ?> 
			<?php comments_template(); ?>
			<div id="categories">
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar Widgets') ) : ?>  
				<?php endif; ?> 
			</div> 
		</div>
	<?php endwhile; else: ?>
		<p>There are no posts available.</p>
	<?php endif; ?>
<?php get_footer(); ?>