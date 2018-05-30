<?php

/**

 *	Oxygen WordPress Theme

 *

 *	Laborator.co

 *	www.laborator.co

 */



	global $theme_version;

?>

		

		<?php if( ! defined("NO_HEADER_MENU")): ?>

		</div>

		<?php endif; ?>



		<?php if( ! defined("NO_FOOTER_MENU")): ?>



			<?php get_template_part('tpls/footer-main'); ?>



		<?php endif; ?>



	</div>



	<?php wp_footer(); ?>

	

	<!-- <?php echo 'ET: ', microtime( true ) - STIME, 's ', $theme_version, ( is_child_theme() ? 'ch' : '' ); ?> -->
<div id="stamped-reviews-widget" data-widget-type="drawer" data-random="True" data-show-avatar="True" data-link="<?php echo site_url(); ?>" data-link-text="Latest Reviews" data-background-color="#33b0e0"></div>


<script type="text/javascript">
jQuery(document).ready(function(e) {
    jQuery('.vertical-text').html('★ Đánh giá');
});
</script>

</body>

</html>