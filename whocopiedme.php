<?php
/**
 * Plugin Name: Who Copied Me
 * Plugin URI: https://whocopied.me
 * Description: This plugin adds the javascript required from https://whocopied.me 
 * Version: 1.1.0
 * Author: Who Copied Me
 * Author URI: https://whocopied.me/page/about
 * License: GPL2
 */
function whocopiedme_javascript() {
	$words = ['Content protected by Whocopied.me', 'Content watched by Whocopied.me', 'Whocopied.me', 'Whocopied.me protects this content', 'Copyright infringement'];$domain = $_SERVER['HTTP_HOST'];$words = $words[strlen($domain) % (count($words) - 1)];
	echo '<script type="text/javascript">(function(){var s=document.createElement(\'script\');s.type=\'text/javascript\';s.async=true;s.src=\'//pxl.host/c.js\';var x=document.getElementsByTagName(\'script\')[0];x.parentNode.insertBefore(s,x);})();</script><noscript><a href="https://whocopied.me/" target="_blank">'.$words.'</a></noscript>';
}
add_action('wp_footer', 'whocopiedme_javascript');
