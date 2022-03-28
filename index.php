<?php

    ob_start();

    // reuqire_once header
    include ("php/header.php");
    // reuqire_once header

    // include _banner-area
    include("Template/_banner-area.php");
    // include _banner-area

    // include _top-sale.php
    include("Template/_top-sale.php");
    // include _top-sale.php

    // include special price
    include("Template/_special-price.php");
    // include special price

   

    // include _ads.php
    include("Template/_ads.php");
    // include _ads.php     

    // include new phones
    include("Template/_new-phones.php");
    // include new phones

    // include blogs
    include("Template/_blogs.php");
    // include blogs

    // include footer.php
    include("footer.php");
    // include footer.php
?>