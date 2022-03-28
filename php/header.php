<?php 
    session_start();

    require_once("php/createDb.php");
    require_once("./php/component.php");

    //create instance of createDb class
    //$database = new createDb("Productdb", "Producttb");

    if(isset($_POST['add'])){
        ///print_r($_SESSION['cart']);
        if(isset($_SESSION['cart'])){

            //$item_array_id arrayni ichiga product_id bilan index raqamlab olindi
            $item_array_id = array_column($_SESSION['cart'], "product_id");

            //agar $item_array_id ning ichida $_POST['product_id'] bo'lsa ya'ni buyum avval qo'shilgan bo'lsa
            if(in_array($_POST['product_id'], $item_array_id)){

               echo "<script>alert('Product is already added in the cart!')</script>";
               echo "<script> window.location = 'index.php'</script>";

            }else{

                $count = count($_SESSION['cart']);
                $item_array = array(
                    'product_id' => $_POST['product_id']
                );

                //$_SESSION['cart'] variable ni [$count] indexiga $item_arrayni joylashtirildi
                $_SESSION['cart'][$count] = $item_array;

            }

        }else{
            $item_array = array(
                'product_id' => $_POST['product_id']
            );

            // create new session varable
            $_SESSION['cart'][0] = $item_array;            
        }
    }
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
            content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Shopping Cart</title>

        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
        <!-- Bootstrap CDN -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
        
        <!-- External CSS -->
        <link rel="stylesheet" href="index_style.css">

        <?php
            // require functions.php
            require('functions.php');
        ?>
        
        <!-- Owl carousel -->
        <link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">
        <link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                // product qty section
                let $qty_up = $(".qty .qty-up");
                let $qty_down = $(".qty .qty-down");
                // let $input = $(".qty .qty_input");

                // click on qty up button
                $qty_up.click(function(e){
                    let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);
                    if($input.val() >= 1 && $input.val() <= 9){
                        $input.val(function(i, oldval){
                            return ++oldval;
                        })
                    }
                });

                // click on qty down button
                $qty_down.click(function(e){
                    let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);
                    if($input.val() > 1 && $input.val() <= 10){
                        $input.val(function(i, oldval){
                            return --oldval;
                        })
                    }
                });
        
            });
        </script>

        <style>
            .unorderd-list{
                list-style-type:none;
            }    
        </style>
    </head>

    <body>
    <header>
        <nav class="navbar navbar-expand-lg " id="navbar">
            <a href="index.php" class="navbar-brand">
                <h3 clas="px-5">
                    <i class="fas fa-shopping-basket"></i>Shopping Website
                </h3>
            </a>
            <button class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#navbarNavAltMarkup"
                aria-controls="#navbarNavAltMarkup"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon"></span>
            </button>        

            <div id="search-bar-container">
                <!-- Search form -->
                <form action="search.php" method="POST" class="form-inline d-flex justify-content-end justify-content-center  md-form form-sm mt-0">
                
                <input class="form-control form-control-sm ml-3 w-75" type="text" name="search-text" placeholder="Search"
                    aria-label="search-text">
                    <button id="search-button" type="submit"class="btn btn-outline-primary" ><i class="fas fa-search" aria-hidden="true"></i></button>
                    
                </form>          
            </div>

            <div class="collapse navbar-collapse float-right " id= "navbarNavAltMarkup">            
                <div class="mr-auto"></div>
                <div class="navbar-nav">
                    <!-- Shopping cart -->
                    <a href="#" class="nav-item nav-link">Login<i class="fas fa-sign-in-alt" aria-hidden="true"></i></a>
                    <a href="cart.php" class="nav-item nav-link ative">
                        <h5 class="px-5 cart">
                            <i class="fas fa-shopping-cart"></i>cart
                            <?php 
                                if(isset($_SESSION['cart'])){
                                    $count = count($_SESSION['cart']);
                                    echo "<span id=\"cart_count\" class=\"text-warning bg-light\">$count </span>";
                                }else{
                                    echo "<span id=\"cart_count\" class=\"text-warning bg-light\"> 0 </span>";
    
                                }
                            ?>
                            
                        </h5>
                    </a>                
                </div>
            </div>
        </nav>
    </header>
    <!-- start #main-site -->
    <main id="main-site">