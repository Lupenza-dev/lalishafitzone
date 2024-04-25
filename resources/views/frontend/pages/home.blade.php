@extends('frontend.layouts.main')
@section('content')
<style>
    .price-container{
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        align-items: center
    }
    .price{
        color: #E96F83;
        font-weight: 900;

    }
</style>
 <!--Home Slideshow-->
 <section class="slideshow slideshow-wrapper">
    <div class="home-slideshow slick-arrow-dots">
        @foreach ($sliders as $slide)
        <div class="slide">
            <div class="slideshow-wrap">
                <picture>
                    <source media="(max-width:767px)" srcset="{{ asset('storage/uploads/'.'/'.$slide->image)}}" width="1150" height="800">
                    <img media="(max-width:767px)" class="blur-up lazyload" src="{{ asset('storage/uploads/'.'/'.$slide->image)}}" alt="slideshow" title="" width="1920" height="795" />
                </picture> 
                <div class="container">
                    <div class="slideshow-content slideshow-overlay middle-left">
                        <div class="slideshow-content-in">
                            <div class="wrap-caption animation style1">
                                <p class="ss-small-title">{{ $slide->sub_title }}</p>
                                <h2 class="ss-mega-title">{{ $slide->title}}</h2>
                                <p class="ss-sub-title xs-hide">{{ $slide->caption}}</p>
                                <div class="ss-btnWrap">
                                    <a class="btn btn-primary" href="#programs">Get Started</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
        @endforeach
    </div>
</section>
<!--End Home Slideshow-->

<!--Service Section-->
<section class="section service-section pb-0" id="programs">
    <div class="container">
        <div class="service-info row col-row row-cols-lg-4 row-cols-md-4 row-cols-sm-2 row-cols-2 text-center">
            <div class="service-wrap col-item">
                <div class="service-icon mb-3">
                    <i class="icon anm anm-fire"></i>
                </div>
                <div class="service-content">
                    <h3 class="title mb-2">Quality Assurance</h3>
                    <span class="text-muted">Top niche Training Programs</span>
                </div>
            </div>
            <div class="service-wrap col-item">
                <div class="service-icon mb-3">
                    <i class="icon anm anm-phone-call-l"></i>
                </div>
                <div class="service-content">
                    <h3 class="title mb-2">Call us any time</h3>
                    <span class="text-muted">Contact us 24/7 hours a day</span>
                </div>
            </div>
            
            <div class="service-wrap col-item">
                <div class="service-icon mb-3">
                    <i class="icon anm anm-credit-card-l"></i>
                </div>
                <div class="service-content">
                    <h3 class="title mb-2">Secured Payment</h3>
                    <span class="text-muted">We accept all major credit cards</span>
                </div>
            </div>
            <div class="service-wrap col-item">
                <div class="service-icon mb-3">
                    <i class="icon anm anm-redo-l"></i>
                </div>
                <div class="service-content">
                    <h3 class="title mb-2">Free Returns</h3>
                    <span class="text-muted">30-days free return policy</span>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Service Section-->

<!--Collection banner-->
{{-- <section class="section collection-banners pb-0">
    <div class="container">                      
        <div class="collection-banner-grid">
            <div class="row sp-row">
                <div class="col-12 col-sm-6 col-md-6 col-lg-6 collection-banner-item">
                    <div class="collection-item sp-col">
                        <a href="shop-left-sidebar.html" class="zoom-scal">
                            <div class="img">
                                <img class="blur-up lazyload" data-src="assets/frontend/images/collection/demo1-ct-img1.jpg" src="assets/frontend/images/collection/demo1-ct-img1.jpg" alt="Women Wear" title="Women Wear" width="645" height="723" />
                            </div>
                            <div class="details middle-right">
                                <div class="inner">
                                    <p class="mb-2">Trending Now</p>
                                    <h3 class="title">Women Wear</h3>
                                    <span class="btn btn-outline-secondary btn-md">Shop Now</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-6 collection-banner-item">
                    <div class="collection-item sp-col">
                        <a href="shop-left-sidebar.html" class="zoom-scal">
                            <div class="img">
                                <img class="blur-up lazyload" data-src="assets/frontend/images/collection/demo1-ct-img2.jpg" src="assets/frontend/images/collection/demo1-ct-img2.jpg" alt="Mens Wear" title="Mens Wear" width="645" height="344" />
                            </div>
                            <div class="details middle-left">
                                <div class="inner">
                                    <h3 class="title mb-2">Mens Wear</h3>
                                    <p class="mb-3">Tailor-made with passion</p>
                                    <span class="btn btn-outline-secondary btn-md">Shop Now</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="collection-item sp-col">
                        <a href="shop-left-sidebar.html" class="zoom-scal">
                            <div class="img">
                                <img class="blur-up lazyload" data-src="assets/frontend/images/collection/demo1-ct-img3.jpg" src="assets/frontend/images/collection/demo1-ct-img3.jpg" alt="Kids Wear" title="Kids Wear" width="645" height="349" />
                            </div>
                            <div class="details middle-right">
                                <div class="inner">
                                    <p class="mb-2">Buy one get one free</p>
                                    <h3 class="title">Kids Wear</h3>
                                    <span class="btn btn-outline-secondary btn-md">Shop Now</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<!--End Collection banner-->

<!--Popular Categories-->
{{-- <section class="section collection-slider pb-0">
    <div class="container">
        <div class="section-header">
            <p class="mb-2 mt-0">Shop by category</p>
            <h2>Popular Collections</h2>
        </div>

        <div class="collection-slider-5items gp15 arwOut5 hov-arrow">
            <div class="category-item zoomscal-hov">
                <a href="shop-left-sidebar.html" class="category-link clr-none">
                    <div class="zoom-scal zoom-scal-nopb rounded-3"><img class="blur-up lazyload" data-src="assets/frontend/images/collection/sub-collection1.jpg" src="assets/frontend/images/collection/sub-collection1.jpg" alt="Men's Jakets" title="Men's Jakets" width="365" height="365" /></div>
                    <div class="details mt-3 text-center">
                        <h4 class="category-title mb-0">Men's Jakets</h4>
                        <p class="counts">20 Products</p>
                    </div>
                </a>
            </div>
            <div class="category-item zoomscal-hov">
                <a href="shop-left-sidebar.html" class="category-link clr-none">
                    <div class="zoom-scal zoom-scal-nopb rounded-3"><img class="blur-up lazyload" data-src="assets/frontend/images/collection/sub-collection3.jpg" src="assets/frontend/images/collection/sub-collection3.jpg" alt="Tops" title="Tops" width="365" height="365" /></div>
                    <div class="details mt-3 text-center">
                        <h4 class="category-title mb-0">Tops</h4>
                        <p class="counts">13 Products</p>
                    </div>
                </a>
            </div>
            <div class="category-item zoomscal-hov">
                <a href="shop-left-sidebar.html" class="category-link clr-none">
                    <div class="zoom-scal zoom-scal-nopb rounded-3"><img class="blur-up lazyload" data-src="assets/frontend/images/collection/sub-collection5.jpg" src="assets/frontend/images/collection/sub-collection5.jpg" alt="T-Shirts" title="T-Shirts" width="365" height="365" /></div>
                    <div class="details mt-3 text-center">
                        <h4 class="category-title mb-0">T-Shirts</h4>
                        <p class="counts">18 Products</p>
                    </div>
                </a>
            </div>
            <div class="category-item zoomscal-hov">
                <a href="shop-left-sidebar.html" class="category-link clr-none">
                    <div class="zoom-scal zoom-scal-nopb rounded-3"><img class="blur-up lazyload" data-src="assets/frontend/images/collection/sub-collection6.jpg" src="assets/frontend/images/collection/sub-collection6.jpg" alt="Shoes" title="Shoes" width="365" height="365" /></div>
                    <div class="details mt-3 text-center">
                        <h4 class="category-title mb-0">Shoes</h4>
                        <p class="counts">11 Products</p>
                    </div>
                </a>
            </div>
            <div class="category-item zoomscal-hov">
                <a href="shop-left-sidebar.html" class="category-link clr-none">
                    <div class="zoom-scal zoom-scal-nopb rounded-3"><img class="blur-up lazyload" data-src="assets/frontend/images/collection/sub-collection9.jpg" src="assets/frontend/images/collection/sub-collection9.jpg" alt="Shorts" title="Shorts" width="365" height="365"/></div>
                    <div class="details mt-3 text-center">
                        <h4 class="category-title mb-0">Shorts</h4>
                        <p class="counts">28 Products</p>
                    </div>
                </a>
            </div>
            <div class="category-item zoomscal-hov">
                <a href="shop-left-sidebar.html" class="category-link clr-none">
                    <div class="zoom-scal zoom-scal-nopb rounded-3"><img class="blur-up lazyload" data-src="assets/frontend/images/collection/sub-collection2.jpg" src="assets/frontend/images/collection/sub-collection2.jpg" alt="Sunglasses" title="Sunglasses" width="365" height="365" /></div>
                    <div class="details mt-3 text-center">
                        <h4 class="category-title mb-0">Sunglasses</h4>
                        <p class="counts">24 Products</p>
                    </div>
                </a>
            </div>
            <div class="category-item zoomscal-hov">
                <a href="shop-left-sidebar.html" class="category-link clr-none">
                    <div class="zoom-scal zoom-scal-nopb rounded-3"><img class="blur-up lazyload" data-src="assets/frontend/images/collection/sub-collection4.jpg" src="assets/frontend/images/collection/sub-collection4.jpg" alt="Girls Top" title="Girls Top" width="365" height="365" /></div>
                    <div class="details mt-3 text-center">
                        <h4 class="category-title mb-0">Girls Top</h4>
                        <p class="counts">26 Products</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section> --}}
<!--End Popular Categories-->
<!--Products With Tabs-->
<section class="section product-slider tab-slider-product">
    <div class="container">
        {{-- <div class="section-header d-none">
            <h2>Special Offers</h2>
            <p>Browse the huge variety of our best seller</p>
        </div> --}}
        <div class="section-header">
            <p class="mb-2 mt-0">Join Us</p>
            {{-- <h2>Popular Collections</h2> --}}
        </div>
        <div class="tabs-listing">
            <ul class="nav nav-tabs style1 justify-content-center" id="productTabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link head-font" id="newarrivals-tab" data-bs-toggle="tab" data-bs-target="#newarrivals" type="button" role="tab" aria-controls="newarrivals" aria-selected="false">Training Program</button>
                </li>
            </ul>

            <div class="tab-content" id="productTabsContent">
                <div class="tab-pane show active" id="newarrivals" role="tabpanel" aria-labelledby="newarrivals-tab">
                    <!--Product Grid-->
                    <div class="grid-products grid-view-items">
                        <div class="row col-row product-options row-cols-xl-4 row-cols-lg-4 row-cols-md-3 row-cols-sm-3 row-cols-2"> 
                            @forelse ($programs as $program)
                            {{-- @dd($program->cover) --}}
                            <div class="item col-item" >
                                <div class="product-box">
                                    <!-- Start Product Image -->
                                    <div class="product-image" style="width: 100%; height: 350px">
                                        <!-- Start Product Image -->
                                        <a href="{{ route('program.view',$program->uuid)}}" class="product-img rounded-3">
                                            <!-- Image -->
                                            <img style="width: 100% ; height: 100%; object-fit:cover"  class="primary blur-up lazyload" data-src="{{ asset('storage/uploads'.'/'.$program->cover['cover1'])}}" src="{{ asset('storage/uploads'.'/'.$program->cover['cover1'])}}" alt="Product" title="Product"  />
                                            <!-- End Image -->
                                            <!-- Hover Image -->
                                            <img style="width: 100% ; height: 100%; object-fit:cover" class="hover blur-up lazyload" data-src="{{ asset('storage/uploads'.'/'.$program->cover['cover2'])}}" src="{{ asset('storage/uploads'.'/'.$program->cover['cover2'])}}" alt="Product" title="Product"  />
                                            <!-- End Hover Image -->
                                        </a>
                                        <!-- End Product Image -->
                                        <!--Product Button-->
                                        <div class="button-set style1">
                                            <!--Cart Button-->
                                            <a href="{{ route('add.cart',$program->id)}}" class="btn-icon addtocart add-to-cart-modal"  >
                                                <span class="icon-wrap d-flex-justify-center h-100 w-100" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Cart"><i class="icon anm anm-cart-l"></i><span class="text">Add to Cart</span></span>
                                            </a>
                                            <!--End Cart Button-->
                                            <!--Quick View Button-->
                                            <a href="{{ route('program.view',$program->uuid)}}" class="btn-icon quickview quick-view-modal">
                                                <span class="icon-wrap d-flex-justify-center h-100 w-100" data-bs-toggle="tooltip" data-bs-placement="left" title="Quick View"><i class="icon anm anm-search-plus-l"></i><span class="text">Quick View</span></span>
                                            </a>
                                            <!--End Quick View Button-->
                                            <!--Wishlist Button-->
                                            {{-- <a href="wishlist-style2.html" class="btn-icon wishlist" data-bs-toggle="tooltip" data-bs-placement="left" title="Add To Wishlist"><i class="icon anm anm-heart-l"></i><span class="text">Add To Wishlist</span></a> --}}
                                            <!--End Wishlist Button-->
                                            <!--Compare Button-->
                                            {{-- <a href="compare-style2.html" class="btn-icon compare" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Compare"><i class="icon anm anm-random-r"></i><span class="text">Add to Compare</span></a> --}}
                                            <!--End Compare Button-->
                                        </div>
                                        <!--End Product Button-->
                                    </div>
                                    <!-- End Product Image -->
                                    <!-- Start Product Details -->
                                    <div class="product-details">
                                        <div class="price-container">
                                             <!-- Product Name -->
                                        <div class="product-name">
                                            <div class="product-review">
                                                <span class="caption ms-1">{{ $program->category?->name}}</span>
                                            </div>
                                            <a href="{{ route('program.view',$program->uuid)}}">{{ $program->name }}</a>
                                        </div>
                                        <!-- End Product Name -->

                                        <!-- Product Price -->
                                        <div class="product-price">
                                            <span class="price">{{ number_format($program->price) }} TZS</span>
                                        </div>
                                        <!-- End Product Price -->
                                        </div>
                                        <div>
                                            <a href="{{ route('add.cart',$program->id)}}">
                                            <button class="btn btn-primary w-100 btn-round mt-1 btn-sm"> <i class="icon anm anm-cart-l " style="margin-right: 5px"></i> Add To Cart</button>
                                            </a>
                                        </div>
                                       
                                        <!-- Product Review -->
                                        {{-- <div class="product-review">
                                            <span class="caption ms-1">{{ $program->category?->name}}</span>
                                        </div> --}}
                                        <!-- End Product Review -->
                                        <!-- Variant -->
                                        {{-- <ul class="variants-clr swatches">
                                            <li class="swatch medium radius black"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="black"></span></li>
                                            <li class="swatch medium radius navy"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="navy"></span></li>
                                            <li class="swatch medium radius darkgreen"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="darkgreen"></span></li>
                                        </ul> --}}
                                        <!-- End Variant -->
                                    </div>
                                    <!-- End product details -->
                                </div>
                            </div>
                            @empty
                                
                            @endforelse                                                                             
                            
                        </div>

                        <div class="view-collection text-center mt-4 mt-md-5">
                            <a href="{{ route('all.programs')}}" class="btn btn-secondary btn-lg">View All</a>
                        </div>
                    </div>
                    <!--End Product Grid-->
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Products With Tabs-->

<!--Parallax Banner-->
{{-- <div class="section parallax-banner-style1 py-0">
    <div class="hero hero-large hero-overlay bg-size">
        <img class="bg-img" src="assets/frontend/images/parallax/demo1-sale-banner.jpg" alt="Clearance Sale - Flat 50% Off" width="1920" height="645" />
        <div class="hero-inner d-flex-justify-center">
            <div class="container">
                <div class="wrap-text center text-white">
                    <h1 class="hero-title text-white">Clearance Sale - Flat 50% Off</h1>
                    <p class="hero-subtitle h3 text-white">Sale will end soon in</p>
                    <!--Countdown Timer-->
                    <div class="hero-saleTime d-flex-center text-center justify-content-center" data-countdown="2028/10/01"></div>
                    <!--End Countdown Timer-->
                    <p class="hero-details">Hema Multipurpose Template that will give you and your customers a smooth shopping experience which can be used for various kinds of stores such as fashion.</p>
                    <a href="shop-left-sidebar.html" class="hero-btn btn btn-light">Shop now</a>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<!--End Parallax Banner-->

<!--Testimonial Section-->
<section class="section testimonial-slider style1">
    <div class="container">
        <div class="section-header">
            <p class="mb-2 mt-0">Happy Customer</p>
            <h2>Loved By Our Customers</h2>
        </div>

        <div class="testimonial-wraper">
            <!--Testimonial Slider Items-->
            <div class="testimonial-slider-3items gp15 slick-arrow-dots arwOut5">
                @foreach ($testmonials as $testmonial)
                <div class="testimonial-slide">
                    <div class="testimonial-content text-center">                                                     
                        <div class="quote-icon mb-3 mb-lg-4"><img class="blur-up lazyload mx-auto" data-src="assets/frontend/images/icons/demo1-quote-icon.png" src="assets/frontend/images/icons/demo1-quote-icon.png" alt="icon" width="40" height="40" /></div>
                        <div class="content">  
                            <div class="text mb-2"><p>{{ $testmonial->description}}</p></div>
                            <div class="product-review my-3">
                                <i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star-o"></i>
                                <span class="caption hidden ms-1">15 Reviews</span>
                            </div>
                        </div>
                        <div class="auhimg d-flex-justify-center text-left">
                            <div class="image"><img class="rounded-circle blur-up lazyload" data-src="{{ asset('storage/uploads'.'/'.$testmonial->image)}}" src="{{ asset('storage/uploads'.'/'.$testmonial->image)}}" alt="Jessica Doe" width="65" height="65" /></div>
                            <div class="auhtext ms-3">
                                <h5 class="authour mb-1">{{ $testmonial->name}}</h5>
                                <p class="text-muted">{{ $testmonial->designation}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <!--Testimonial Slider Items-->
        </div>
    </div>
</section>
<!--End Testimonial section-->

<!--Blog Post-->
<section class="section home-blog-post">
    <div class="container">
        <div class="section-header">
            <p class="mb-2 mt-0">Latest post</p>
            <h2>Most Recent News</h2>
        </div>

        <div class="blog-slider-3items gp15 arwOut5 hov-arrow">
            @forelse ($news as $new)
            <div class="blog-item">
                <div class="blog-article zoomscal-hov">
                    <div class="blog-img">
                        <a class="featured-image zoom-scal" href="{{ route('blog.view',$new->uuid)}}"><img class="blur-up lazyload" data-src="{{ asset('storage/uploads'.'/'.$new->image)}}" src="{{ asset('storage/uploads'.'/'.$new->image)}}" alt="New shop collection our shop" width="740" height="410" /></a>
                        <div class="date"><span class="dt">{{ date('d',strtotime($new->created_at))}}</span> <span class="mt">{{ date('M',strtotime($new->created_at))}}<br> <b>{{ date('Y',strtotime($new->created_at))}}</b></span></div>
                    </div>
                    <div class="blog-content">
                        <h2 class="h3 mb-3"><a href="{{ route('blog.view',$new->uuid)}}">{{ $new->title}}</a></h2>
                        <p class="content">{{ $new->caption_formatted}}</p>
                        <a href="{{ route('blog.view',$new->uuid)}}" class="btn btn-secondary btn-sm">Read more</a>
                    </div>
                </div>
            </div>  
            @empty
                
            @endforelse
        </div>
    </div>
</section>
<!--End Blog Post-->
    
@endsection