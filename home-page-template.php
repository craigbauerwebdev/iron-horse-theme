<?php
	/* 
	Template Name: Home Page Template
	*/
	get_header(); ?>

        <div id="main-content" class="inner">
            <img width="100%" src="<?php echo get_template_directory_uri(); ?>/images/bonito.jpg" />
            <?php if ( have_posts() ) : while (have_posts() ) : the_post(); ?>
                <h1 id="main_title"><?php the_title(); ?></h1>
                    <?php the_content(); ?>
            <?php endwhile; else: ?>
                <p>There are no posts available.</p>
            <?php endif; ?>
        </div>

<?php get_footer();?>