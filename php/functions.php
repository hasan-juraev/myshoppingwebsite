<?php

// require MYSQL connection
require('database/DBController.php');


// require Product class
require('database/product.php');


// require Cart Class
require ('database/Cart.php');

// DB Controller object
$db = new DBController();


// Product object
$product = new Product($db);


// Cart object
$Cart = new Cart($db );
