# Oneiota demo
Here is my demo code for csv to json parseing. Ive also included a small json api and Enber js application for viewing the data :-) 

##Notes on running
- can be run from any port number 
- must be run from inside "oneiota" folder! If cloaning from Github be sure to rename this.
- The Ember js app is a little slow becasue all of the product data is loading in on call, obviously this should be broken up for a live solution.

##Artitecture
- /index.php - Ember Application
- /controllers - controllers for data manipulation
- /models - models or loading data and filter functions
- /views - api endpoints that can be accessed in broser or via ember app

##API Endpoints
- The Api had two endpoints /views/appProducts.php and /views/productByPLU.php
- Pass ?PLU="some-plu" on the url to use /views/productByPLU.php

Thanks.
