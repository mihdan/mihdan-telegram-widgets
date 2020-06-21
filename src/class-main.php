<?php
/**
 * Class Main.
 */

namespace Mihdan\Telegram_Widgets;

/**
 * Class Main
 *
 * @package Mihdan\Telegram_Widgets
 */
class Main {
	public function __construct() {
		$this->setup_hooks();
	}

	public function setup_hooks() {
		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_scripts' ) );
	}

	/**
	 * @link https://comments.app/manage
	 */
	public function enqueue_scripts() {
		if ( is_singular() ) {
			wp_register_script( 'rwerwe', 'https://comments.app/js/widget.js' );
			wp_register_script( 'rwerwe', 'https://telegram.org/js/telegram-widget.js' );
		}
	}
}
