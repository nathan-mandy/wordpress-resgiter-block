<?php
/**
 * Plugin Name:       Resource Register Block Templates
 * Description:       Example code for registering plugin block templates with WordPress 6.7+.
 * Version:           1.0.0
 * Requires at least: 6.6
 * Requires PHP:      7.4
 * Text Domain:       resource-register-block-templates
 */
add_action( 'init', 'resource_register_block_templates' );

function resource_get_template_content( $template ) {
	ob_start();
	include __DIR__ . "/templates/{$template}";
	return ob_get_clean();
}

function resource_register_block_templates() {
	register_block_template( 'resource_register_block_templates//demo-templates', [
		'title'       => __( 'Demo', 'demo-register-block-templates' ),
		'description' => __( 'A Demo block template from a plugin.', 'resource_register_block_templates' ),
		'content'     => resource_get_template_content( 'demo_template.php' )
	] );

	register_block_template( 'resource_register_block_templates//single-resource-template', [
		'title'       => __( 'Single Resource', 'demo-register-block-templates' ),
		'description' => __( 'Displays a single resources post.', 'resource_register_block_templates' ),
        'post_types'  => [ 'resource' ],
		'content'     => resource_get_template_content( 'single-resource.php' )
	] );

	register_block_template( 'resource_register_block_templates//resource-canvas', [
		'title'       => __( 'Resource: Canvas', 'resource_register_block_templates' ),
		'description' => __( 'An open template for use with single posts. Includes the Header, Post Content, and Footer.', 'resource_register_block_templates' ),
		'post_types'  => [ 'resource' ],
		'content'     => resource_get_template_content( 'resource-canvas.php' )
	] );

	register_block_template( 'resource_register_block_templates//archive-resource', [
		'title'       => __( 'Resource Archive', 'resource_register_block_templates' ),
		'description' => __( 'Displays an archive of all resources posts.', 'resource_register_block_templates' ),
		'post_types'  => [ 'page' ],
		'content'     => resource_get_template_content( 'archive-resource.php' )
	] );
}

add_action( 'init', 'resource_register_book_type' );

function resource_register_book_type() {
	register_post_type( 'resource', [
		'public'             => true,
		'show_in_rest'       => true,
		'capability_type'    => 'post',
		'has_archive'        => 'resources',
		'menu_icon'          => 'dashicons-text-page',
		'supports'           => [ 'editor', 'excerpt', 'title', 'thumbnail' ],
		'labels'             => [
			'name'          => __( 'Resources',        'devblog-plugin-templates' ),
			'singular_name' => __( 'Resource',         'devblog-plugin-templates' ),
			'add_new'       => __( 'Add New Resource', 'devblog-plugin-templates' )
		]
	] );
}