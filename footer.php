
		<footer>

			<?php wp_footer();?>

			<?php do_action('aesop_inside_body_bottom');

			if(is_singular()) { ?>
				<div id="aesop-loading"><i class="aesopicon aesopicon-spinner aesopicon-spin"></i></div>
			<?php } ?>
		</footer>
	</body>

</html>
