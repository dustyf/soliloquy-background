<?php
/*
Plugin Name: Soliloquy Background
Plugin URI: http://dustyf.com/
Description: Output slider as background images
Author: Dustin Filippini
Author URI: http://dustyf.com/
Version: 0.1
License: GNU General Public License v2.0 or later
License URI: http://www.opensource.org/licenses/gpl-license.php
*/

/*
	Copyright 2013	 Dustin Filippini	 (email : dusty@dustyf.com)

	This program is free software; you can redistribute it and/or modify
	it under the terms of the GNU General Public License, version 2, as
	published by the Free Software Foundation.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	You should have received a copy of the GNU General Public License
	along with this program; if not, write to the Free Software
	Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

add_filter('tgmsp_slider_item_style', 'add_soliloquy_bg_image', 10, 4);
function add_soliloquy_bg_image($style, $id, $image, $i) {
	$style = 'background-image:url(' . $image['src'] . ');';
	return $style;
}

add_filter('tgmsp_image_output', 'remove_soliloquy_slide_image', 10, 5);
function remove_soliloquy_slide_image($imagehtml, $id, $image, $alt, $title) {
	$imagehtml = '';
	return $imagehtml;
}