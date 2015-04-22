<?php

class Filter {
   
   public static function SHOE_EU($sizes) {
      usort($sizes, function($a, $b) {
               return $a['size'] - $b['size'];
            });
            
      return $sizes;
   }
   public static function CLOTHING_SHORT($sizes) {
      $sizeOrder = array('XS', 'S', 'M', 'L', 'XL', 'XXL', 'XXXL', 'XXXXL');

      usort($sizes, function($a, $b) use ($sizeOrder) {
         return array_search($a['size'], $sizeOrder) - array_search($b['size'], $sizeOrder);
      });      
      
      return $sizes;
   }
   public static function SHOE_UK($sizes) {
      $sort = array();
      foreach($sizes as $k=>$v) {
         $sizeObj = explode(" ", $v['size']);
         
         if ($sizeObj[1] == "(Child)") {
            $sort['type'][$k] = 0;
         }
         else $sort['type'][$k] = 1;
         
         $sort['size'][$k] = $sizeObj[0];
      }
      array_multisort($sort['type'], SORT_ASC, $sort['size'], SORT_ASC,$sizes);
 
      return $sizes;
   }
   
}


?>