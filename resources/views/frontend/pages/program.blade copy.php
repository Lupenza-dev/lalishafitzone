@extends('frontend.layouts.main')
@section('content')
<div id="page-content"> 
    <!--Page Header-->
    <div class="page-header text-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <!--Breadcrumbs-->
                    <div class="breadcrumbs"><a href="index.html" title="Back to the home page">Home</a><span class="main-title fw-bold"><i class="icon anm anm-angle-right-l"></i>Product Layout7</span></div>
                    <!--End Breadcrumbs-->
                </div>
            </div>
        </div>
    </div>
    <!--End Page Header-->

    <!--Main Content-->
    <div class="container">     
        <!--Product Content-->
        <div class="product-single">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-12 product-layout-img mb-4 mb-md-0">
                    <div class="product-sticky-style">
                        <!-- Product Horizontal -->
                        <div class="product-details-img product-thumb-left-style product-thumb-right-style d-flex flex-row-reverse">
                            <!-- Product Thumb -->
                            <div class="product-thumb thumb-left">
                                <div id="gallery" class="product-thumb-vertical h-100">
                                    @foreach ($program->pictures as $item)
                                    <a data-image="{{ asset('storage/uploads'.'/'.$item->image)}}" data-zoom-image="{{ asset('storage/uploads'.'/'.$item->image)}}" class="slick-slide slick-cloned active">
                                        <img class="blur-up lazyload" data-src="{{ asset('storage/uploads'.'/'.$item->image)}}" src="{{ asset('storage/uploads'.'/'.$item->image)}}" alt="product" width="625" height="808" />
                                    </a>   
                                    @endforeach
                                    
                                    {{-- <a data-image="assets/images/products/product2-1.jpg" data-zoom-image="assets/images/products/product2-1.jpg" class="slick-slide slick-cloned">
                                        <img class="blur-up lazyload" data-src="assets/images/products/product2-1.jpg" src="assets/images/products/product1-1.jpg" alt="product" width="625" height="808" />
                                    </a>
                                    <a data-image="assets/images/products/product2-2.jpg" data-zoom-image="assets/images/products/product2-2.jpg" class="slick-slide slick-cloned">
                                        <img class="blur-up lazyload" data-src="assets/images/products/product2-2.jpg" src="assets/images/products/product2-2.jpg" alt="product" width="625" height="808" />
                                    </a>
                                    <a data-image="assets/images/products/product2-3.jpg" data-zoom-image="assets/images/products/product2-3.jpg" class="slick-slide slick-cloned">
                                        <img class="blur-up lazyload" data-src="assets/images/products/product2-3.jpg" src="assets/images/products/product1-3.jpg" alt="product" width="625" height="808" />
                                    </a>
                                    <a data-image="assets/images/products/product2-4.jpg" data-zoom-image="assets/images/products/product2-4.jpg" class="slick-slide slick-cloned">
                                        <img class="blur-up lazyload" data-src="assets/images/products/product2-4.jpg" src="assets/images/products/product2-4.jpg" alt="product" width="625" height="808" />
                                    </a>
                                    <a data-image="assets/images/products/product2-5.jpg" data-zoom-image="assets/images/products/product2-5.jpg" class="slick-slide slick-cloned">
                                        <img class="blur-up lazyload" data-src="assets/images/products/product2-5.jpg" src="assets/images/products/product2-5.jpg" alt="product" width="625" height="808" />
                                    </a> --}}
                                </div>
                            </div>
                            <!-- End Product Thumb -->

                            <!-- Product Main -->
                            <div class="zoompro-wrap product-zoom-right">
                                <!-- Product Image -->
                                <div class="zoompro-span"><img id="zoompro" class="zoompro" src="{{ asset('storage/uploads'.'/'.$program->cover['cover1'])}}" data-zoom-image="{{ asset('storage/uploads'.'/'.$program->cover['cover1'])}}" alt="product" width="625" height="808" /></div>
                                <!-- End Product Image -->
                                <!-- Product Label -->
                                <div class="product-labels"><span class="lbl pr-label1">New</span><span class="lbl on-sale">Sale</span></div>
                                <!-- End Product Label -->
                            </div>
                            <!-- End Product Main -->

                            <!-- Product Gallery -->
                            <div class="lightboximages">
                                @foreach ($program->pictures as $item)
                                <a href="{{ asset('storage/uploads'.'/'.$item->image)}}" data-size="1000x1280"></a>
                                @endforeach
                                {{-- <a href="assets/images/products/product2-1.jpg" data-size="1000x1280"></a>
                                <a href="assets/images/products/product2-2.jpg" data-size="1000x1280"></a>
                                <a href="assets/images/products/product2-3.jpg" data-size="1000x1280"></a>
                                <a href="assets/images/products/product2-4.jpg" data-size="1000x1280"></a>
                                <a href="assets/images/products/product2-5.jpg" data-size="1000x1280"></a> --}}
                            </div>
                            <!-- End Product Gallery -->
                        </div>
                        <!-- End Product Horizontal -->

                        <!-- Social Sharing -->
                        <div class="social-sharing d-flex-center justify-content-center mt-3 mt-md-4 lh-lg">
                            <span class="sharing-lbl fw-600">Share :</span>
                            <a href="#" class="d-flex-center btn btn-link btn--share share-facebook"><i class="icon anm anm-facebook-f"></i><span class="share-title">Facebook</span></a>
                            <a href="#" class="d-flex-center btn btn-link btn--share share-twitter"><i class="icon anm anm-twitter"></i><span class="share-title">Tweet</span></a>
                            <a href="#" class="d-flex-center btn btn-link btn--share share-pinterest"><i class="icon anm anm-pinterest-p"></i> <span class="share-title">Pin it</span></a>
                            <a href="#" class="d-flex-center btn btn-link btn--share share-linkedin"><i class="icon anm anm-linkedin-in"></i><span class="share-title">Linkedin</span></a>
                            <a href="#" class="d-flex-center btn btn-link btn--share share-email"><i class="icon anm anm-envelope-l"></i><span class="share-title">Email</span></a>
                        </div>
                        <!-- End Social Sharing -->
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 col-12 product-layout-info">
                    <div class="product-wrap-bg text-center">
                        <!-- Product Details -->
                        <div class="product-single-meta">
                            <h2 class="product-main-title">Product Layout Style7</h2>
                            <!-- Product Price -->
                            <div class="product-price d-flex-center justify-content-center my-3">
                                <span class="price old-price">$999.00</span><span class="price">$899.00</span>
                            </div>
                            <!-- End Product Price -->
                            <!-- Product Reviews -->
                            <div class="product-review d-flex-center justify-content-center mb-3">
                                <div class="reviewStar d-flex-center"><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star-o"></i><span class="caption ms-2">24 Reviews</span></div>
                                <a class="reviewLink d-flex-center" href="#reviews">Write a Review</a>
                            </div>
                            <!-- End Product Reviews -->
                            <div class="userViewMsg featureText" data-user="20" data-time="11000"><i class="icon anm anm-eye-r"></i><b class="uersView">21</b> People are Looking for this Product</div> 
                            <hr />
                            <!-- Sort Description -->
                            <div class="sort-description mb-3">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form</div>
                            <!-- End Sort Description -->
                            <hr />
                            <!-- Product Info -->
                            <div class="shippingMsg featureText"><i class="icon anm anm-clock-r"></i>Estimated Delivery Between <b id="fromDate">Wed, May 1</b> and <b id="toDate">Tue, May 7</b>.</div>                             
                            <!-- End Product Info -->
                            <!-- Product Sold -->
                            <div class="orderMsg d-flex-center justify-content-center mb-3" data-user="23" data-time="24">
                                <i class="icon anm anm-medapps"></i>
                                <p class="m-0"><strong class="items">8</strong> Sold in last <strong class="time">14</strong> hours</p>
                                <p id="quantity_message" class="ms-2 ps-2 border-start">Hurry up! only <span class="items fw-bold">4</span> products left in stock!</p>
                            </div>
                            <!-- End Product Sold -->
                            <!-- Countdown -->
                            <div class="inline-countdown d-flex-center justify-content-center text-center my-3" data-countdown="2024/12/12"></div>                                           
                            <!-- End Countdown -->
                        </div>
                        <!-- End Product Details -->

                        <!-- Product Form -->
                        <form method="post" action="#" class="product-form product-form-border hidedropdown">
                            <!-- Product Choose Style -->
                            <div class="product-choose-style mb-4">
                                <h5 class="choose-title mb-3">Choose Style</h5>
                                <div class="row row-cols-lg-5 row-cols-md-3 row-cols-3 g-3 justify-content-center choose-wrap grid-products">
                                    <div class="choose-item item active">
                                        <div class="product-box">
                                            <div class="product-image mb-2">
                                                <a href="product-layout1.html" class="product-img">
                                                    <img class="primary blur-up lazyload" data-src="assets/images/products/product1-120x170.jpg" src="assets/images/products/product1-120x170.jpg" alt="Product" title="Product" width="120" height="170" />
                                                    <img class="hover blur-up lazyload" data-src="assets/images/products/product1-120x170-1.jpg" src="assets/images/products/product1-120x170-1.jpg" alt="Product" title="Product" width="120" height="170" />
                                                </a>
                                            </div>
                                            <div class="choose-info"><a href="product-layout1.html">Shirt</a></div>
                                        </div>
                                    </div>
                                    <div class="choose-item item">
                                        <div class="product-box">
                                            <div class="product-image mb-2">
                                                <a href="product-layout1.html" class="product-img">
                                                    <img class="primary blur-up lazyload" data-src="assets/images/products/product2-120x170.jpg" src="assets/images/products/product2-120x170.jpg" alt="Product" title="Product" width="120" height="170" />
                                                    <img class="hover blur-up lazyload" data-src="assets/images/products/product2-120x170-1.jpg" src="assets/images/products/product2-120x170-1.jpg" alt="Product" title="Product" width="120" height="170" />
                                                </a>
                                            </div>
                                            <div class="choose-info"><a href="product-layout1.html">Cap</a></div>
                                        </div>
                                    </div>
                                    <div class="choose-item item">
                                        <div class="product-box">
                                            <div class="product-image mb-2">
                                                <a href="product-layout1.html" class="product-img">
                                                    <img class="primary blur-up lazyload" data-src="assets/images/products/product4-120x170.jpg" src="assets/images/products/product4-120x170.jpg" alt="Product" title="Product" width="120" height="170" />
                                                    <img class="hover blur-up lazyload" data-src="assets/images/products/product4-120x170-1.jpg" src="assets/images/products/product4-120x170-1.jpg" alt="Product" title="Product" width="120" height="170" />
                                                </a>
                                            </div>
                                            <div class="choose-info"><a href="product-layout1.html">T-Shirt</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Product Choose Style -->

                            <!-- Swatches -->
                            <div class="product-swatches-option">
                                <!-- Swatches Color -->
                                <div class="product-item swatches-image w-100 mb-4 swatch-0 option1" data-option-index="0">
                                    <label class="label d-flex align-items-center justify-content-center">Color:<span class="slVariant ms-1 fw-bold">Blue</span></label>
                                    <ul class="variants-clr swatches d-flex-center justify-content-center pt-1 clearfix">
                                        <li class="swatch x-large radius available active blue"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="Blue"></span></li>
                                        <li class="swatch x-large radius available black"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="Black"></span></li>
                                        <li class="swatch x-large radius available purple"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="Purple"></span></li>
                                        <li class="swatch x-large radius available green"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="Green"></span></li>
                                        <li class="swatch x-large radius soldout yellow"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="Yellow"></span></li>
                                    </ul>
                                </div>
                                <!-- End Swatches Color -->
                                <!-- Swatches Size -->
                                <div class="product-item swatches-size w-100 mb-4 swatch-1 option2" data-option-index="1">
                                    <label class="label d-flex align-items-center justify-content-center">Size:<span class="slVariant ms-1 fw-bold">S</span> <a href="#sizechart-modal" class="text-link sizelink text-muted size-chart-modal" data-bs-toggle="modal" data-bs-target="#sizechart_modal">Size Guide</a></label>
                                    <ul class="variants-size size-swatches d-flex-center justify-content-center pt-1 clearfix">
                                        <li class="swatch x-large radius soldout"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="XS">XS</span></li>
                                        <li class="swatch x-large radius available active"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="S">S</span></li>
                                        <li class="swatch x-large radius available"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="M">M</span></li>
                                        <li class="swatch x-large radius available"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="L">L</span></li>
                                        <li class="swatch x-large radius available"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="XL">XL</span></li>
                                    </ul>
                                </div>                                
                                <!-- End Swatches Size -->
                            </div>                                 
                            <!-- End Swatches -->

                            <!-- Product Action -->
                            <div class="product-action w-100 d-flex-wrap justify-content-center mb-2 mb-md-2">
                                <!-- Product Info link -->
                                <div class="infolinks w-100 d-flex-center justify-content-center mb-3">
                                    <a class="text-link wishlist" href="wishlist-style1.html"><i class="icon anm anm-heart-l me-2"></i> <span>Add to Wishlist</span></a>
                                    <a class="text-link compare" href="compare-style1.html"><i class="icon anm anm-sync-ar me-2"></i> <span>Add to Compare</span></a>
                                    <a href="#shippingInfo-modal" class="text-link shippingInfo" data-bs-toggle="modal" data-bs-target="#shippingInfo_modal"><i class="icon anm anm-paper-l-plane me-2"></i> <span>Delivery &amp; Returns</span></a>
                                    <a href="#productInquiry-modal" class="text-link emaillink me-0" data-bs-toggle="modal" data-bs-target="#productInquiry_modal"><i class="icon anm anm-question-cil me-2"></i> <span>Enquiry</span></a>
                                </div>
                                <!-- End Product Info link -->
                                <!-- Product Quantity -->
                                <div class="product-form-quantity d-flex-center">
                                    <div class="qtyField">
                                        <a class="qtyBtn minus" href="#;"><i class="icon anm anm-minus-r"></i></a>
                                        <input type="text" name="quantity" value="1" class="product-form-input qty" />
                                        <a class="qtyBtn plus" href="#;"><i class="icon anm anm-plus-r"></i></a>
                                    </div>
                                </div>
                                <!-- End Product Quantity -->
                                <!-- Product Add -->
                                <div class="product-form-submit addcart fl-1 ms-3">
                                    <button type="submit" name="add" class="btn btn-secondary product-form-cart-submit">
                                        <span>Add to cart</span>
                                    </button>
                                </div>
                                <!-- Product Add -->
                                <!-- Product Buy -->
                                <div class="product-form-submit buyit fl-1 ms-3">
                                    <button type="submit" class="btn btn-primary proceed-to-checkout"><span>Buy it now</span></button>
                                </div>
                                <!-- End Product Buy -->
                            </div>
                            <!-- End Product Action -->
                        </form>
                        <!-- End Product Form -->

                        <!-- Product Info -->
                        <div class="product-info">
                            <p class="product-stock d-flex justify-content-center">Availability:
                                <span class="pro-stockLbl ps-0">
                                    <span class="d-flex-center stockLbl instock text-uppercase">In stock</span>
                                </span>
                            </p>
                            <p class="product-vendor">Vendor:<span class="text"><a href="#">Sparx</a></span></p>  
                            <p class="product-type">Product Type:<span class="text">Bottom</span></p> 
                            <p class="product-sku">SKU:<span class="text">RF104741</span></p>
                            <p class="product-cat">Categories: <span><a href="#">Fashion</a>, <a href="#">Tops</a>, <a href="#">Women</a>, <a href="#">New Arrivals</a></span></p>
                            <p class="product-tags">Tags: <span><a href="#">$10 - $100</a>, <a href="#">Green</a>, <a href="#">XL</a>, <a href="#">Sale</a>, <a href="#">Women</a></span></p>
                        </div>
                        <!-- End Product Info -->
                    </div>
                </div>
            </div>
        </div>
        <!--Product Content-->

        <!--Product Nav-->
        <a href="product-layout6.html" class="product-nav prev-pro clr-none d-flex-center justify-content-between" title="Previous Product">
            <span class="details">
                <span class="name">Oxford Cuban Shirt</span>
                <span class="price">$99.00</span>
            </span>
            <span class="img"><img src="assets/images/products/product5-120x170.jpg" alt="product" width="120" height="170" /></span>
        </a>
        <a href="product-layout1.html" class="product-nav next-pro clr-none d-flex-center justify-content-between" title="Next Product">
            <span class="img"><img src="assets/images/products/product1-120x170.jpg" alt="product" width="120" height="170" /></span>
            <span class="details">
                <span class="name">Cuff Beanie Cap</span>
                <span class="price">$128</span>
            </span>
        </a>
        <!--End Product Nav-->

        <!--Product Tab vertical-->
        <div class="row tab-vertical-style section pb-0">
            <div class="col-12 col-sm-3 mb-2 sm-md-0">
                <div class="nav flex-column nav-pills" id="vertical-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active" id="description-tab" data-bs-toggle="pill" href="#description" role="tab" aria-controls="description" aria-selected="true">Description</a>
                    <a class="nav-link" id="additionalInformation-tab" data-bs-toggle="pill" href="#additionalInformation" role="tab" aria-controls="additionalInformation" aria-selected="false">Additional Information</a>
                    <a class="nav-link" id="sizeChart-tab" data-bs-toggle="pill" href="#sizeChart" role="tab" aria-controls="sizeChart" aria-selected="false">Size Chart</a>
                    <a class="nav-link" id="shippingReturn-tab" data-bs-toggle="pill" href="#shippingReturn" role="tab" aria-controls="shippingReturn" aria-selected="false">Shipping &amp; Return</a>
                    <a class="nav-link" id="reviewt-tab" data-bs-toggle="pill" href="#reviewt" role="tab" aria-controls="reviewt" aria-selected="false">Reviews</a>
                </div>
            </div>
            <div class="col-12 col-sm-9">
                <div class="tab-content" id="vertical-tabContent">
                    <!--Description-->
                    <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                        <div class="product-description">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                    <h4 class="mb-3">Features</h4>
                                    <ul class="checkmark-info">
                                        <li>High quality fabric, very comfortable to touch and wear.</li>
                                        <li>This cardigan sweater is cute for no reason,perfect for travel and casual.</li>
                                        <li>It can tie in front-is forgiving to you belly or tie behind.</li>
                                        <li>Light weight and perfect for layering.</li>
                                    </ul>
                                    <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Description-->
                    <!--Additional Information-->
                    <div class="tab-pane fade" id="additionalInformation" role="tabpanel" aria-labelledby="additionalInformation-tab">
                        <div class="product-description">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="table-responsive">
                                        <table class="table table-bordered align-middle table-part mb-0">
                                            <tr>
                                                <th>Color</th>
                                                <td>Black, White, Blue, Red, Gray</td>
                                            </tr>
                                            <tr>
                                                <th>Product Dimensions</th>
                                                <td>15 x 15 x 3 cm; 250 Grams</td>
                                            </tr>
                                            <tr>
                                                <th>Date First Available</th>
                                                <td>14 May 2023</td>
                                            </tr>
                                            <tr>
                                                <th>Manufacturer</th>
                                                <td>Fashion and Retail Limited</td>
                                            </tr>
                                            <tr>
                                                <th>Department</th>
                                                <td>Men Shirt</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Additional Information-->
                    <!--Size Chart-->
                    <div class="tab-pane fade" id="sizeChart" role="tabpanel" aria-labelledby="sizeChart-tab">
                        <div id="size-chart">
                            <h4 class="mb-2">Ready to Wear Clothing</h4>
                            <p class="mb-4">This is a standardised guide to give you an idea of what size you will need, however some brands may vary from these conversions.</p>
                            <div class="size-chart-tbl table-responsive px-1">
                                <table class="table-bordered align-middle mb-0">
                                    <thead>
                                        <tr>
                                            <th>Size</th>
                                            <th>XXS - XS</th>
                                            <th>XS - S</th>
                                            <th>S - M</th>
                                            <th>M - L</th>
                                            <th>L - XL</th>
                                            <th>XL - XXL</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th>UK</th>
                                            <td>6</td>
                                            <td>8</td>
                                            <td>10</td>
                                            <td>12</td>
                                            <td>14</td>
                                            <td>16</td>
                                        </tr>
                                        <tr>
                                            <th>US</th>
                                            <td>2</td>
                                            <td>4</td>
                                            <td>6</td>
                                            <td>8</td>
                                            <td>10</td>
                                            <td>12</td>
                                        </tr>
                                        <tr>
                                            <th>Italy (IT)</th>
                                            <td>38</td>
                                            <td>40</td>
                                            <td>42</td>
                                            <td>44</td>
                                            <td>46</td>
                                            <td>48</td>
                                        </tr>
                                        <tr>
                                            <th>France (FR/EU)</th>
                                            <td>34</td>
                                            <td>36</td>
                                            <td>38</td>
                                            <td>40</td>
                                            <td>42</td>
                                            <td>44</td>
                                        </tr>
                                        <tr>
                                            <th>Denmark</th>
                                            <td>32</td>
                                            <td>34</td>
                                            <td>36</td>
                                            <td>38</td>
                                            <td>40</td>
                                            <td>42</td>
                                        </tr>
                                        <tr>
                                            <th>Russia</th>
                                            <td>40</td>
                                            <td>42</td>
                                            <td>44</td>
                                            <td>46</td>
                                            <td>48</td>
                                            <td>50</td>
                                        </tr>
                                        <tr>
                                            <th>Germany</th>
                                            <td>32</td>
                                            <td>34</td>
                                            <td>36</td>
                                            <td>38</td>
                                            <td>40</td>
                                            <td>42</td>
                                        </tr>
                                        <tr>
                                            <th>Japan</th>
                                            <td>5</td>
                                            <td>7</td>
                                            <td>9</td>
                                            <td>11</td>
                                            <td>13</td>
                                            <td>15</td>
                                        </tr>
                                        <tr>
                                            <th>Australia</th>
                                            <td>6</td>
                                            <td>8</td>
                                            <td>10</td>
                                            <td>12</td>
                                            <td>14</td>
                                            <td>16</td>
                                        </tr>
                                        <tr>
                                            <th>Korea</th>
                                            <td>33</td>
                                            <td>44</td>
                                            <td>55</td>
                                            <td>66</td>
                                            <td>77</td>
                                            <td>88</td>
                                        </tr>
                                        <tr>
                                            <th>China</th>
                                            <td>160/84</td>
                                            <td>165/86</td>
                                            <td>170/88</td>
                                            <td>175/90</td>
                                            <td>180/92</td>
                                            <td>185/94</td>
                                        </tr>
                                        <tr>
                                            <th>Jeans</th>
                                            <td>24-25</td>
                                            <td>26-27</td>
                                            <td>27-28</td>
                                            <td>29-30</td>
                                            <td>31-32</td>
                                            <td>32-33</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!--End Size Chart-->
                    <!--Shipping &amp; Return-->
                    <div class="tab-pane fade" id="shippingReturn" role="tabpanel" aria-labelledby="shippingReturn-tab">
                        <div id="shipping-return">
                            <h4 class="pb-1">Shipping &amp; Return</h4>
                            <ul class="checkmark-info">
                                <li>Dispatch: Within 24 Hours</li>
                                <li>1 Year Brand Warranty</li>
                                <li>Free shipping across all products on a minimum purchase of $50.</li>
                                <li>International delivery time - 7-10 business days</li>
                                <li>Cash on delivery might be available</li>
                                <li>Easy 30 days returns and exchanges</li>
                            </ul>
                            <h4 class="pt-1">Free and Easy Returns</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                            <h4 class="pt-1">Special Financing</h4>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage.</p>
                        </div>
                    </div>
                    <!--End Shipping &amp; Return-->
                    <!--Review-->
                    <div class="tab-pane fade" id="reviewt" role="tabpanel" aria-labelledby="reviewt-tab">
                        <div id="reviews">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-4 mb-4">
                                    <div class="ratings-main">
                                        <div class="avg-rating d-flex-center mb-3">
                                            <h4 class="avg-mark">4.5</h4>
                                            <div class="avg-content ms-3">
                                                <p class="text-rating">Average Rating</p>
                                                <div class="ratings-full product-review">
                                                    <a class="reviewLink d-flex-center" href="#reviews"><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star-o"></i><span class="caption ms-2">24 Ratings</span></a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="ratings-list">
                                            <div class="ratings-container d-flex align-items-center mt-1">
                                                <div class="ratings-full product-review m-0">
                                                    <a class="reviewLink d-flex align-items-center" href="#reviews"><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star-o"></i></a>
                                                </div>
                                                <div class="progress"><div class="progress-bar" role="progressbar" aria-valuenow="99" aria-valuemin="0" aria-valuemax="100" style="width:99%;"></div></div>
                                                <div class="progress-value">99%</div>
                                            </div>
                                            <div class="ratings-container d-flex align-items-center mt-1">
                                                <div class="ratings-full product-review m-0">
                                                    <a class="reviewLink d-flex align-items-center" href="#reviews"><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star-o"></i></a>
                                                </div>
                                                <div class="progress"><div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width:75%;"></div></div>
                                                <div class="progress-value">75%</div>
                                            </div>
                                            <div class="ratings-container d-flex align-items-center mt-1">
                                                <div class="ratings-full product-review m-0">
                                                    <a class="reviewLink d-flex align-items-center" href="#reviews"><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i></a>
                                                </div>
                                                <div class="progress"><div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%;"></div></div>
                                                <div class="progress-value">50%</div>
                                            </div>
                                            <div class="ratings-container d-flex align-items-center mt-1">
                                                <div class="ratings-full product-review m-0">
                                                    <a class="reviewLink d-flex align-items-center" href="#reviews"><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i></a>
                                                </div>
                                                <div class="progress"><div class="progress-bar" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width:25%;"></div></div>
                                                <div class="progress-value">25%</div>
                                            </div>
                                            <div class="ratings-container d-flex align-items-center mt-1">
                                                <div class="ratings-full product-review m-0">
                                                    <a class="reviewLink d-flex align-items-center" href="#reviews"><i class="icon anm anm-star"></i><i class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i></a>
                                                </div>
                                                <div class="progress"><div class="progress-bar" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100" style="width:5%;"></div></div>
                                                <div class="progress-value">05%</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-12 col-md-12 col-lg-8 mb-4">
                                    <form method="post" action="#" class="product-review-form new-review-form">
                                        <h3 class="spr-form-title">Write a Review</h3>
                                        <p>Your email address will not be published. Required fields are marked *</p>
                                        <fieldset class="row spr-form-contact">
                                            <div class="col-sm-6 spr-form-contact-name form-group">
                                                <label class="spr-form-label" for="nickname">Name <span class="required">*</span></label>
                                                <input class="spr-form-input spr-form-input-text" id="nickname" type="text" name="name" required />
                                            </div>
                                            <div class="col-sm-6 spr-form-contact-email form-group">
                                                <label class="spr-form-label" for="email">Email <span class="required">*</span></label>
                                                <input class="spr-form-input spr-form-input-email " id="email" type="email" name="email" required />
                                            </div>
                                            <div class="col-sm-6 spr-form-review-title form-group">
                                                <label class="spr-form-label" for="review">Review Title </label>
                                                <input class="spr-form-input spr-form-input-text " id="review" type="text" name="review" />
                                            </div>
                                            <div class="col-sm-6 spr-form-review-rating form-group">
                                                <label class="spr-form-label">Rating</label>
                                                <div class="product-review pt-1">
                                                    <div class="review-rating">
                                                        <a href="#;"><i class="icon anm anm-star-o"></i></a><a href="#;"><i class="icon anm anm-star-o"></i></a><a href="#;"><i class="icon anm anm-star-o"></i></a><a href="#;"><i class="icon anm anm-star-o"></i></a><a href="#;"><i class="icon anm anm-star-o"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 spr-form-review-body form-group">
                                                <label class="spr-form-label" for="message">Body of Review <span class="spr-form-review-body-charactersremaining">(1500) characters remaining</span></label>
                                                <div class="spr-form-input">
                                                    <textarea class="spr-form-input spr-form-input-textarea" id="message" name="message" rows="3"></textarea>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <div class="spr-form-actions clearfix">
                                            <input type="submit" class="btn btn-primary spr-button spr-button-primary" value="Submit Review" />
                                        </div>
                                    </form>
                                </div>

                                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="spr-reviews">
                                        <h3 class="spr-form-title">Customer Reviews</h3>
                                        <div class="review-inner">
                                            <div class="spr-review d-flex w-100">
                                                <div class="spr-review-profile flex-shrink-0">
                                                    <img class="blur-up lazyload" data-src="assets/images/users/user-img1.jpg" src="assets/images/users/user-img2.jpg" alt="" width="200" height="200" />
                                                </div>
                                                <div class="spr-review-content flex-grow-1">
                                                    <div class="d-flex justify-content-between flex-column mb-2">
                                                        <div class="title-review d-flex align-items-center justify-content-between">
                                                            <h5 class="spr-review-header-title text-transform-none mb-0">Eleanor Pena</h5>
                                                            <span class="product-review spr-starratings m-0"><span class="reviewLink"><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i></span></span>
                                                        </div>
                                                    </div>
                                                    <b class="head-font">Good and High quality</b>
                                                    <p class="spr-review-body">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
                                                </div>
                                            </div>
                                            <div class="spr-review d-flex w-100">
                                                <div class="spr-review-profile flex-shrink-0">
                                                    <img class="blur-up lazyload" data-src="assets/images/users/testimonial1.jpg" src="assets/images/users/testimonial3.jpg" alt="" width="200" height="200" />
                                                </div>
                                                <div class="spr-review-content flex-grow-1">
                                                    <div class="d-flex justify-content-between flex-column mb-2">
                                                        <div class="title-review d-flex align-items-center justify-content-between">
                                                            <h5 class="spr-review-header-title text-transform-none mb-0">Courtney Henry</h5>
                                                            <span class="product-review spr-starratings m-0"><span class="reviewLink"><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i></span></span>
                                                        </div>
                                                    </div>
                                                    <b class="head-font">Feature Availability</b>
                                                    <p class="spr-review-body">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Review-->
                </div>
            </div>
        </div>
        <!--Product Tab vertical-->
    </div>
    <!--End Main Content-->

    <!--Related Products-->
    <section class="section product-slider pb-0">
        <div class="container">
            <div class="section-header">
                <p class="mb-1 mt-0">Discover Similar</p>
                <h2>Related Products</h2>
            </div>

            <!--Product Grid-->
            <div class="product-slider-4items gp10 arwOut5 grid-products">
                <div class="item col-item">
                    <div class="product-box">
                        <!-- Start Product Image -->
                        <div class="product-image">
                            <!-- Start Product Image -->
                            <a href="product-layout1.html" class="product-img"><img class="blur-up lazyload" src="assets/images/products/product1.jpg" alt="Product" title="Product" width="625" height="808" /></a>
                            <!-- End Product Image -->
                            <!--Product Button-->
                            <div class="button-set style1">
                                <!--Cart Button-->
                                <a href="#quickshop-modal" class="btn-icon addtocart quick-shop-modal" data-bs-toggle="modal" data-bs-target="#quickshop_modal">
                                    <span class="icon-wrap d-flex-justify-center h-100 w-100" data-bs-toggle="tooltip" data-bs-placement="left" title="Quick Shop"><i class="icon anm anm-cart-l"></i><span class="text">Quick Shop</span></span>
                                </a>
                                <!--End Cart Button-->
                                <!--Quick View Button-->
                                <a href="#quickview-modal" class="btn-icon quickview quick-view-modal" data-bs-toggle="modal" data-bs-target="#quickview_modal">
                                    <span class="icon-wrap d-flex-justify-center h-100 w-100" data-bs-toggle="tooltip" data-bs-placement="left" title="Quick View"><i class="icon anm anm-search-plus-l"></i><span class="text">Quick View</span></span>
                                </a>
                                <!--End Quick View Button-->
                                <!--Wishlist Button-->
                                <a href="wishlist-style2.html" class="btn-icon wishlist" data-bs-toggle="tooltip" data-bs-placement="left" title="Add To Wishlist"><i class="icon anm anm-heart-l"></i><span class="text">Add To Wishlist</span></a>
                                <!--End Wishlist Button-->
                                <!--Compare Button-->
                                <a href="compare-style2.html" class="btn-icon compare" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Compare"><i class="icon anm anm-random-r"></i><span class="text">Add to Compare</span></a>
                                <!--End Compare Button-->
                            </div>
                            <!--End Product Button-->
                        </div>
                        <!-- End Product Image -->
                        <!-- Start Product Details -->
                        <div class="product-details text-left">
                            <!-- Product Name -->
                            <div class="product-name">
                                <a href="product-layout1.html">Oxford Cuban Shirt</a>
                            </div>
                            <!-- End Product Name -->
                            <!-- Product Price -->
                            <div class="product-price">
                                <span class="price old-price">$114.00</span><span class="price">$99.00</span>
                            </div>
                            <!-- End Product Price -->
                            <!-- Product Review -->
                            <div class="product-review">
                                <i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star-o"></i>
                                <span class="caption hidden ms-1">3 Reviews</span>
                            </div>
                            <!-- End Product Review -->
                            <!--Color Variant -->
                            <ul class="variants-clr swatches">
                                <li class="swatch medium radius"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="Navy"><img src="assets/images/products/product1.jpg" alt="img" width="625" height="808"></span></li>
                                <li class="swatch medium radius"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="Green"><img src="assets/images/products/product1-1.jpg" alt="img" width="625" height="808"></span></li>
                                <li class="swatch medium radius"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="Gray"><img src="assets/images/products/product1-2.jpg" alt="img" width="625" height="808"></span></li>
                                <li class="swatch medium radius"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="Orange"><img src="assets/images/products/product1-3.jpg" alt="img" width="625" height="808"></span></li>
                            </ul>
                            <!-- End Variant -->
                        </div>
                        <!-- End product details -->
                    </div>
                </div>
                <div class="item col-item">
                    <div class="product-box">
                        <!-- Start Product Image -->
                        <div class="product-image">
                            <!-- Start Product Image -->
                            <a href="product-layout1.html" class="product-img">
                                <!-- Image -->
                                <img class="primary blur-up lazyload" data-src="assets/images/products/product2.jpg" src="assets/images/products/product2.jpg" alt="Product" title="Product" width="625" height="808" />
                                <!-- End Image -->
                                <!-- Hover Image -->
                                <img class="hover blur-up lazyload" data-src="assets/images/products/product2-1.jpg" src="assets/images/products/product2-1.jpg" alt="Product" title="Product" width="625" height="808" />
                                <!-- End Hover Image -->
                            </a>
                            <!-- End Product Image -->
                            <!--Product Button-->
                            <div class="button-set style1">
                                <!--Cart Button-->
                                <a href="#quickshop-modal" class="btn-icon addtocart quick-shop-modal" data-bs-toggle="modal" data-bs-target="#quickshop_modal">
                                    <span class="icon-wrap d-flex-justify-center h-100 w-100" data-bs-toggle="tooltip" data-bs-placement="left" title="Select Options"><i class="icon anm anm-cart-l"></i><span class="text">Select Options</span></span>
                                </a>
                                <!--End Cart Button-->
                                <!--Quick View Button-->
                                <a href="#quickview-modal" class="btn-icon quickview quick-view-modal" data-bs-toggle="modal" data-bs-target="#quickview_modal">
                                    <span class="icon-wrap d-flex-justify-center h-100 w-100" data-bs-toggle="tooltip" data-bs-placement="left" title="Quick View"><i class="icon anm anm-search-plus-l"></i><span class="text">Quick View</span></span>
                                </a>
                                <!--End Quick View Button-->
                                <!--Wishlist Button-->
                                <a href="wishlist-style2.html" class="btn-icon wishlist" data-bs-toggle="tooltip" data-bs-placement="left" title="Add To Wishlist"><i class="icon anm anm-heart-l"></i><span class="text">Add To Wishlist</span></a>
                                <!--End Wishlist Button-->
                                <!--Compare Button-->
                                <a href="compare-style2.html" class="btn-icon compare" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Compare"><i class="icon anm anm-random-r"></i><span class="text">Add to Compare</span></a>
                                <!--End Compare Button-->
                            </div>
                            <!--End Product Button-->
                        </div>
                        <!-- End Product Image -->
                        <!-- Start Product Details -->
                        <div class="product-details text-left">
                            <!-- Product Name -->
                            <div class="product-name">
                                <a href="product-layout1.html">Cuff Beanie Cap</a>
                            </div>
                            <!-- End Product Name -->
                            <!-- Product Price -->
                            <div class="product-price">
                                <span class="price">$128.00</span>
                            </div>
                            <!-- End Product Price -->
                            <!-- Product Review -->
                            <div class="product-review">
                                <i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i>
                                <span class="caption hidden ms-1">8 Reviews</span>
                            </div>
                            <!-- End Product Review -->
                            <!-- Variant -->
                            <ul class="variants-clr swatches">
                                <li class="swatch medium radius"><img src="assets/images/products/swatches/blue-red.jpg" alt="image" width="70" height="70" data-bs-toggle="tooltip" data-bs-placement="top" title="blue" /></li>
                                <li class="swatch medium radius"><img src="assets/images/products/swatches/blue-red.jpg" alt="image" width="70" height="70" data-bs-toggle="tooltip" data-bs-placement="top" title="maroon" /></li>
                                <li class="swatch medium radius"><img src="assets/images/products/swatches/blue-red.jpg" alt="image" width="70" height="70" data-bs-toggle="tooltip" data-bs-placement="top" title="pink" /></li>
                                <li class="swatch medium radius"><img src="assets/images/products/swatches/blue-red.jpg" alt="image" width="70" height="70" data-bs-toggle="tooltip" data-bs-placement="top" title="green" /></li>
                            </ul>
                            <!-- End Variant -->
                        </div>
                        <!-- End product details -->
                    </div>
                </div>
                <div class="item col-item">
                    <div class="product-box">
                        <!-- Start Product Image -->
                        <div class="product-image">
                            <!-- Start Product Image -->
                            <a href="product-layout1.html" class="product-img">
                                <!-- Image -->
                                <img class="primary blur-up lazyload" data-src="assets/images/products/product3.jpg" src="assets/images/products/product3.jpg" alt="Product" title="Product" width="625" height="808" />
                                <!-- End Image -->
                                <!-- Hover Image -->
                                <img class="hover blur-up lazyload" data-src="assets/images/products/product3-1.jpg" src="assets/images/products/product3-1.jpg" alt="Product" title="Product" width="625" height="808" />
                                <!-- End Hover Image -->
                            </a>
                            <!-- End Product Image -->
                            <!-- Product label -->
                            <div class="product-labels"><span class="lbl pr-label3">Trending</span></div>
                            <!-- End Product label -->
                            <!--Product Button-->
                            <div class="button-set style1">
                                <!--Cart Button-->
                                <a href="#addtocart-modal" class="btn-icon addtocart add-to-cart-modal" data-bs-toggle="modal" data-bs-target="#addtocart_modal">
                                    <span class="icon-wrap d-flex-justify-center h-100 w-100" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Cart"><i class="icon anm anm-cart-l"></i><span class="text">Add to Cart</span></span>
                                </a>
                                <!--End Cart Button-->
                                <!--Quick View Button-->
                                <a href="#quickview-modal" class="btn-icon quickview quick-view-modal" data-bs-toggle="modal" data-bs-target="#quickview_modal">
                                    <span class="icon-wrap d-flex-justify-center h-100 w-100" data-bs-toggle="tooltip" data-bs-placement="left" title="Quick View"><i class="icon anm anm-search-plus-l"></i><span class="text">Quick View</span></span>
                                </a>
                                <!--End Quick View Button-->
                                <!--Wishlist Button-->
                                <a href="wishlist-style2.html" class="btn-icon wishlist" data-bs-toggle="tooltip" data-bs-placement="left" title="Add To Wishlist"><i class="icon anm anm-heart-l"></i><span class="text">Add To Wishlist</span></a>
                                <!--End Wishlist Button-->
                                <!--Compare Button-->
                                <a href="compare-style2.html" class="btn-icon compare" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Compare"><i class="icon anm anm-random-r"></i><span class="text">Add to Compare</span></a>
                                <!--End Compare Button-->
                            </div>
                            <!--End Product Button-->
                        </div>
                        <!-- End Product Image -->
                        <!-- Start Product Details -->
                        <div class="product-details text-left">
                            <!-- Product Name -->
                            <div class="product-name">
                                <a href="product-layout1.html">Flannel Collar Shirt</a>
                            </div>
                            <!-- End Product Name -->
                            <!-- Product Price -->
                            <div class="product-price">
                                <span class="price">$199.00</span>
                            </div>
                            <!-- End Product Price -->
                            <!-- Product Review -->
                            <div class="product-review">
                                <i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i>
                                <span class="caption hidden ms-1">10 Reviews</span>
                            </div>
                            <!-- End Product Review -->
                            <!-- Variant -->
                            <ul class="variants-clr swatches">
                                <li class="swatch medium radius red"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="red"></span></li>
                                <li class="swatch medium radius orange"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="orange"></span></li>
                                <li class="swatch medium radius yellow"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="yellow"></span></li>
                            </ul>
                            <!-- End Variant -->
                        </div>
                        <!-- End product details -->
                    </div>
                </div>
                <div class="item col-item">
                    <div class="product-box">
                        <!-- Start Product Image -->
                        <div class="product-image">
                            <!-- Start Product Image -->
                            <a href="product-layout1.html" class="product-img">
                                <!-- Image -->
                                <img class="primary blur-up lazyload" data-src="assets/images/products/product4.jpg" src="assets/images/products/product4.jpg" alt="Product" title="Product" width="625" height="808" />
                                <!-- End Image -->
                                <!-- Hover Image -->
                                <img class="hover blur-up lazyload" data-src="assets/images/products/product4-1.jpg" src="assets/images/products/product4-1.jpg" alt="Product" title="Product" width="625" height="808" />
                                <!-- End Hover Image -->
                            </a>
                            <!-- End Product Image -->
                            <!-- Product label -->
                            <div class="product-labels"><span class="lbl on-sale">50% Off</span></div>
                            <!-- End Product label -->
                            <!--Product Button-->
                            <div class="button-set style1">
                                <!--Cart Button-->
                                <a href="#addtocart-modal" class="btn-icon addtocart add-to-cart-modal" data-bs-toggle="modal" data-bs-target="#addtocart_modal">
                                    <span class="icon-wrap d-flex-justify-center h-100 w-100" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Cart"><i class="icon anm anm-cart-l"></i><span class="text">Add to Cart</span></span>
                                </a>
                                <!--End Cart Button-->
                                <!--Quick View Button-->
                                <a href="#quickview-modal" class="btn-icon quickview quick-view-modal" data-bs-toggle="modal" data-bs-target="#quickview_modal">
                                    <span class="icon-wrap d-flex-justify-center h-100 w-100" data-bs-toggle="tooltip" data-bs-placement="left" title="Quick View"><i class="icon anm anm-search-plus-l"></i><span class="text">Quick View</span></span>
                                </a>
                                <!--End Quick View Button-->
                                <!--Wishlist Button-->
                                <a href="wishlist-style2.html" class="btn-icon wishlist" data-bs-toggle="tooltip" data-bs-placement="left" title="Add To Wishlist"><i class="icon anm anm-heart-l"></i><span class="text">Add To Wishlist</span></a>
                                <!--End Wishlist Button-->
                                <!--Compare Button-->
                                <a href="compare-style2.html" class="btn-icon compare" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Compare"><i class="icon anm anm-random-r"></i><span class="text">Add to Compare</span></a>
                                <!--End Compare Button-->
                            </div>
                            <!--End Product Button-->
                        </div>
                        <!-- End Product Image -->
                        <!-- Start Product Details -->
                        <div class="product-details text-left">
                            <!-- Product Name -->
                            <div class="product-name">
                                <a href="product-layout1.html">Cotton Hooded Hoodie</a>
                            </div>
                            <!-- End Product Name -->
                            <!-- Product Price -->
                            <div class="product-price">
                                <span class="price old-price">$198.00</span><span class="price">$99.00</span>
                            </div>
                            <!-- End Product Price -->
                            <!-- Product Review -->
                            <div class="product-review">
                                <i class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i>
                                <span class="caption hidden ms-1">0 Reviews</span>
                            </div>
                            <!-- End Product Review -->
                            <!-- Variant -->
                            <ul class="variants-clr swatches">
                                <li class="swatch medium radius black"><img src="assets/images/products/swatches/blue-red.jpg" alt="image" width="70" height="70" data-bs-toggle="tooltip" data-bs-placement="top" title="black" /></li>
                                <li class="swatch medium radius navy"><img src="assets/images/products/swatches/blue-red.jpg" alt="image" width="70" height="70" data-bs-toggle="tooltip" data-bs-placement="top" title="navy" /></li>
                                <li class="swatch medium radius darkgreen"><img src="assets/images/products/swatches/blue-red.jpg" alt="image" width="70" height="70" data-bs-toggle="tooltip" data-bs-placement="top" title="darkgreen" /></li>
                            </ul>
                            <!-- End Variant -->
                        </div>
                        <!-- End product details -->
                    </div>
                </div>
                <div class="item col-item">
                    <div class="product-box">
                        <!-- Start Product Image -->
                        <div class="product-image">
                            <!-- Start Product Image -->
                            <a href="product-layout1.html" class="product-img">
                                <!-- Image -->
                                <img class="primary blur-up lazyload" data-src="assets/images/products/product5.jpg" src="assets/images/products/product5.jpg" alt="Product" title="Product" width="625" height="808" />
                                <!-- End Image -->
                                <!-- Hover Image -->
                                <img class="hover blur-up lazyload" data-src="assets/images/products/product5-1.jpg" src="assets/images/products/product5-1.jpg" alt="Product" title="Product" width="625" height="808" />
                                <!-- End Hover Image -->
                            </a>
                            <!-- End Product Image -->
                            <!--Product Button-->
                            <div class="button-set style1">
                                <!--Cart Button-->
                                <a href="#addtocart-modal" class="btn-icon addtocart add-to-cart-modal" data-bs-toggle="modal" data-bs-target="#addtocart_modal">
                                    <span class="icon-wrap d-flex-justify-center h-100 w-100" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Cart"><i class="icon anm anm-cart-l"></i><span class="text">Add to Cart</span></span>
                                </a>
                                <!--End Cart Button-->
                                <!--Quick View Button-->
                                <a href="#quickview-modal" class="btn-icon quickview quick-view-modal" data-bs-toggle="modal" data-bs-target="#quickview_modal">
                                    <span class="icon-wrap d-flex-justify-center h-100 w-100" data-bs-toggle="tooltip" data-bs-placement="left" title="Quick View"><i class="icon anm anm-search-plus-l"></i><span class="text">Quick View</span></span>
                                </a>
                                <!--End Quick View Button-->
                                <!--Wishlist Button-->
                                <a href="wishlist-style2.html" class="btn-icon wishlist" data-bs-toggle="tooltip" data-bs-placement="left" title="Add To Wishlist"><i class="icon anm anm-heart-l"></i><span class="text">Add To Wishlist</span></a>
                                <!--End Wishlist Button-->
                                <!--Compare Button-->
                                <a href="compare-style2.html" class="btn-icon compare" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Compare"><i class="icon anm anm-random-r"></i><span class="text">Add to Compare</span></a>
                                <!--End Compare Button-->
                            </div>
                            <!--End Product Button-->
                        </div>
                        <!-- End Product Image -->
                        <!-- Start Product Details -->
                        <div class="product-details text-left">
                            <!-- Product Name -->
                            <div class="product-name">
                                <a href="product-layout1.html">Hooded Neck Hoodies</a>
                            </div>
                            <!-- End Product Name -->
                            <!-- Product Price -->
                            <div class="product-price">
                                <span class="price">$39.00</span>
                            </div>
                            <!-- End Product Price -->
                            <!-- Product Review -->
                            <div class="product-review">
                                <i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i>
                                <span class="caption hidden ms-1">3 Reviews</span>
                            </div>
                            <!-- End Product Review -->
                            <!-- Variant -->
                            <ul class="variants-clr swatches">
                                <li class="swatch medium radius black"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="black"></span></li>
                                <li class="swatch medium radius maroon"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="maroon"></span></li>
                            </ul>
                            <!-- End Variant -->
                        </div>
                        <!-- End product details -->
                    </div>
                </div>
            </div>
            <!--End Product Grid-->
        </div>
    </section>
    <!--End Related Products-->         
</div>
    
@endsection