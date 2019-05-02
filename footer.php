
	<!-- MAIN APP -->
	<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); echo '/main.js?' . filemtime( get_stylesheet_directory() . '/main.js'); ?>"></script>
	<?php wp_footer(); ?>

<section class="footer_container">
	<?php if(is_page('contact')){ } elseif(is_page('faq')){ ?>
		<div class="pagination_container">
			<a class="pagination_faq" href="<?php bloginfo('url');?>/about-us">About us</a>
			<a class="pagination_contact" href="<?php bloginfo('url');?>/contact">Contact us</a>
		</div>
	<?php } elseif(is_page('about-us')){ ?>
		<div class="pagination_container">
			<a class="pagination_faq" href="<?php bloginfo('url');?>/">Home</a>
			<a class="pagination_contact" href="<?php bloginfo('url');?>/contact">Contact us</a>
		</div>
	<?php } else { ?>
		<div class="pagination_container">
			<a class="pagination_faq" href="<?php bloginfo('url');?>/faq">FAQ</a>
			<a class="pagination_contact" href="<?php bloginfo('url');?>/contact">Contact us</a>
		</div>
	<?php } ?>


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
