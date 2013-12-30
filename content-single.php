<?php

$coverimg 		= wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID() ), 'full' );

?>

<!-- Story Cover -->
<section class="article-cover-wrap default-cover">
	<div class="article-cover clearfix" style="background:url('<?php echo $coverimg[0];?>') center center;background-size:cover;">
		<p class="cover-meta">Written by <span> <?php the_author();?></span></p>
		<h1 class="cover-title" itemprop="title" ><?php the_title();?></h1>
	</div>
</section>

<!-- Story Entry -->
<article id="post-<?php the_ID(); ?>" <?php post_class('entry-content clearfix'); ?>>
	<?php the_content(); ?>
</article>

