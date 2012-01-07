<?php

class JSON_API_Menu_Item {
  var $title;       //string
  var $object;       // String
  var $object_id; // String
  var $parent;      // Integer

  function JSON_API_Menu_Item($wp_menu_item = null) {
    if ($wp_menu_item) {
      $this->import_wp_object($wp_menu_item);
    }
  }
  
  function import_wp_object($wp_menu_item) {
    $this->title = $wp_menu_item->title;
    $this->object = $wp_menu_item->object;
    $this->object_id = (int) $wp_menu_item->object_id;
    $this->parent = (int) $wp_menu_item->menu_item_parent;
  }
  
}

?>
