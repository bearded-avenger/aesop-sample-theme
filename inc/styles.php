<?php

class AesopThemeStoryStyles {

	public function __construct(){
		add_action('wp_head', array($this,'story_styles'));
		add_action('wp_head', array($this,'core_styles'));
	}

	public function story_styles(){
		global $post;

		$maxfontsize    = get_post_meta(get_the_ID(),'aesop_block_title_size', true) ? get_post_meta(get_the_ID(),'aesop_block_title_size', true) : 400;
		$covertype		= get_post_meta(get_the_ID(),'aesop_article_cover_type', true) ? get_post_meta(get_the_ID(),'aesop_article_cover_type', true) : 'default-cover';

		$coverline1     = get_post_meta(get_the_ID(),'aesop_block_cover_line1', true);
		$coverline2     = get_post_meta(get_the_ID(),'aesop_block_cover_line2', true);
		$coverline3     = get_post_meta(get_the_ID(),'aesop_block_cover_line3', true);
		$coverline4     = get_post_meta(get_the_ID(),'aesop_block_cover_line4', true);
		$coverline5     = get_post_meta(get_the_ID(),'aesop_block_cover_line5', true);

		$titlecolor     = get_post_meta(get_the_ID(),'aesop_cover_text_color', true);

		$titlewidth  	= get_post_meta(get_the_ID(),'aesop_block_title_width', true);
		$coverwidthstyle = $titlewidth ? sprintf('style="width:%s;"',$titlewidth) : false;


		$opts = get_option('aesop_options') ? get_option('aesop_options') : false;
    	$defaultbg = isset($opts['bg']) ? $opts['bg'] : '#FFFFFF';

    	$storybasecolor = get_post_meta(get_the_ID(),'aesop_article_bg', true);
		$storytxtcolor = get_post_meta(get_the_ID(),'aesop_article_text', true);

		if ('block-cover' == $covertype) {

			if($coverline1) { ?>
		    	<script>
					jQuery(document).ready(function(){
						stS = "<span class='slabtext'>";
					    stE = "</span>";
						txt = [
							"<?php echo $coverline1 ;?>",
							"<?php echo $coverline2 ;?>",
							"<?php echo $coverline3 ;?>",
							"<?php echo $coverline4 ;?>",
							"<?php echo $coverline5 ;?>"];

						jQuery(".block-cover .aesop-cover-title").html(stS + txt.join(stE + stS) + stE).slabText({maxFontSize:<?php echo $maxfontsize;?>});
					});
				</script>
			<?php } else { ?>
				<script>
					jQuery(document).ready(function(){
						jQuery('.block-cover .aesop-cover-title').slabText({maxFontSize:<?php echo $maxfontsize;?>});
					});
				</script>
			<?php }

			if ($titlewidth) { ?>
				<style>
					.post-<?php echo get_the_ID();?> .block-cover .aesop-article-cover-wrap .aesop-cover-title {width:<?php echo $titlewidth;?>;}
				</style>
			<?php }

		}

		if ($titlecolor) { ?>
			<!-- Story Styles -->
			<style>
				.post-<?php echo get_the_ID();?> .block-cover .aesop-article-cover-wrap .aesop-cover-title{color:<?php echo $titlecolor;?>;}
			</style>
		<?php }

		if ($storybasecolor || $storytxtcolor) {
			?>
			<!-- Story Styles -->
			<style>
				.postid-<?php echo get_the_ID();?> .aesop-entry-content,
				.postid-<?php echo get_the_ID();?> .aesop-story-pager,
				.postid-<?php echo get_the_ID();?> .aesop-parallax-sc-caption-wrap,
				.postid-<?php echo get_the_ID();?> .fotorama__caption__wrap,
				.postid-<?php echo get_the_ID();?> .leaflet-popup-content-wrapper, 
				.postid-<?php echo get_the_ID();?> .leaflet-popup-tip {
					background-color: <?php echo $storybasecolor;?>;
					color:<?php echo $storytxtcolor;?>;
				}
				.postid-<?php echo get_the_ID();?>,
				.postid-<?php echo get_the_ID();?> .modal-backdrop.in{
					background-color: <?php echo $storybasecolor;?>;
				}
				.postid-<?php echo get_the_ID();?> .wp-caption,
				.postid-<?php echo get_the_ID();?> .aesop-story-header.fixed {
					background: <?php echo aesop_color_sync($storybasecolor,1.2);?>;
					color:<?php echo $storytxtcolor;?>;
				}
			</style>
		<?php }
	}

	public function core_styles(){
		?>
		<!-- Main Theme Styles -->
		<style>
		body {
			background:<?php echo get_theme_mod('aesop_bg_color', '#FFFFFF');?>
		}
		</style>
		<?php
	}

}
new AesopThemeStoryStyles;