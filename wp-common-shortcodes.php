<?php
/*
  Plugin Name:  WP Commonly Needed PHP Shortcodes
  Plugin URI:   https://www.primediabroadcasting.co.za 
  Description:  A few simple yet required shortcodes for WP. 
  Version:      1.0
  Author:       Alexander Leitch 
  Author URI:   https://www.openstyle.co.za
  License:      GPL2
  License URI:  https://www.gnu.org/licenses/gpl-2.0.html
  Text Domain:  wpb-tutorial
  Domain Path:  /languages
*/

function year_shortcode () {
  $year = date_i18n ('Y');
  return $year;
}
add_shortcode ('year', 'year_shortcode');