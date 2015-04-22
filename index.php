<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

   <script>
     var baseurl = 'http://localhost:8888/oneiota/';
   </script>

  <title>Product Viewer</title>
  <link rel="stylesheet" href="styles/app.css">
  <script src="scripts/vendor.js"></script>
  <script src="scripts/app.js"></script>
  
  <script>
  App.ready = function() {
     App.set('serverRI', '<?php echo "http://$_SERVER[HTTP_HOST]/oneiota/";?>');
  }
  </script>
  

</head>
<body></body>
</html>
