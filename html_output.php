<?php

/**
*This file contains the html that will be display on the screen when
*the shortcode is used
**/

function floorplan_content() {
  ?>

  <style>
  .line-boxes {
    display: inline-block;
  }
  </style>

  <form method="post">
    <div class="floorplan-container">
      <div class="layout-div">
        <div class="floorplan-col-1">
          <h2 class="floorplan-search-header">Bedrooms</h2>
            <ul>
              <li class="line-boxes">
                <div>
                  <input type="checkbox" id="bedrooms1" name="bed[]" value="1-bed" />
                  <label for="bedrooms1" class="btn-square">1</label>
                </div>
              </li>
              <li class="line-boxes">
                <div>
                  <input type="checkbox" id="bedrooms2" name="bed[]" value="2-bed" />
                  <label for="bedrooms2" class="btn-square">2</label>
                </div>
              </li>
              <li class="line-boxes">
                <div>
                  <input type="checkbox" id="bedrooms3" name="bed[]" value="3-bed" />
                  <label for="bedrooms3" class="btn-square">3</label>
                </div>
              </li>
              <li class="line-boxes">
                <div>
                  <input type="checkbox" id="bedrooms4" name="bed[]" value="4-bed" />
                  <label for="bedrooms4" class="btn-square">4+</label>
                </div>
              </li>
            </ul>

          <h2 class="floorplan-search-header">Levels</h2>
            <ul>
              <li class="line-boxes">
                <div>
                  <input type="checkbox" id="levels1" name="level[]" value="1-level" />
                  <label for="levels1" class="btn-square">1</label>
                </div>
              </li>
              <li class="line-boxes">
                <div>
                  <input type="checkbox" id="levels2" name="level[]" value="2-level" />
                  <label for="levels2" class="btn-square">2</label>
                </div>
              </li>
            </ul>

          <h2 class="floorplan-search-header"> Max Width (ft)</h2>
            <div>
              <input type="text" id="width" name="width" maxlength="2" class="floorplan-width">
            </div>

          <h2 class="floorplan-search-header">Max Depth (ft)</h2>
            <div>
              <input type="text" id="depth" name="depth" maxlength="2" class="floorplan-depth">
            </div>
        </div>

        <div class="floorplan-col-2">
          <h2 class="floorplan-search-header">Bathrooms</h2>
            <ul>
              <li class="line-boxes">
                <div>
                  <input type="checkbox" id="bathrooms1" name="bath[]" value="1-bath" />
                  <label for="bathrooms1" class="btn-square">1</label>
                </div>
              </li>
              <li class="line-boxes">
                <div>
                  <input type="checkbox" id="bathrooms2" name="bath[]" value="2-bath" />
                  <label for="bathrooms2" class="btn-square">2</label>
                </div>
              </li>
              <li class="line-boxes">
                <div>
                  <input type="checkbox" id="bathrooms3" name="bath[]" value="3-bath" />
                  <label for="bathrooms3" class="btn-square">3+</label>
                </div>
              </li>
            </ul>

          <h2 class="floorplan-search-header">Square Footage</h2>
            <ul>
              <li class="line-boxes-vert">
                <div>
                  <input type="checkbox" id="sq-ft1" name="sq-ft[]" value="10-sq-ft" />
                  <label for="sq-ft1" class="btn-square">&lt; 1500</label>
                </div>
              </li>
              <li class="line-boxes-vert">
                <div>
                  <input type="checkbox" id="sq-ft2" name="sq-ft[]" value="15-sq-ft" />
                  <label for="sq-ft2" class="btn-square">1,501-2,000</label>
                </div>
              </li>
              <li class="line-boxes-vert">
                <div>
                  <input type="checkbox" id="sq-ft3" name="sq-ft[]" value="20-sq-ft" />
                  <label for="sq-ft3" class="btn-square">2,0001-2,500</label>
                </div>
              </li>
              <li class="line-boxes-vert">
                <div>
                  <input type="checkbox" id="sq-ft4" name="sq-ft[]" value="25-sq-ft" />
                  <label for="sq-ft4" class="btn-square">2,501-3,000</label>
                </div>
              </li>
              <li class="line-boxes-vert">
                <div>
                  <input type="checkbox" id="sq-ft5" name="sq-ft[]" value="30-sq-ft" />
                  <label for="sq-ft5" class="btn-square">3,001-3,500</label>
                </div>
              </li>
              <li class="line-boxes-vert">
                <div>
                  <input type="checkbox" id="sq-ft6" name="sq-ft[]" value="35-sq-ft" />
                  <label for="sq-ft6" class="btn-square">3,501 +</label>
                </div>
              </li>
            </ul>
        </div>
      </div>
    </div>

        <input type="submit" name="search_submitted" value="Find Floor Plans!" id="search-plans-btn">

  </form>
<!--end of function-->
<?php } ?>