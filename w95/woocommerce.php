<?php
get_header(); ?>

	<div class="grid__item element__frame" style="padding: 2rem; justify-self: stretch;">
		<?php woocommerce_content(); ?>
	</div>

	<div class="grid__item">
		<?php
		get_sidebar( 'shop' ); ?>
	</div>

<?php
get_footer(); ?>