<?php
/**
 * Plugin Name: Mihdan: Telegram Widgets
 * Description: Sharing button, Post Widget, Login Widget, Comments Widget from Telegram
 *
 * @package Mihdan\Telegram_Telegram_Widgets
 */

namespace Mihdan\Telegram_Widgets;

define( 'MIHDAN/TELEGRAM_WIDGETS/VERSION', '1.0.0' );
define( 'MIHDAN/TELEGRAM_WIDGETS/FILE', __FILE__ );
define( 'MIHDAN/TELEGRAM_WIDGETS/URL', plugin_dir_url( __FILE__ ) );

static $mihdan_telegram_comments;

if ( ! $mihdan_telegram_comments ) {
	require_once constant( 'MIHDAN/TELEGRAM_WIDGETS/FILE' ) . '/src/class-main.php';
	$mihdan_telegram_comments = new Main();
}