<?php


class DataModel {
      
   public static $productsArray = array();
   
   function parseCSV() {
       if (($handle = fopen("../data/products.csv", "r")) !== FALSE) {
           while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {

               if (array_key_exists($data[1], self::$productsArray)) {
                  self::$productsArray[$data[1]][] = $data;
               }
               else {
                  self::$productsArray[$data[1]] = array();
                  self::$productsArray[$data[1]][] = $data;
               }
           }
           fclose($handle);
       }
       
       return self::$productsArray;
   }
   
}


?>