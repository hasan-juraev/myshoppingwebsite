<?php
    $item_id = $_GET['item_id'] ?? 1;
    foreach ($product->getData() as $row) :
        if ($row['item_id'] == $item_id) :
?>
<!-- product section -->
<section id="product" class="py-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <img src=" <?php echo $row['item_image']?? "./assets/products/2.png" ?>" alt="product" class="img-fluid">
                <div class="form-row pt-4 font-size-15">

                   <div class="col">
                        <button type="submit" class="btn btn-danger form-control">Proceed to Buy</button>
                    </div>
                    <div class="col">
                        <?php
                        // if (in_array($item['item_id'], $Cart->getCartId($product->getData('cart')) ?? [])){
                        //     echo '<button type="submit" disabled class="btn btn-success font-size-16 form-control">In the Cart</button>';
                        // }else{
                        //     echo '<button type="submit" name="top_sale_submit" class="btn btn-warning font-size-16 form-control">Add to Cart</button>';
                        // }
                        ?>
                    </div>
                    

                </div>
            </div>

            <div class="col-lg-6 py-5">
                <h5 id="headersam"><?php echo $row['item_name']?? "Unknown" ?></h5>
                <small>by <?php echo $row['item_name']?? "Brand" ?></small>
                <div class="d-flex">
                    <span><i><div class="fas fa-star"></div></i></span>
                    <span><i><div class="fas fa-star"></div></i></span>
                    <span><i><div class="fas fa-star"></div></i></span>
                    <span><i><div class="fas fa-star"></div></i></span>
                    <span><i><div class="fas fa-star"></div></i></span>
                    <a href="#" class="px-4 font-size-14">20.541 reviews</a>
                </div>
                <hr class="my-0">

                <!-- product price -->
                    <table class="my-3">
                        <tr class="font-size-14">
                            <td>M.R.P</td>
                            <td><strike>$162.00</strike></td>
                        </tr>
                        <tr class="font-size-14">
                            <td>Deal price:</td>
                            <td class="font-size-20 text-danger">$<span> <?php echo $row['item_price']?? "0" ?></span></td>
                        </tr>
                        <tr class="font-size-14">
                            <td>You save:</td>
                            <td class="font-size-20 text-danger">$<span> 20.00</span></td>
                        </tr>
                        
                    </table>
                <!-- !product price -->
                
                <!-- policy -->
                    <div id="policy">
                        <div class="d-flex">

                            <div class="return text-center mr-5"> 
                                <div class="font-size-20 my-2 text-primary">
                                    <span class="fas fa-retweet border p-3 rounded-pill"></span>
                                </div>
                                <a href="#" class="font-size-12">10 Days Replacement </a>
                            </div>
                            <div class="return text-center mr-5"> 
                                <div class="font-size-20 my-2 text-primary">
                                    <span class="fas fa-truck border p-3 rounded-pill"></span>
                                </div>
                                <a href="#" class="font-size-12">Hasanboy Shop Delivered</br> </a>
                            </div>
                            <div class="return text-center mr-5"> 
                                <div class="font-size-20 my-2 text-primary">
                                    <span class="fas fa-check-double border p-3 rounded-pill"></span>
                                </div>
                                <a href="#" class="font-size-12">3 months Warranty </a>
                            </div>

                        </div>
                    </div>
                <!-- !policy -->

                <hr>
                <!-- order detail -->
                <div id="order-detail" class="d-flex flex-column text-dark">
                    <small>Delivered by: Mar29 ~ Apr1</small>
                    <small>Seller: <i> Hasanboy Shop</i><a href="#"> 4.5 out of  5 | 18,987 reviews</a></small>
                    <small>Shipped from: Uzbekistan</small>
                </div>
                <!-- !order detail -->

                <!-- additional details -->
                <div class="row">

                    <!-- color -->
                    <div class="col-6"></div>                                
                        <div class="color my-3">
                            <div class="d-flex justify-content-between">
                                <h6>Color:</h6>
                                <div class="mx-2 bg-dark rounded-circle"><button class="btn font-size-14"></button></div>
                                <div class="mx-2 bg-danger rounded-circle"><button class="btn font-size-14"></button></div>
                                <div class="mx-2 bg-warning rounded-circle"><button class="btn font-size-14"></button></div>
                            </div>
                        </div>                                
                    </div>
                    <!-- !color -->

                    <!-- quantity -->                                
                    <div class="col-6">
                        <div class="qty d-flex">
                            <h6>Qty:</h6>
                            <div class="px-4 d-flex">
                                <button id="qty_up" class="qty-up border bg-light" data-id="pro1"> <i class="fas fa-angle-up"></i></button>
                                <input type="text" data-id="pro1" class="qty_input border px-2 w-50 bg-light" disabled value="1"> 
                                <button class="qty-down border bg-light" data-id="pro1"> <i class="fas fa-angle-down"></i></button>
                            </div>
                        </div>
                    </div>
                    <!-- !quantity -->

                    <!-- size -->
                    <div class="size my-3">
                        <h6>Size:</h6>
                        <div class="d-flex justify-content-between">
                            <div class="border p-2">
                                <button id="gbfour" class="btn btn-light">4GB RAM</button>
                            </div>
                            <div class="border p-2">
                                <button class="btn btn-light">4GB RAM</button>
                            </div>
                            <div class="border p-2">
                                <button class="btn btn-light">4GB RAM</button>
                            </div>
                        </div>
                    </div>
                    <!-- !size -->                             

                </div>
                <!-- !additional details -->                
            </div>

            <!-- product description -->                   
            <div class="col-12">
                <h6>Product Description</h6>
                <hr>
                <p class="font-size-14">Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore facilis suscipit voluptate minus sed dignissimos quasi incidunt delectus, possimus amet obcaecati similique laborum optio perspiciatis aperiam iusto voluptatem temporibus molestiae.</p>
                <p class="font-size-14">Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore facilis suscipit voluptate minus sed dignissimos quasi incidunt delectus, possimus amet obcaecati similique laborum optio perspiciatis aperiam iusto voluptatem temporibus molestiae.</p>
            </div>
                <!-- !product description -->
                
        </div>
    </div>
</section>
<!-- !product section -->

<?php
        endif;
        endforeach;
?>