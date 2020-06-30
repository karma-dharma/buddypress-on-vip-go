<?php
/**
 * Plugin Name: YIKES BuddyPress on VIP Go
 * Plugin URI:  https://github.com/yikesinc/buddypress-on-vip-go
 * Description: Custom functions to make BuddyPress' media work with Automattic's VIP Go hosting (from your buddys at YIKES ✨)
 * Author:      YIKES, Inc.
 * Author URI:  https://yikesinc.com
 * License:     GPLv2 or later.
 * Text Domain: yikes-buddypress-on-vip-go
 * Version:     1.0
 * 
 * @package Yikes_BuddyPress
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

add_action(
	'bp_loaded',
	function() {
		if ( ! class_exists( 'A8C_Files' ) || ! defined( 'FILES_CLIENT_SITE_ID' ) || ! defined( 'FILES_ACCESS_TOKEN' ) ) {
			return;
		}
		require_once __DIR__ . '/files.php';
	}
);
