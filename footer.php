<?php if (is_page('contact')) { ?>
 
	</div>

<?php } else { ?>

	</div><!-- Close Content -->
</div><!-- Close Content Wrap -->
<?php } ?>
	<footer>
		<div class="inner">
			<div class="left">
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer1') ) : endif; ?>
			</div>
			<div class="right">
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer2') ) : endif; ?>
			</div>
			<hr />
			<p>Iron Horse Instruments &copy;<?php echo date( 'Y'); ?></p>
		</div>
	</footer>
	<script>
	(function() {
	if (navigator.userAgent.match(/IEMobile\/9\.0/)) {
		var msViewportStyle = document.createElement("style");
		msViewportStyle.appendChild(
		document.createTextNode("@-ms-viewport{width:auto!important}")
		);
		document.getElementsByTagName("head")[0].appendChild(msViewportStyle);
	}
	})();
	</script>
	<?php wp_footer(); ?>
	</body>
</html>