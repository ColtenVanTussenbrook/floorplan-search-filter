<?php
/*
Plugin Name: Floor Plan Search Plugin
Plugin URI:  kitemedia.com/plugins
Description: Plugin to filter floor plan search results for GreenLean
Version:     1.0
Author:      Colten Van Tussenbrook
Author URI:  coltenv.com
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: wporg
Domain Path: /languages
*/

require_once dirname( __FILE__ ) . '/html_output.php';
require_once dirname( __FILE__ ) . '/custom_taxonomies.php';
require_once dirname( __FILE__ ) . '/search_filter.php';
require_once dirname( __FILE__ ) . '/sidebar_widget.php';

//regiset sidebar widget function call

//display homepage version
  function floorplan_shortcode_call() {
    ob_start();
    search_submit();
    floorplan_content();

    return ob_get_clean();
  }

  //creates shortcode
  add_shortcode('floorplan-search','floorplan_shortcode_call');
?>