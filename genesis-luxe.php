<?php
/*
Plugin Name: Genesis Luxe Collection
Plugin URI: genesis-luxe
Description: The Luxe Collection for Genesis Blocks
Version: 0.1
Author: Rob Stinson
Author URI: https://studiopress.com
License: GPLv3
License URI: http://www.gnu.org/licenses/gpl-3.0.html
*/

function genesis_luxe_collection() {
	// Ensure a proper version of Genesis Blocks is active before continuing.
	if ( ! function_exists( 'genesis_blocks_register_layout_component' ) ) {
		return;
	}
	// Register the Luxe Home Layout
	genesis_blocks_register_layout_component(
		[
			'type'       => 'layout',
			'key'        => 'genesis_luxe_home',
			'name'       => 'Luxe Home Page',
			'content'    =>  require 'layouts/home.php',
			'category'   => [
				'Text',
			],
			'keywords'   => [
				'Home',
			],
			'image'      => plugin_dir_url(__FILE__) . 'assets/luxe_layout_thumbnail_home.png',
			'collection' => [
                'slug'  => 'luxe',
                'label' => 'Luxe Collection',
                'thumbnail'      => plugin_dir_url(__FILE__) . 'assets/luxe_collection_thumbnail.png',
            ],
		]
	);
	// Register the Luxe Hero Section
	genesis_blocks_register_layout_component(
		[
			'type'       => 'section',
			'key'        => 'genesis_luxe_hero',
			'name'       => 'Luxe Hero',
			'content'    =>  require 'sections/hero.php',
			'category'   => [
				'Text',
			],
			'keywords'   => [
				'Hero',
				'Photo',
				'Header',
			],
			'image'      => plugin_dir_url(__FILE__) . 'assets/luxe_section_thumbnail_hero.png',
            'collection' => [
                'slug'  => 'luxe',
                'label' => 'Luxe Collection',
            ],
		]
	);
	// Register the Luxe Services Section
	genesis_blocks_register_layout_component(
		[
			'type'       => 'section',
			'key'        => 'genesis_luxe_services',
			'name'       => 'Luxe Services',
			'content'    =>  require 'sections/services.php',
			'category'   => [
				'Text',
			],
			'keywords'   => [
				'Services',
			],
			'image'      => plugin_dir_url(__FILE__) . 'assets/luxe_section_thumbnail_services.png',
			'collection' => [
                'slug'  => 'luxe',
                'label' => 'Luxe Collection',
            ],
		]
	);
	// Register the Luxe About 1 Section
	genesis_blocks_register_layout_component(
		[
			'type'       => 'section',
			'key'        => 'genesis_luxe_about_1',
			'name'       => 'Luxe About 1',
			'content'    =>  require 'sections/about-1.php',
			'category'   => [
				'Text',
			],
			'keywords'   => [
				'About',
			],
			'image'      => plugin_dir_url(__FILE__) . 'assets/luxe_section_thumbnail_about_1.png',
			'collection' => [
                'slug'  => 'luxe',
                'label' => 'Luxe Collection',
            ],
		]
	);
	// Register the Luxe About 2 Section
	genesis_blocks_register_layout_component(
		[
			'type'       => 'section',
			'key'        => 'genesis_luxe_about_2',
			'name'       => 'Luxe About 2',
			'content'    =>  require 'sections/about-2.php',
			'category'   => [
				'Text',
			],
			'keywords'   => [
				'About',
			],
			'image'      => plugin_dir_url(__FILE__) . 'assets/luxe_section_thumbnail_about_2.png',
			'collection' => [
                'slug'  => 'luxe',
                'label' => 'Luxe Collection',
            ],
		]
	);
	// Register the Luxe Process Section
	genesis_blocks_register_layout_component(
		[
			'type'       => 'section',
			'key'        => 'genesis_luxe_process',
			'name'       => 'Luxe Process',
			'content'    =>  require 'sections/process.php',
			'category'   => [
				'Text',
			],
			'keywords'   => [
				'Process',
				'Steps',
			],
			'image'      => plugin_dir_url(__FILE__) . 'assets/luxe_section_thumbnail_process.png',
			'collection' => [
                'slug'  => 'luxe',
                'label' => 'Luxe Collection',
            ],
		]
	);
	// Register the Luxe Testimonials Section
	genesis_blocks_register_layout_component(
		[
			'type'       => 'section',
			'key'        => 'genesis_luxe_testimonials',
			'name'       => 'Luxe Testimonials',
			'content'    =>  require 'sections/testimonials.php',
			'category'   => [
				'Text',
			],
			'keywords'   => [
				'Testimonials',
			],
			'image'      => plugin_dir_url(__FILE__) . 'assets/luxe_section_thumbnail_testimonials.png',
			'collection' => [
                'slug'  => 'luxe',
                'label' => 'Luxe Collection',
            ],
		]
	);
}
add_action( 'plugins_loaded', 'genesis_luxe_collection', 12 );