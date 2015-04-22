<?php

require_once('../models/products.php');
require_once('../controllers/products.php');

$dataModel = new DataModel;
$productsController = new ProductsController;

$productsArray = $dataModel->parseCSV();    
$products = $productsController::buildObject($productsArray);
header("Access-Control-Allow-Origin: *");
   
   //echo ($_GET["PLU"]);
   
   if (isset($_GET["PLU"])) {
      $key = array_search($_GET["PLU"], array_column($products, 'PLU'));
   
      header('Content-Type: application/json');
      echo(json_encode($products[$key]));
      
      unset($_GET["PLU"]);
      unset($key);
   }
   else  echo(json_encode( array('ok'=>false, 'reason'=>"No PLU Provided!")  ));

?>