<?php
/* 
Copyright (c) 2009 Blog Highlight. All rights reserved.

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
 any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA

Plugin Name: No Duplicate Content
Plugin URI: http://www.bloghighlight.com/wordpress-plugins/no-duplicate-content/
Description: This is a plugin to resolve your duplicate content issue by adding a canonical link to your HTML head section. This plugin is brought to you by <a href="http://www.bloghighlight.com">BlogHighlight</a>.
Version: 1.0.0
Author: Chung Bey Luen
Author URI: http://www.bloghighlight.com
*/

function showCanonicalLink() {
	global $wp_query;
	if (is_single() || is_page()) {
		echo '<link rel="canonical" content="' . get_permalink($wp_query->post->ID) . '" />';
	}
}

add_action('wp_head', 'showCanonicalLink');

?>