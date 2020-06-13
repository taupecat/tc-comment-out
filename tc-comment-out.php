<?php
/**
 * Plugin Name: TC Comment Out
 * Plugin URI: http://www.taupecat.com/wordpress-plugins/tc-comment-out/
 * Description: A simple way of commenting out content in a post or page using a shortcode.
 * Version: 2.0.0
 * Author: Tracy Rotton
 * Author URI: http://www.taupecat.com/
 * License: MIT
 *
 * @package TC Comment Out
 */

namespace taupecat;

require_once __DIR__ . '/class-comment-out.php';

( new Comment_Out() )->init();
