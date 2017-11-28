<?php

/**
*this file will display the widget version of the search feature
**/

require_once dirname( __FILE__ ) . '/search_filter.php';

class greenlean_FloorPlan_Search_Widget extends WP_Widget {
  public function __construct() {
      $widget_options = array(
        'classname' => 'floorplan_search_widget',
        'description' => 'Floorplan custom search widget built by Kite Media',
      );
      parent::__construct( 'floorplan_search_widget', 'Floorplan Search Widget', $widget_options );
    }

  public function widget( $args, $instance ) {

    //HTML output
    ?>
    <form method="post">
      <div class="floorplan-container">
        <div class="layout-widget-div">
          <h1 class="search-options-header">Search Options:</h1>
            <h2>Bedrooms</h2>
              <ul>
                <li class="line-boxes">
                  <div>
                    <input type="checkbox" id="bedrooms1" name="bed[]" value="1-bed" />
                    <label for="bedrooms1" class="btn-square-widget">1</label>
                  </div>
                </li>
                <li class="line-boxes">
                  <div>
                    <input type="checkbox" id="bedrooms2" name="bed[]" value="2-bed" />
                    <label for="bedrooms2" class="btn-square-widget">2</label>
                  </div>
                </li>
                <li class="line-boxes">
                  <div>
                    <input type="checkbox" id="bedrooms3" name="bed[]" value="3-bed" />
                    <label for="bedrooms3" class="btn-square-widget">3</label>
                  </div>
                </li>
                <li class="line-boxes">
                  <div>
                    <input type="checkbox" id="bedrooms4" name="bed[]" value="4-bed" />
                    <label for="bedrooms4" class="btn-square-widget">4+</label>
                  </div>
                </li>
              </ul>
            <br>

            <h2>Bathrooms</h2>
              <ul>
                <li class="line-boxes">
                  <div>
                    <input type="checkbox" id="bathrooms1" name="bath[]" value="1-bath" />
                    <label for="bathrooms1" class="btn-square-widget">1</label>
                  </div>
                </li>
                <li class="line-boxes">
                  <div>
                    <input type="checkbox" id="bathrooms2" name="bath[]" value="2-bath" />
                    <label for="bathrooms2" class="btn-square-widget">2</label>
                  </div>
                </li>
                <li class="line-boxes">
                  <div>
                    <input type="checkbox" id="bathrooms3" name="bath[]" value="3-bath" />
                    <label for="bathrooms3" class="btn-square-widget">3+</label>
                  </div>
                </li>
              </ul>
            <br>

            <h2>Levels</h2>
              <ul>
                <li class="line-boxes">
                  <div>
                    <input type="checkbox" id="levels1" name="level[]" value="1-level" />
                    <label for="levels1" class="btn-square-widget">1</label>
                  </div>
                </li>
                <li class="line-boxes">
                  <div>
                    <input type="checkbox" id="levels2" name="level[]" value="2-level" />
                    <label for="levels2" class="btn-square-widget">2</label>
                  </div>
                </li>
              </ul>
            <br>

            <h2 class="floorplan-search-header">Square Footage</h2>
              <ul>
                <li class="line-boxes-vert">
                  <div>
                    <input type="checkbox" id="sq-ft1" name="sq-ft[]" value="10-sq-ft" />
                    <label for="sq-ft1" class="btn-square-widget">&lt; 1500</label>
                  </div>
                </li>
                <li class="line-boxes-vert">
                  <div>
                    <input type="checkbox" id="sq-ft2" name="sq-ft[]" value="15-sq-ft" />
                    <label for="sq-ft2" class="btn-square-widget">1,501-2,000</label>
                  </div>
                </li>
                <li class="line-boxes-vert">
                  <div>
                    <input type="checkbox" id="sq-ft3" name="sq-ft[]" value="20-sq-ft" />
                    <label for="sq-ft3" class="btn-square-widget">2,0001-2,500</label>
                  </div>
                </li>
                <li class="line-boxes-vert">
                  <div class>
                    <input type="checkbox" id="sq-ft4" name="sq-ft[]" value="25-sq-ft" />
                    <label for="sq-ft4" class="btn-square-widget">2,501-3,000</label>
                  </div>
                </li>
                <li class="line-boxes-vert">
                  <div class=>
                    <input type="checkbox" id="sq-ft5" name="sq-ft[]" value="30-sq-ft" />
                    <label for="sq-ft5" class="btn-square-widget">3,001-3,500</label>
                  </div>
                </li>
                <li class="line-boxes-vert">
                  <div class=>
                    <input type="checkbox" id="sq-ft6" name="sq-ft[]" value="35-sq-ft" />
                    <label for="sq-ft6" class="btn-square-widget">3,501 +</label>
                  </div>
                </li>
              </ul>
            <br>

            <h2 class="floorplan-search-header"> Max Width (ft)</h2>
              <div>
                <input type="text" id="width" name="width" maxlength="2" class="floorplan-width">
              </div>
            <br>

            <h2 class="floorplan-search-header">Max Depth (ft)</h2>
              <div>
                <input type="text" id="depth" name="depth" maxlength="2" class="floorplan-depth">
              </div>
            <br>

         </div>
      </div>

          <input type="submit" name="search_submitted" value="Find Floor Plans!" id="search-plans-btn-widget">

    </form>

  <?php
  //call search filter function
  search_submit();
 }
}
  //register new widget
  function greenlean_floorplan_search_register_widget() {
    register_widget( 'greenlean_FloorPlan_Search_Widget' );
  }
  add_action( 'widgets_init', 'greenlean_floorplan_search_register_widget' );
  ?>