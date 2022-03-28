<!-- Speacial price -->
<?php 

   // request method post
   if($_SERVER['REQUEST_METHOD'] == "POST"){
        if (isset($_POST['special_price'])){
            // call method addToCart
            $Cart->addToCart($_POST['user_id'], $_POST['item_id']);
        }
    }

    $brand = array_map(function($pro){ return $pro['item_brand'];}, $product_shuffle);

    $unique = array_unique($brand);

    sort($unique);
    
?>

<section id="special-price">

    <div class="container">

        <h4  id="demo"class="font-size-20" onmouseover="myFunction()">Special Price</h4>
        <hr>

        <!-- All brand and brand names are dynami-->
        <!-- When a new brand is added, no need to add mannually -->
        <div id='filters' class="button-group text-right my-2">
            <button class="btn-is-checked" data-filter="*">All Brand</button>

            <?php 
                array_map(function($brand){

                    printf('<button class="btn-is-checked mx-2" data-filter=".%s">%s</button>', $brand, $brand);

                }, $unique);
            ?>
            
        </div>

        <!-- grid -->
        <div class="grid">
            <?php

            // $product_shuffle = $product->getData();

            shuffle($product_shuffle);

            foreach($product_shuffle as $row){

            ?>

            <div class="grid-item m-2 rounded border <?php echo $row['item_brand']; ?>">
                <!-- product -->
                <div class="item py-2" style="width: 200px;">
                    <div class="product" >
                        <a href="<?php printf('%s?item_id=%s', 'product.php', $row['item_id']); ?>"> <img style="width: 200px;" src="<?php echo $row['item_image']; ?>" alt="product"></a>
                        <div class="text-center">
                            <h6><?php echo $row['item_name']; ?></h6>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                            </div>

                            <div class="price py-2">
                            <span><?php echo $row['item_price']; ?></span>
                            </div>

                            <form method="post">
                                <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?? '1'; ?>">
                                <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                                <button type="submit" name="special_price" class="btn btn-warning font-size-12">Add to Cart</button>
                                <?php
                                // if (in_array($item['item_id'], $Cart->getCartId($product->getData('cart')) ?? [])){
                                //     echo '<button type="submit" disabled class="btn btn-success font-size-12">In the Cart</button>';
                                // }else{
                                //     echo '<button type="submit" name="top_sale_submit" class="btn btn-warning font-size-12">Add to Cart</button>';
                                // }
                            ?>

                            </form>

                        </div>
                    </div>                
                </div>
                <!-- !product -->                           
            </div>        

            <!-- closing bracket, foreach loop -->
            <?php } ?>
        

        </div>
        <!-- !grid -->

    </div>

</section>