<?php

get_header();

	do_action('aesop_single_before');

		while ( have_posts() ) : the_post();

			get_template_part( 'content', 'single' );

		endwhile;

	do_action('aesop_single_after');

get_footer();
