<?php
// Author: @kayintveen
// Credits: Microdesign B.V
// Created November 2015
//=====================================
// Enable Error Reporting
error_reporting(E_ALL);
ini_set('display_errors', '1');
// Init Magento pointing to the Mage.app file
require_once 'app/Mage.php';
// Choose which storeview to select.
Mage::app()->setCurrentStore(Mage_Core_Model_App::ADMIN_STORE_ID);
//Prevent time-outs
set_time_limit(0);
// Function to set values
function useDefaultValueCallback($args){
    // change to the ID of your french store view
    $specificStoreViewId = 3;
    $product = Mage::getModel('catalog/product');
    //var_dump($args['row']);
    $product->setData($args['row']);
    $product->setStoreId($specificStoreViewId);
    // change according to your needs
    $product->setData('price', false);
    $product->setData('url_key', false);
    $product->setData('status', false);
    $product->setData('visibility', false);
    $product->setData('description', false);
    $product->setData('short_description', false);
    $product->setData('products_1003', false);
    $product->setData('name', false);
    $product->setData('techspec', false);
    $product->setData('sku', false);
    $product->setData('productcode', false);
    $product->setData('followfocus', false);
    $product->setData('special_from_date', false);	
    $product->setData('special_price', false);	
    $product->setData('special_to_date', false);	
    $product->setData('country_of_manufacture', false);
    $product->setData('featured', false);
    $product->setData('backorder_addtocart', false);
    $product->setData('backorder_carttext', false);
    $product->setData('msrp_enabled', false);
    $product->setData('msrp_display_actual_price_type', false);
    $product->setData('msrp', false);
    $product->setData('tax_class_id', false);
    $product->setData('number_of_stages', false);
    $product->setData('cassette_size', false);
    $product->setData('filter_size', false);
    $product->setData('rotating_stages', false);
    $product->setData('maximum_diameter', false);
    $product->setData('rod_sizes', false);
    $product->setData('inner_size', false);
    $product->setData('outer_size', false);
    $product->setData('round_filters', false);
    $product->setData('meta_description', false);
    $product->setData('meta_keyword', false);	
    $product->setData('meta_title', false);
    $product->setData('small_image', false);
    $product->setData('image', false);
    $product->setData('thumbnail', false);
    $product->setData('custom_design', false);	
    $product->setData('custom_design_from', false);	
    $product->setData('custom_design_to', false);	
    $product->setData('custom_layout_update', false);
    $product->setData('page_layout', false);
    $product->setData('options_container', false);
    $product->setData('news_from_date', false);
    $product->setData('news_to_date', false);
    $product->setData('special_from_date', false);
    $product->setData('options_container', false);
    $product->save();
}
  // Selecting the products and executing function
	$products = Mage::getModel('catalog/product')->getCollection()->addFieldToFilter('entity_id', array('gt' => 1));
	Mage::getSingleton('core/resource_iterator')->walk($products->getSelect(), array('useDefaultValueCallback'));