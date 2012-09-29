<?php
/*
Plugin Name: TC Comment Out
Plugin URI: http://www.taupecat.com/wordpress-plugins/tc-comment-out/
Description: A simple way of commenting out content in a post or page using a shortcode.
Version: 1.2
Author: Tracy Rotton
Author URI: http://www.taupecat.com/
License: GPLv2
*/

function tc_comment_out_shortcode( $attr, $content ) {

    /**
     * Comment out content in a post or a page using [comment][/comment] shortcode
     * syntax. 2 available methods are 'hidden' (content is eliminated altogether
     * and not even visibile if one views the browser's source), and 'html' (the default,
     * where content is enclosed in HTML comment syntax <!-- -->).
     */

    // test for a valid attribute.
    if ( ( ( is_array( $attr ) ) && ( ! array_key_exists( 'type', $attr ) ) ) || ( ! is_array( $attr ) ) ) {
        $attr['type'] = 'html';
    }

	switch( $attr['type'] ) {
	    case 'hidden':

            $content = '';

        break;

        case 'html':
        default:

            $content = apply_filters( 'the_content', $content );
            $content = preg_replace( '/-/', '~', $content ); // fix instances where "--" may still exist, such as in hrefs
            $content = '<!-- ' . $content . ' -->';

        break;
	}

	return $content;

}

add_shortcode( 'comment', 'tc_comment_out_shortcode' );

?>
