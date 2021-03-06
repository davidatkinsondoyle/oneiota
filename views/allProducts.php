<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);

   require_once('../models/products.php');
   require_once('../controllers/products.php');
   
   $dataModel = new DataModel;
   $productsController = new ProductsController;
   
   $productsArray = $dataModel->parseCSV();    
   $products = $productsController::buildObject($productsArray);
      
   header("Access-Control-Allow-Origin: *");
   header('Content-Type: application/json');
   
   
   $fp = fopen('../data/products.json', 'w');
   fwrite($fp, json_encode($products));
   fclose($fp);
   
   echo(json_encode($products));
?>