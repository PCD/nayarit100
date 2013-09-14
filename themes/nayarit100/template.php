<?php

/**
 * @file
 * This file is empty by default because the base theme chain (Alpha & Omega) provides
 * all the basic functionality. However, in case you wish to customize the output that Drupal
 * generates through Alpha & Omega this file is a good place to do so.
 * 
 * Alpha comes with a neat solution for keeping this file as clean as possible while the code
 * for your subtheme grows. Please read the README.txt in the /preprocess and /process subfolders
 * for more information on this topic.
 */

/**
 * Modified the breadcrumb by adding the page title as a link.
 */
function nayarit100_breadcrumb(&$vars) {
  if ( empty($vars['breadcrumb']) ) {
    return '';
  }

  // Add title
  $breadcrumb = $vars['breadcrumb'];
  $count = count($breadcrumb);
  
  // Build output
  $output = "<h2 class=\"element-invisible\">\n" . t('You are here') . "</h2>\n";
  $output .= "<div class=\"breadcrumb\">\n";
  
  // Add items
  $items = array();
  foreach($breadcrumb as $i => $crumb) {
    $odd = $i%2==0?'even':'odd';
    $order = $i==0?' home':($i==($count-1)?' last':'');
    $class = "item {$odd}{$order}";
    $items[] = "<div class=\"{$class}\">{$crumb}</div>";
  }
  $output .= implode('<div class="item separator">»</div>', $items);
  $output .= '</div>';
  return $output;
}