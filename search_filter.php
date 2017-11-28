<?php

/**
*this file will run the actual search functionality for both the
*homepage and the sidebar versions
**/

//trigger this code when the submit button is clicked
function search_submit() {
  $output_url = "";

  if (isset($_POST['search_submitted'])) {
    //display bedroom categories based on user inputs
    if(isset($_POST['bed'])){
      $bedrooms = $_POST['bed'];

          if(in_array('1-bed', $bedrooms)) {
            $output_url .= "/product-category/1-bedroom";
          }
          if(in_array('2-bed', $bedrooms)) {
            if($output_url){
              $output_url .= ",2-bedroom";
            }
            else {
              $output_url .= "/product-category/2-bedroom";
            }
          }
          if(in_array('3-bed', $bedrooms)) {
            if($output_url){
              $output_url .= ",3-bedroom";
            }
            else {
              $output_url .= "/product-category/3-bedroom";
            }
          }
          if(in_array('4-bed', $bedrooms)) {
            if($output_url){
              $output_url .= ",4-bedroom,5-bedroom";
            }
            else {
              $output_url .= "/product-category/4-bedroom,5-bedroom";
            }
          }
    }

    //display bathroom categories based on user inputs
    if(isset($_POST['bath'])) {
      $bathrooms = $_POST['bath'];
        if(in_array('1-bath', $bathrooms)) {
          $output_url .= "/?bathrooms=[1";
        }
        if(in_array('2-bath', $bathrooms)) {
          if (strpos($output_url, "bathrooms")){
            $output_url .= ",2";
          }
          else {
            $output_url .= "/?bathrooms=[2";
          }
        }
        if(in_array('3-bath', $bathrooms)) {
          if (strpos($output_url, "bathrooms")){
            $output_url .= ",3";
          }
          else {
            $output_url .= "/?bathrooms=[3";
          }
        }

        //add closing bracket if bath is selected
        $output_url .= "]";
    }

    //display levels based on user inputs
    if(isset($_POST['level'])) {
      $levels = $_POST['level'];
        if(in_array('1-level', $levels)) {
          if (strpos($output_url, "bathrooms")){
            $output_url .= "&levels=[1";
          }
          else {
            $output_url .= "/?levels=[1";
          }
        }
        if(in_array('2-level', $levels)) {
          $is_levels = strpos($output_url, "levels");
          if ($is_levels == true){
            $output_url .= ",2";
          }
          elseif ($is_levels == false && strpos($output_url, "bathrooms")) {
            $output_url .= "&levels=[2";
          }
          else {
            $output_url .= "/?levels=[2";
          }
        }

        //add closing bracket if bath is selected
        $output_url .= "]";
     }

    //display square footage based on user input
    if(isset($_POST['sq-ft'])) {
      $sqft = $_POST['sq-ft'];
        if(in_array('10-sq-ft', $sqft)){
          if (strpos($output_url, "bathrooms") || strpos($output_url, "levels")){
            $output_url .= "&square-footage=[1500";
          }
          else {
            $output_url .= "/?square-footage=[1500";
          }
        }
        if(in_array('15-sq-ft', $sqft)){
          $is_sqft = strpos($output_url, "square-footage");

          if ($is_sqft == true){
            $output_url .= ",1501-2000";
          }
          elseif ($is_sqft == false && strpos($output_url, "bathrooms") ^ strpos($output_url, "levels")) {
            $output_url .= "&square-footage=[1501-2000";
          }
          else {
            $output_url .= "/?square-footage=[1501-2000";
          }
        }
        if(in_array('20-sq-ft', $sqft)){
          $is_sqft = strpos($output_url, "square-footage");

          if ($is_sqft == true){
            $output_url .= ",2001-2500";
          }
          elseif ($is_sqft == false && strpos($output_url, "bathrooms") ^ strpos($output_url, "levels")) {
            $output_url .= "&square-footage=[2001-2500";
          }
          else {
            $output_url .= "/?square-footage=[2001-2500";
          }
        }
        if(in_array('25-sq-ft', $sqft)){
          $is_sqft = strpos($output_url, "square-footage");

          if ($is_sqft == true){
            $output_url .= ",2501-3000";
          }
          elseif ($is_sqft == false && strpos($output_url, "bathrooms") ^ strpos($output_url, "levels")) {
            $output_url .= "&square-footage=[2501-3000";
          }
          else {
            $output_url .= "/?square-footage=[2501-3000";
          }
        }
        if(in_array('30-sq-ft', $sqft)){
          $is_sqft = strpos($output_url, "square-footage");

          if ($is_sqft == true){
            $output_url .= ",3001-3500";
          }
          elseif ($is_sqft == false && strpos($output_url, "bathrooms") ^ strpos($output_url, "levels")) {
            $output_url .= "&square-footage=[3001-3500";
          }
          else {
            $output_url .= "/?square-footage=[3001-3500";
          }
        }
        if(in_array('35-sq-ft', $sqft)){
          $is_sqft = strpos($output_url, "square-footage");

          if ($is_sqft == true){
            $output_url .= ",3501";
          }
          elseif ($is_sqft == false && strpos($output_url, "bathrooms") ^ strpos($output_url, "levels")) {
            $output_url .= "&square-footage=[3501";
          }
          else {
            $output_url .= "/?square-footage=[3501";
          }
        }

        //add closing bracket if bath is selected
        $output_url .= "]";
    }

    if(!empty($_POST['width']) || empty($_POST['width'])){
      $output_url2 = "";
      $fp_width = intval($_POST['width']);

        if (strpos($output_url, "bathrooms") || strpos($output_url, "levels") || strpos($output_url, "square-footage")){
          $output_url .= "&width=";
        }
        else {
          $output_url .= "/?width=";
        }
        //gets all the taxonomy values associated with width
        $arr_width_taxonomies = get_terms([
          'taxonomy' => 'width',
          'hide_empty' => false,
        ]);

        $width_name = array_column($arr_width_taxonomies, 'name');
        foreach ($width_name as $value){
          if (empty($fp_width)){
            $output_url .= $value;
            $output_url .= ",";
          }
          elseif (!empty($fp_width) && $fp_width >= $value) {
            $output_url .= $value;
            $output_url .= ",";
          }
          $output_url2 = rtrim($output_url, ",");
        }
     }

    if(!empty($_POST['depth']) || empty($_POST['depth'])) {
      $output_url_final = "";
      $fp_depth = intval($_POST['depth']);

        if (strpos($output_url2, "bathrooms") || strpos($output_url2, "levels") || strpos($output_url2, "square-footage") || strpos($output_url2, "width")){
          $output_url2 .= "&depth=";
        }
        else {
          $output_url2 .= "/?depth=";
        }
        //gets all the taxonomy values associated with depth
        $arr_depth_taxonomies = get_terms([
          'taxonomy' => 'depth',
          'hide_empty' => false,
        ]);
        $depth_name = array_column($arr_depth_taxonomies, 'name');
        foreach ($depth_name as $depth_value){
          if (empty($fp_depth)){
            $output_url2 .= $depth_value;
            $output_url2 .= ",";
          }

          elseif(!empty($fp_width) && $fp_depth >= $depth_value) {
            $output_url2 .= $depth_value;
            $output_url2 .= ",";
          }
          $output_url_final = rtrim($output_url2, ",");
        }
      }
      //$clean_output_url = esc_url($output_url_final);
      wp_redirect("$output_url_final", 301); exit;
  }
}
add_action('wp_loaded', 'search_submit');
?>