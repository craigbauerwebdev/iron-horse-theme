<?php if (is_page('contact')) { ?>
 
	</div>

<?php } else { ?>

	</div><!-- Close Content -->
</div><!-- Close Content Wrap -->
<?php } ?>
	<footer>
		<div class="inner">
			<div id="footer">
				<p>Iron Horse Instruments &copy;<?php echo date( 'Y'); ?></p>
			</div>
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