=== TC Comment Out ===
Contributors: taupecat
Requires at least: 2.5
Tested up to: 3.4.1
Stable tag: 1.2
Tags: shortcode, comment-out, hide-content

Comment out page and post content using a shortcode.

== Description ==

Easily comment out page and post content using a shortcode.  Content is commented out using HTML comment syntax, keeping the content available in the "View Source" window of your web browser.

Simply place the opening shortcode [comment] at the beginning of the text you wish to comment out, and the closing shortcode [/comment] at the end.

If you wish to hide the content entirely from view (so that it is <em>not</em> visible in the browser source), set the optional type attribute to "hidden". Setting the type attribute to "html" will produce the default behavior, but is not required.

== Installation ==

1. Place the tc-comment-out directory inside your plugins directory.
2. Navigate to the Plugins section of the Dashboard and click "Activate".

== Changelog ==

= Version 1.2 =
* Implemented the "type" attribute allowing users to use HTML comments to hide their content (the default) or to strip it out altogether so that the commented content is NOT viewable when using the browser's "View Source" option.
* Added GPLv2 license to package.

= Version 1.1 =
* Fixed a bug that would break the SGML commenting schema if it encountered a URL containing two dashes in a row. WordPress filters double-dashes in content, but not when they occur in a URL.

= Version 1.0 =
* Initial release.
