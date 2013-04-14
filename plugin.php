<?php
/*
Plugin Name: PDF shortcode
Plugin URI: https://github.com/serzhenko/pdf_shortcode
Description: A shortcode that embeds a PDF file using <embed> html tag.
Version: 0.1
Author: Dmitry Serzhenko
Author URI: http://serzhenko.me
License: GPL2
*/

/*  Copyright 2013 Dmitry Serzhenko  (email : dmitry@serzhenko.me)

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

// Add Shortcode
function pdf_shortcode( $atts , $content = null ) {

  // Attributes
	extract( shortcode_atts(
		array(
			'width' => '100%',
			'height' => '600',
		), $atts )
	);

	// Code
	return '<object data="'.$content.'" type="application/pdf" width="'.$width.'" height="'.$height.'"><p>Your web browser does not have a PDF plugin. Instead you can <a href="'.$content.'">click here to
  download the PDF file.</a></p></object>';
}
add_shortcode( 'pdf', 'pdf_shortcode' );
