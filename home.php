<?php get_header(); ?>
	<?php if ( have_posts() ) : while (have_posts() ) : the_post(); ?>
		<div id="listing">
		<a class="blog-title" href="<?php the_permalink(); ?>"><h1 class="blog-title"><?php the_title(); ?></h1></a>
		<div id="featured">
			<a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail(); ?>
			</a>
		</div>
		<ul id="post-meta">
			<li>Posted in: <?php the_category(', '); ?></li>
			<li>Written By: <a class="post-meta" href="about"><?php the_author(); ?></a></li>
			<li>On: <?php the_time( 'F j, Y' ); ?></li>
		</ul>
		<?php the_excerpt(); ?> 
		<a href="<?php the_permalink(); ?>"><p>Read More...</p></a>
		</div>
	<?php endwhile; else: ?>
		<p>There are no posts available.</p>
	<?php endif; ?>
	<div id="sidebar-widget">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar Widgets') ) : ?> 
		<?php endif; ?> 
	</div> 
<?php get_footer(); ?>