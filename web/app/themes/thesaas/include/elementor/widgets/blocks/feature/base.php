<?php
namespace TheThemeio\Widgets;

use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly


class The_Feature extends The_Widget {

	public function get_name() {
		$this->load_blocks();
		return 'the-feature';
	}

	public function get_title() {
		return esc_html__( 'Feature', 'thesaas' );
	}

	public function get_icon() {
		return 'eicon-info-box';
	}

}
