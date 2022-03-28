<!-- shopping cart section-->        
<section id="cart">
    <div class="container-fluid w-75 mt-3">
        <h5>Shopping Cart</h5>
        <!-- shopping cart items -->
        <div class="row">
            <div class="col-sm-9">
            <?php
                
            ?>

                <!-- cart item -->
                <div class="row border-top py-3 mt-3">
                    
                    <div class="col-sm-2">
                        <img src="./assets/products/1.png" alt="cart1" class="img-fluid">
                    </div>
                    <div class="col-8">
                        <h5>Samsung Galaxy 10</h5>
                        <small>by Samsung</small>
                        <!-- product rating -->
                        <div class="d-flex">
                            <span><i><div class="fas fa-star"></div></i></span>
                            <span><i><div class="fas fa-star"></div></i></span>
                            <span><i><div class="fas fa-star"></div></i></span>
                            <span><i><div class="fas fa-star"></div></i></span>
                            <span><i><div class="fas fa-star"></div></i></span>
                            <a href="#" class="px-4 font-size-14">20.541 reviews</a>
                        </div>
                        <!-- !product rating -->

                        <!-- product qty -->
                        <div class="qty d-flex">
                            
                            <div class="px-4 d-flex pt-2">
                                <button id="qty_up" class="qty-up border bg-light"> <i class="fas fa-angle-up"></i></button>
                                <input type="text" class="qty_input border px-2 w-100 bg-light text-center " disabled value="1"> 
                                <button class="qty-down border bg-light"> <i class="fas fa-angle-down"></i></button>
                                
                            </div>
                            <button type="submit" class="btn text-danger mt-2">Delete</button>
                        <button type="submit" class="btn text-primary   mt-2">Save for later</button>
                        </div>
                        <!-- !product qty -->
                        
                        
                    </div>

                    <div class="col-sm-2 text-right">
                        <div class="font-size-20 text-danger">
                            $ <span class="product_price">150</span>
                        </div>
                    </div>  

                </div>
                <!-- !cart item -->
                               
            </div>

            <!-- subtotal -->            
            <div class="col-3">
                <!-- i stopped at sub-total section. SUBTOTAL is not finished -->
                <div class="sub-total border text-center mt-2">
                    <h6 class="font-size-12 text-success py-3"><i class="fas fa-check"></i> Your order ready to send</h6>
                    <div class="border-top py-4">
                        <h5>  Subtotal (2 items) &nbsp; <span class="text-danger" id="real-price">$152</span></h5>
                        <button type="submit" class="btn btn-warning mt-3">Pay</button>
                    </div>
                </div>
            </div>
            <!-- !subtotal -->

        </div>
        <!-- !shopping cart items -->
    </div>
</section>
<!-- !shopping cart section-->