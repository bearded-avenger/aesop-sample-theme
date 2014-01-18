<?php
/**
* create custom meta boxes for project meta
*
* @since version 1.0
* @param null
* @return custom meta boxes
*/

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

add_filter( 'cmb_meta_boxes', 'ba_aesop_metaboxes' );
function ba_aesop_metaboxes( array $meta_boxes ) {

	$opts = array(
		array(
			'id'             	=> 'aesop_global_help',
			'name'           	=> ' ',
			'type'				=> 'title',
			'cols'				=> 12,
			'desc'				=> __('Use the controls below to craft the look of this specific story.','aesop')
		),
		array(
			'id'				=> 'aesop_cover_text_color',
			'name'				=> __('Cover Text Color (optional)', 'aesop'),
			'type'				=> 'colorpicker',
			'cols'				=> 4
		),
		array(
			'id'				=> 'aesop_article_bg',
			'name'				=> __('Story Background Color (optional)', 'aesop'),
			'type'				=> 'colorpicker',
			'cols'				=> 4
		),
		array(
			'id'				=> 'aesop_article_text',
			'name'				=> __('Story Text Color (optional)', 'aesop'),
			'type'				=> 'colorpicker',
			'cols'				=> 4
		),
		array(
			'id'             	=> 'aesop_block_cover_options',
			'name'           	=> __('Cover Layout', 'aesop'),
			'type'				=> 'title'
		),
		array(
			'id'             	=> 'aesop_article_cover_type',
			'name'           	=> '',
			'type'           	=> 'select',
			'default'			=> 'default',
			'options'			=> array(
				'default-cover'	=> __('Minimal', 'aesop'),
				'block-cover'	=> __('Block Style', 'aesop'),
			),
		),
		array(
			'id'             	=> 'aesop_block_cover_options',
			'name'           	=> __('Block Style Cover Options', 'aesop'),
			'type'				=> 'title'
		),
		array(
			'id'             	=> 'aesop_block_cover_options',
			'name'           	=> ' ',
			'type'				=> 'title',
			'desc'				=> __('If you are using Block Style Cover option, and you do not like the way the title has been automatically formatted, you can specify the title and what lines the words are on using the fields below.', 'aesop')
		),
		array(
			'id'				=> 'aesop_block_cover_line1',
			'name'				=> __('Cover Line 1', 'aesop'),
			'type'				=> 'text',
			'cols'				=> 4
		),
		array(
			'id'				=> 'aesop_block_cover_line2',
			'name'				=> __('Cover Line 2', 'aesop'),
			'type'				=> 'text',
			'cols'				=> 4
		),
		array(
			'id'				=> 'aesop_block_cover_line3',
			'name'				=> __('Cover Line 3', 'aesop'),
			'type'				=> 'text',
			'cols'				=> 4
		),
		array(
			'id'				=> 'aesop_block_cover_line4',
			'name'				=> __('Cover Line 4', 'aesop'),
			'type'				=> 'text',
			'cols'				=> 4
		),
		array(
			'id'				=> 'aesop_block_cover_line5',
			'name'				=> __('Cover Line 5', 'aesop'),
			'type'				=> 'text',
			'cols'				=> 4
		),
		array(
			'id'				=> 'aesop_block_cover_line5',
			'name'				=> '',
			'type'				=> 'title',
			'cols'				=> 4,
		),
		array(
			'id'             	=> 'aesop_block_cover_options',
			'name'           	=> ' ',
			'type'				=> 'title',
			'desc'				=> __('The two options below control the appearence of the cover title. By default, the maximum font size is <code>400</code>. If you have a really short title, try making this number larger, like <code>600</code>. If you have a really long title, make this number shorter like <code>200</code>. You can use this together with the maximum title width. By default, it\'s set at <code>60%</code>. However you can change this to something like <code>75%</code>', 'aesop')
		),
		array(
			'id'				=> 'aesop_block_title_size',
			'name'				=> __('Maximum Font Size', 'aesop'),
			'type'				=> 'text',
			'default'			=> 400,
			'cols'				=> 6
		),
		array(
			'id'				=> 'aesop_block_title_width',
			'name'				=> __('Maximum Title Width', 'aesop'),
			'type'				=> 'text',
			'default'			=> '70%',
			'cols'				=> 6
		),
	);

	$meta_boxes[] = array(
		'title' => __('Story Cover', 'aesop-core'),
		'pages' => 'post',
		'fields' => $opts
	);

	return $meta_boxes;

}


