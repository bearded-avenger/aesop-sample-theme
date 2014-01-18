<?php


$coverimg 		= wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'aesop-cover-img' );
$covertype		= get_post_meta(get_the_ID(),'aesop_article_cover_type', true) ? get_post_meta(get_the_ID(),'aesop_article_cover_type', true) : 'default-cover';
$coverline1     = get_post_meta(get_the_ID(),'aesop_block_cover_line1', true);
$footer			= get_post_meta(get_the_ID(),'aesop_enable_story_footer',true);

// meta stuffs
?>
<!-- Story Cover -->
<section class="aesop-article-cover-wrap <?php echo $covertype;?>">
	<div class="aesop-article-cover clearfix" style="background:url('<?php echo $coverimg[0];?>') center center;background-size:cover;">
		<p class="aesop-cover-meta">Written by <span> <?php the_author();?></span></p>
		<h1 class="aesop-cover-title" itemprop="title" ><?php the_title();?></h1>
	</div>
</section>

<!-- Story Header -->
<section class="aesop-story-header clearfix">

	<a href="<?php echo get_bloginfo('wpurl');?>" class="aesop-go-home"><i class="aesopicon aesopicon-th"></i></a>

	<h2 class="aesop-story-title"><?php echo wp_trim_words(get_the_title(), 8, '');?>  <small> by <?php the_author();?></small></h2>
	
	<div class="aesop-story-shares unstyled">
		<a href="#" class="aesop-twitter-share"><i class="aesopicon aesopicon-twitter-square"></i></a>
		<a href="#" class="aesop-fb-share"><i class="aesopicon aesopicon-facebook-square"></i></a>
	</div>
</section>

<!-- Story Entry -->
<article id="post-<?php the_ID(); ?>" <?php post_class('aesop-entry-content clearfix'); ?>>
	<?php the_content(); ?>
</article>

<?php if ($footer) {
	get_template_part('content','storyfooter');
} ?>

<!-- More Stories -->
<section class="aesop-story-pager">
	<div class="aesop-content">
	<?php

	$prev = get_adjacent_post(true,'',true); 
	$prevlink = get_permalink(get_adjacent_post(false,'',true));

	$next = get_adjacent_post(false,'',false);
	$nextlink = get_permalink(get_adjacent_post(false,'',false));

	if ($prevlink != get_permalink()) {
		?><a class="aesop-post-adjacent previous col-sm-6 npl" href="<?php echo $prevlink;?>">
			<?php echo get_the_post_thumbnail($prev->ID, array(60,60, true) ); ?>
			<p><?php _e('Previous Story','aesop');?></p>
			<h6 class="aesop-post-adjacent-title" itemprop="title"><?php echo $prev->post_title; ?></h6>
		</a>
	<?php }

	if ($nextlink != get_permalink()) {
		?><a class="aesop-post-adjacent next col-sm-6 npr" href="<?php echo $nextlink;?>">
			<?php echo get_the_post_thumbnail($next->ID, array(60,60, true) ); ?>
			<p><?php _e('Next Story','aesop');?></p>
			<h6 class="aesop-post-adjacent-title" itemprop="title"><?php echo $next->post_title; ?></h6>
		</a>
	<?php } ?>
</div>
</section>