<?php
/**
 * TC Comment Out class file.
 *
 * @package TC Comment Out
 */

namespace taupecat;

/**
 * Comment out content in a post or a page using [comment][/comment] shortcode
 * syntax. 2 available methods are 'hidden' (content is eliminated altogether
 * and not even visibile if one views the browser's source), and 'html' (the
 * default, where content is enclosed in HTML comment syntax
 * <!-- -->).
 */
class Comment_Out {

	/**
	 * Constructor.
	 *
	 * @return void
	 */
	public function __construct() {

		// Empty constructor.
	}

	/**
	 * Initialize the shortcode.
	 *
	 * @return void
	 */
	public function init() {

		add_shortcode( 'comment', array( $this, 'shortcode' ) );
	}

	/**
	 * Execute the shortcode.
	 *
	 * @param array  $attributes Attributes.
	 * @param string $content    Content to be commented out.
	 *
	 * @return string             Commented out content.
	 */
	public function shortcode( $attributes, $content ) {

		// Default type of comments is HTML comments (<!-- -->).
		$type = 'html';

		// Test for a valid attribute.
		if ( ( is_array( $attributes ) ) && ( isset( $attributes['type'] ) ) && ( 'hidden' === $attributes['type'] ) ) {

			$type = 'hidden';
		}

		switch ( $type ) {

			case 'hidden':
				$content = '';
				break;

			case 'html':
			default:
				// Fix instances where "--" may still exist, such as in href attributes.
				$content = preg_replace( '/-/', '~', $content );
				$content = '<!-- ' . $content . ' -->';
				break;
		}

		return $content;
	}
}
