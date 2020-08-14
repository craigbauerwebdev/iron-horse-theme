<!DOCTYPE html>
<html>
	<head>	
		<!--[if IE]>
		  <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<title>
		<?php
			wp_title('-', true, right);
			//bloginfo('name');
		?>
		</title>
		<?php /*include'mobile-script.php';*/ ?>
	<!-- Mobile Device Support -->
		<meta name="viewport" content="width=device-width, , user-scalable=no" />
		
		<?php wp_head(); ?>
	</head>
        <body <?php body_class(); ?>>
			<header>
				<div class="top-bar">
					<div class="inner squash full-width">845-499-1813</div>
				</div>
				<div class="inner full-width">		
					<div id="logo">
						<a href="<?php echo bloginfo('url'); ?>">
							<img src="<?php echo get_template_directory_uri(); ?>/images/logo-landscape.jpg" />
						</a>
					</div>
					<?php get_template_part('nav', 'main'); ?>
					<?php get_template_part('social', 'icons'); ?>
					<?php include'nav-mobile.php'; ?>
				</div>
		</header>


<?php
if (is_page('contact')) { ?>
 
	<div>

<?php } else { ?>

<div id="content-wrap" class="group">
<div id="content" class="group p-bottom"> 
<?php } ?>