<?php
	$ico_baseuri = get_template_directory_uri() . '/assets/images/icons/';
?>

<footer class="footer-wrapper">
	<div class="container">
		<div class="footer">
			<div class="footer__main">
				<div class="footer__logo"></div>
				<p>&copy; <?php _e( date( 'Y' ) ); ?> Uniduck. All rights reserved</p>
			</div>
			<div class="footer__actions">
				<ul>
					<li><a href="">Like <span>Uniduck</span> on <img src="<?php echo $ico_baseuri . 'ic-facebook.svg' ?>" alt=""></a></li>
					<li><a href="">Follow <span>Uniduck</span> on <img src="<?php echo $ico_baseuri . 'ic-twitter.svg' ?>" alt=""></a></li>
					<li><a href="">Follow <span>Uniduck</span> on <img src="<?php echo $ico_baseuri . 'ic-instagram.svg' ?>" alt=""></a></li>
				</ul>
			</div>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
