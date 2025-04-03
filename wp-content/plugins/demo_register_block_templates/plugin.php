<?php
/**
 * Plugin Name:       Register Block Templates Demo
 * Description:       Example code for registering plugin block templates with WordPress 6.7+.
 * Version:           1.0.0
 * Requires at least: 6.6
 * Requires PHP:      7.4
 * Text Domain:       register-block-templates-demo
 */
add_action( 'init', 'dev_register_block_templates' );

function dev_get_template_content( $template ) {
	ob_start();
	include __DIR__ . "/templates/{$template}";
	return ob_get_clean();
}

function dev_register_block_templates() {
	register_block_template( 'demo-register-block-templates//demo-template', [
		'title'       => __( 'Demo', 'demo-register-block-templates' ),
		'description' => __( 'A Demo block template from a plugin.', 'demo-register-block-templates' ),
		'content'     => dev_get_template_content( 'demo_template.php' )
	] );

	register_block_template( 'demo-register-block-templates//single-book-template', [
		'title'       => __( 'Single Book', 'demo-register-block-templates' ),
		'description' => __( 'Displays a single book.', 'demo-register-block-templates' ),
		'post_types'  => [ 'book','resource' ],
		'content'     => dev_get_template_content( 'single-book.php' )
	] );

	register_block_template( 'demo-register-block-templates//book-canvas', [
		'title'       => __( 'Book: Canvas', 'demo-register-block-templates' ),
		'description' => __( 'An open template for use with single posts. Includes the Header, Post Content, and Footer.', 'demo-register-block-templates' ),
		'content'     =>dev_get_template_content( 'book-canvas.php' )
	] );

	register_block_template( 'demo-register-block-templates//archive-book', [
		'title'       => __( 'Book Archive', 'demo-register-block-templates' ),
		'description' => __( 'Displays an archive of all book posts.', 'demo-register-block-templates' ),
		'post_types'  => [ 'page' ],
		'content'     => dev_get_template_content( 'archive-book.php' )
	] );
}

add_action( 'init', 'devblog_register_book_type' );

function devblog_register_book_type() {
	register_post_type( 'book', [
		'public'             => true,
		'show_in_rest'       => true,
		'capability_type'    => 'post',
		'has_archive'        => 'books',
		'menu_icon'          => 'dashicons-book',
		'supports'           => [ 'editor', 'excerpt', 'title', 'thumbnail' ],
		'labels'             => [
			'name'          => __( 'Books',        'devblog-plugin-templates' ),
			'singular_name' => __( 'Book',         'devblog-plugin-templates' ),
			'add_new'       => __( 'Add New Book', 'devblog-plugin-templates' )
		]
	] );
}