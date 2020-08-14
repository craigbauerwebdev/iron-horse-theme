<?php 
/* 
	Template Name: About Page Template
*/
get_header(); ?>
<?php if ( have_posts() ) : while (have_posts() ) : the_post(); ?>
<div id="main-content" class="inner">
	<h1 id="main_title"><?php the_title(); ?></h1>
    <div class="about-wrapper clearfix">
        <div class="left">
            <div class="about-left-inner">
                <?php the_content(); ?>
            </div>
        </div>
        <div class="right">
            <?php echo do_shortcode( '[insta-gallery id="0"]' ); ?>
        </div>
    </div>
	<?php endwhile; else: ?>
		<p>There are no posts available.</p>
	<?php endif; ?>
</div>
<?php get_footer(); ?>