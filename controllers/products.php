<?php
//ProductsController 
require_once('../models/filter.php');

class ProductsController {
   
   public static function buildObject($productsArray) {
      $filterModel = new Filter;
      
      $products = array();
   
      foreach ($productsArray as $product) {
         $obj = array();
      
         $obj['PLU'] = preg_replace('/\s+/', '', $product[0][1]);
         $obj['name'] = $product[0][2];
         $obj['sizes'] = array();
      
         foreach ($product as $prodSize) {
         
            $size = array();
            $size['SKU'] = $prodSize[0];
            $size['size'] = $prodSize[3];
         
            $obj['sizes'][] = $size;
         }
      
         $filterType = preg_replace('/\s+/', '', $product[0][4]);
      
      
         if ( method_exists($filterModel, $filterType ) ) {
            $obj['sizes'] = $filterModel::$filterType( $obj['sizes'] ); 
         }
         else $obj['sizesNotFiltered'] = true;
      
         $products[] = $obj;
      }
   
      return $products; 
   }
}

?>