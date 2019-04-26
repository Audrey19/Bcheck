
	<!-- MAIN APP -->
	<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); echo '/main.js?' . filemtime( get_stylesheet_directory() . '/main.js'); ?>"></script>
	<?php wp_footer(); ?>

<section class="footer_container">
	<div class="<?php if (is_page("contact")){echo "none";} ?>">
		<div class="pagination_container">
				<div class="pagination_faq">
					<img class="pagination-logo"src="<?php bloginfo('template_url'); ?>/assets/images/left-arrow.png" alt="fleche">
					<a href="">FAQ</a>
				</div>
				<div class="pagination_contact">
					<a href="">Contact us</a>
					<img class="pagination-logo"src="<?php bloginfo('template_url'); ?>/assets/images/right_arrow.png" alt="fleche">
				</div>
		</div>
	</div>
	<div class="footer_container_box">
		<div class="logo-container">
				<a href="http://localhost:81/bcheck/"><img class="logo" src="<?php bloginfo('template_url'); ?>/assets/images/logo_bcheck_header.svg"  alt="logo" /></a>
		</div>
		
		<?php wp_nav_menu(array('menu_id' => 'menu_container','theme_location' => 'secondary' )); ?>
		
		<div class="faq_container">
			<a href="https://www.linkedin.com/company/bbcheck/about/"><img src="<?php bloginfo('template_url'); ?>/assets/images/linkedin_logo.png" alt="linkedin"></a>
		</div>
	</div>
</section>

</body>
</html>
