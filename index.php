<?php get_header(); ?>

	<main id="main-content">

		<section class="section-content" role="main">

			<?php if (have_posts()) : while (have_posts()) : the_post();

				get_template_part('partials/index-story');

			endwhile; ?>

			<?php else:

				get_template_part('partials/not-found.php');

			endif; ?>

		</section>

	</main>

<?php get_footer(); ?>
