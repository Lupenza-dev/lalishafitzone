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
  <!-- Body Container -->
  <div id="page-content">
    <!--Page Header-->
    <div class="page-header text-center">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 d-flex justify-content-between align-items-center">
                    <div class="page-title"><h1>All Programs</h1></div>
                    <!--Breadcrumbs-->
                    <div class="breadcrumbs"><a href="{{ route('home')}}" title="Back to the home page">Home</a><span class="title"><i class="icon anm anm-angle-right-l"></i>Program</span><span class="main-title"><i class="icon anm anm-angle-right-l"></i>All Programs</span></div>
                    <!--End Breadcrumbs-->
                </div>
            </div>
        </div>
    </div>
    <!--End Page Header-->

    <!--Main Content-->
    <div class="container">
        <!--Category Slider-->
        {{-- <div class="collection-slider-6items gp10 slick-arrow-dots sub-collection section pt-0">
            <div class="category-item zoomscal-hov">
                <a href="shop-left-sidebar.html" class="category-link clr-none">
                    <div class="zoom-scal zoom-scal-nopb rounded-0"><img class="rounded-0 blur-up lazyload" data-src="assets/images/collection/sub-collection1.jpg" src="assets/images/collection/sub-collection1.jpg" alt="Men's" title="Men's" width="365" height="365" /></div>
                    <div class="details text-center">
                        <h4 class="category-title mb-0">Men's</h4>
                        <p class="counts">20 Items</p>
                    </div>
                </a>
            </div>
            <div class="category-item zoomscal-hov">
                <a href="shop-left-sidebar.html" class="category-link clr-none">
                    <div class="zoom-scal zoom-scal-nopb rounded-0"><img class="rounded-0 blur-up lazyload" data-src="assets/images/collection/sub-collection2.jpg" src="assets/images/collection/sub-collection2.jpg" alt="Women's" title="Women's" width="365" height="365" /></div>
                    <div class="details text-center">
                        <h4 class="category-title mb-0">Women's</h4>
                        <p class="counts">24 Items</p>
                    </div>
                </a>
            </div>
            <div class="category-item zoomscal-hov">
                <a href="shop-left-sidebar.html" class="category-link clr-none">
                    <div class="zoom-scal zoom-scal-nopb rounded-0"><img class="rounded-0 blur-up lazyload" data-src="assets/images/collection/sub-collection3.jpg" src="assets/images/collection/sub-collection3.jpg" alt="Top" title="Top" width="365" height="365" /></div>
                    <div class="details text-center">
                        <h4 class="category-title mb-0">Top</h4>
                        <p class="counts">13 Items</p>
                    </div>
                </a>
            </div>
            <div class="category-item zoomscal-hov">
                <a href="shop-left-sidebar.html" class="category-link clr-none">
                    <div class="zoom-scal zoom-scal-nopb rounded-0"><img class="rounded-0 blur-up lazyload" data-src="assets/images/collection/sub-collection4.jpg" src="assets/images/collection/sub-collection4.jpg" alt="Bottom" title="Bottom" width="365" height="365" /></div>
                    <div class="details text-center">
                        <h4 class="category-title mb-0">Bottom</h4>
                        <p class="counts">26 Items</p>
                    </div>
                </a>
            </div>
            <div class="category-item zoomscal-hov">
                <a href="shop-left-sidebar.html" class="category-link clr-none">
                    <div class="zoom-scal zoom-scal-nopb rounded-0"><img class="rounded-0 blur-up lazyload" data-src="assets/images/collection/sub-collection5.jpg" src="assets/images/collection/sub-collection5.jpg" alt="T-Shirts" title="T-Shirts" width="365" height="365" /></div>
                    <div class="details text-center">
                        <h4 class="category-title mb-0">T-Shirts</h4>
                        <p class="counts">18 Items</p>
                    </div>
                </a>
            </div>
            <div class="category-item zoomscal-hov">
                <a href="shop-left-sidebar.html" class="category-link clr-none">
                    <div class="zoom-scal zoom-scal-nopb rounded-0"><img class="rounded-0 blur-up lazyload" data-src="assets/images/collection/sub-collection6.jpg" src="assets/images/collection/sub-collection6.jpg" alt="Shirts" title="Shirts" width="365" height="365" /></div>
                    <div class="details text-center">
                        <h4 class="category-title mb-0">Shirts</h4>
                        <p class="counts">11 Items</p>
                    </div>
                </a>
            </div>
            <div class="category-item zoomscal-hov">
                <a href="shop-left-sidebar.html" class="category-link clr-none">
                    <div class="zoom-scal zoom-scal-nopb rounded-0"><img class="rounded-0 blur-up lazyload" data-src="assets/images/collection/sub-collection24.jpg" src="assets/images/collection/sub-collection24.jpg" alt="Jeans" title="Jeans" width="365" height="365" /></div>
                    <div class="details text-center">
                        <h4 class="category-title mb-0">Jeans</h4>
                        <p class="counts">28 Items</p>
                    </div>
                </a>
            </div>
        </div> --}}
        <!--End Category Slider-->

        <!--Toolbar-->
        <div class="toolbar toolbar-wrapper shop-toolbar">
            <div class="row align-items-center">
                <div class="col-4 col-sm-2 col-md-4 col-lg-4 text-left filters-toolbar-item d-flex order-1 order-sm-0">
                    <button type="button" class="btn btn-filter text icon anm anm-sliders-hr d-inline-flex me-2 me-lg-3"> Filter</button>
                    <div class="filters-item d-flex align-items-center">
                        <label class="mb-0 me-2 d-none d-lg-inline-block">View as:</label>
                        <div class="grid-options view-mode d-flex">
                            <a class="icon-mode mode-list d-block" data-col="1"></a>
                            <a class="icon-mode mode-grid grid-2 d-block" data-col="2"></a>
                            <a class="icon-mode mode-grid grid-3 d-md-block" data-col="3"></a>
                            <a class="icon-mode mode-grid grid-4 d-lg-block" data-col="4"></a>
                            <a class="icon-mode mode-grid grid-5 d-xl-block active" data-col="5"></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-4 col-md-4 col-lg-4 text-center product-count order-0 order-md-1 mb-3 mb-sm-0">
                    <span class="toolbar-product-count">Showing: {{ $programs->count()}} Programs</span>
                </div>
                <div class="col-8 col-sm-6 col-md-4 col-lg-4 text-right filters-toolbar-item d-flex justify-content-end order-2 order-sm-2">
                    <div class="filters-item d-flex align-items-center">
                        <label for="ShowBy" class="mb-0 me-2 text-nowrap d-none d-sm-inline-flex">Show:</label>
                        <select name="ShowBy" id="ShowBy" class="filters-toolbar-show">
                            <option value="title-ascending" selected="selected">10</option>
                            <option>15</option>
                            <option>20</option>
                            <option>25</option>
                            <option>30</option>
                        </select>
                    </div>
                    {{-- <div class="filters-item d-flex align-items-center ms-2 ms-lg-3">
                        <label for="SortBy" class="mb-0 me-2 text-nowrap d-none">Sort by:</label>
                        <select name="SortBy" id="SortBy" class="filters-toolbar-sort">
                            <option value="featured" selected="selected">Featured</option>
                            <option value="best-selling">Best selling</option>
                            <option value="title-ascending">Alphabetically, A-Z</option>
                            <option value="title-descending">Alphabetically, Z-A</option>
                            <option value="price-ascending">Price, low to high</option>
                            <option value="price-descending">Price, high to low</option>
                            <option value="created-ascending">Date, old to new</option>
                            <option value="created-descending">Date, new to old</option>
                        </select>
                    </div> --}}
                </div>
            </div>
        </div>
        <!--End Toolbar-->

        <div class="row">
            <!--Sidebar-->
            {{-- <div class="col-12 col-sm-12 col-md-12 col-lg-3 sidebar sidebar-bg filterbar">
                <div class="closeFilter"><i class="icon anm anm-times-r"></i></div>
                <div class="sidebar-tags clearfix">
                    <!--Filter By-->
                    <div class="sidebar-widget filterBox filter-widget">
                        <div class="widget-title"><h2>Filter By</h2></div>
                        <div class="widget-content filterby filterDD">
                            <ul class="items tags-list d-flex-wrap">
                                <li class="item"><a href="#;" class="rounded-5"><span class="filter-value">Women</span><i class="icon anm anm-times-r"></i></a></li>
                                <li class="item"><a href="#;" class="rounded-5"><span class="filter-value">Blue</span><i class="icon anm anm-times-r"></i></a></li>
                                <li class="item"><a href="#;" class="rounded-5"><span class="filter-value">XL</span><i class="icon anm anm-times-r"></i></a></li>
                            </ul>
                            <a href="#;" class="btn btn-sm brd-link">Clear All</a>
                        </div>
                    </div>
                    <!--End Filter By-->
                    <!--Categories-->
                    <div class="sidebar-widget clearfix categories filterBox filter-widget">
                        <div class="widget-title"><h2>Categories</h2></div>
                        <div class="widget-content filterDD">
                            <ul class="sidebar-categories scrollspy morelist clearfix">
                                <li class="lvl1 sub-level more-item"><a href="#;" class="site-nav">Clothing</a>
                                    <ul class="sublinks">
                                        <li class="lvl2 sub-level sub-sub-level"><a href="#;" class="site-nav">Men</a>
                                            <ul class="sublinks">
                                                <li class="lvl3"><a href="#" class="site-nav">Shirt <span class="count">(25)</span></a></li>
                                                <li class="lvl3"><a href="#" class="site-nav">Jeans <span class="count">(6)</span></a></li>
                                                <li class="lvl3"><a href="#" class="site-nav">Shoes <span class="count">(9)</span></a></li>
                                            </ul>
                                        </li>
                                        <li class="lvl2"><a href="#" class="site-nav">Women <span class="count">(14)</span></a></li>
                                        <li class="lvl2"><a href="#" class="site-nav">Child <span class="count">(26)</span></a></li>
                                    </ul>
                                </li>
                                <li class="lvl1 sub-level more-item"><a href="#;" class="site-nav">Jewellery</a>
                                    <ul class="sublinks">
                                        <li class="lvl2"><a href="#" class="site-nav">Ring <span class="count">(12)</span></a></li>
                                        <li class="lvl2"><a href="#" class="site-nav">Neckalses <span class="count">(15)</span></a></li>
                                        <li class="lvl2"><a href="#" class="site-nav">Eaarings <span class="count">(18)</span></a></li>
                                    </ul>
                                </li>
                                <li class="lvl1 more-item"><a href="#" class="site-nav">Accessories <span class="count">(14)</span></a></li>
                                <li class="lvl1 more-item"><a href="#" class="site-nav">Shoes <span class="count">(18)</span></a></li>
                                <li class="lvl1 more-item"><a href="#" class="site-nav">Electronic <span class="count">(22)</span></a></li>
                                <li class="lvl1 more-item"><a href="#" class="site-nav">Cosmetics <span class="count">(27)</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <!--Categories-->
                    <!--Price Filter-->
                    <div class="sidebar-widget filterBox filter-widget">
                        <div class="widget-title"><h2>Price</h2></div>
                        <form class="widget-content price-filter filterDD" action="#" method="post">
                            <div id="slider-range" class="mt-2"></div>
                            <div class="row">
                                <div class="col-6"><input id="amount" type="text" /></div>
                                <div class="col-6 text-right"><button class="btn btn-sm">filter</button></div>
                            </div>
                        </form>
                    </div>
                    <!--End Price Filter-->
                    <!--Color Swatches-->
                    <div class="sidebar-widget filterBox filter-widget">
                        <div class="widget-title"><h2>Color</h2></div>
                        <div class="widget-content filter-color filterDD">
                            <ul class="swacth-list swatches d-flex-center clearfix pt-0">
                                <li class="swatch large radius available active"><img src="assets/images/products/swatches/blue-red.jpg" alt="image" width="70" height="70" data-bs-toggle="tooltip" data-bs-placement="top" title="Blue" /></li>
                                <li class="swatch large radius available"><img src="assets/images/products/swatches/blue-red.jpg" alt="image" width="70" height="70" data-bs-toggle="tooltip" data-bs-placement="top" title="Black" /></li>
                                <li class="swatch large radius available"><img src="assets/images/products/swatches/blue-red.jpg" alt="image" width="70" height="70" data-bs-toggle="tooltip" data-bs-placement="top" title="Pink" /></li>
                                <li class="swatch large radius available"><img src="assets/images/products/swatches/blue-red.jpg" alt="image" width="70" height="70" data-bs-toggle="tooltip" data-bs-placement="top" title="Red" /></li>
                                <li class="swatch large radius available black"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="Black"></span></li>
                                <li class="swatch large radius available red"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="Red"></span></li>
                                <li class="swatch large radius available blue"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="Blue"></span></li>
                                <li class="swatch large radius available pink"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="Pink"></span></li>
                                <li class="swatch large radius available gray"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="Gray"></span></li>
                                <li class="swatch large radius available green"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="Green"></span></li>
                                <li class="swatch large radius available orange"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="Orange"></span></li>
                                <li class="swatch large radius soldout yellow"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="Yellow"></span></li>
                            </ul>
                        </div>
                    </div>
                    <!--End Color Swatches-->
                    <!--Size Swatches-->
                    <div class="sidebar-widget filterBox filter-widget">
                        <div class="widget-title"><h2>Size</h2></div>
                        <div class="widget-content filter-size filterDD">
                            <ul class="swacth-list size-swatches d-flex-center clearfix">
                                <li class="swatch large radius soldout"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="XS">XS</span></li>
                                <li class="swatch large radius available"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="S">S</span></li>
                                <li class="swatch large radius available"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="M">M</span></li>
                                <li class="swatch large radius available"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="L">L</span></li>
                                <li class="swatch large radius available"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="X">X</span></li>
                                <li class="swatch large radius available active"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="XL">XL</span></li>
                                <li class="swatch large radius available"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="XLL">XLL</span></li>
                                <li class="swatch large radius available"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="XXL">XXL</span></li>
                                <li class="swatch large radius available"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="25">25</span></li>
                                <li class="swatch large radius available"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="35">35</span></li>
                                <li class="swatch large radius available"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="40">40</span></li>
                            </ul>
                        </div>
                    </div>
                    <!--End Size Swatches-->
                    <!--Product type-->
                    <div class="sidebar-widget filterBox filter-widget product-type">
                        <div class="widget-title"><h2>Product type</h2></div>
                        <div class="widget-content filterDD">
                            <ul class="clearfix">
                                <li><input type="checkbox" value="fashion" id="fashion"><label for="fashion"><span></span>Fashion</label></li>
                                <li><input type="checkbox" value="electronic" id="electronic"><label for="electronic"><span></span>Electronic</label></li>
                                <li><input type="checkbox" value="shoes" id="shoes"><label for="shoes"><span></span>Shoes</label></li>
                            </ul>
                        </div>
                    </div>
                    <!--End Product type-->
                    <!--Brand-->
                    <div class="sidebar-widget filterBox filter-widget brand-filter">
                        <div class="widget-title"><h2>Brands</h2></div>
                        <div class="widget-content filterDD">
                            <ul class="clearfix">
                                <li><input type="checkbox" value="avone" id="avone"><label for="avone"><span></span>Avone</label></li>
                                <li><input type="checkbox" value="diva" id="diva"><label for="diva"><span></span>Diva</label></li>
                                <li><input type="checkbox" value="optimal" id="optimal"><label for="optimal"><span></span>Optimal</label></li>
                            </ul>
                        </div>
                    </div>
                    <!--End Brand-->
                    <!--Availability-->
                    <div class="sidebar-widget filterBox filter-widget availability">
                        <div class="widget-title"><h2>Availability</h2></div>
                        <div class="widget-content filterDD">
                            <ul class="clearfix">
                                <li><input type="checkbox" value="instock" id="instock"><label for="instock"><span></span>In stock</label></li>
                                <li><input type="checkbox" value="outofstock" id="outofstock"><label for="outofstock"><span></span>Out of stock</label></li>
                            </ul>
                        </div>
                    </div>
                    <!--End Availability-->
                    <!--Product Tags-->
                    <div class="sidebar-widget filterBox filter-widget product-tag">
                        <div class="widget-title"><h2>Product Tags</h2></div>
                        <div class="widget-content filterDD">
                            <ul class="tags-list product-tags d-flex-wrap clearfix">
                                <li class="item active"><a class="rounded-5" href="#">Women</a></li>
                                <li class="item"><a class="rounded-5" href="#">Shoes</a></li>
                                <li class="item"><a class="rounded-5" href="#">Beauty</a></li>
                                <li class="item"><a class="rounded-5" href="#">Accessories</a></li>
                                <li class="item"><a class="rounded-5" href="#">$100 - $400</a></li>
                                <li class="item"><a class="rounded-5" href="#">Above $800</a></li>
                                <li class="item"><a class="rounded-5" href="#">Black</a></li>
                                <li class="item"><a class="rounded-5" href="#">Blue</a></li>
                                <li class="item"><a class="rounded-5" href="#">Red</a></li>
                                <li class="item"><a class="rounded-5" href="#">M</a></li>
                                <li class="item"><a class="rounded-5" href="#">XS</a></li>
                            </ul>
                            <span class="btn btn-sm brd-link btnview">View all</span> 
                        </div>
                    </div>
                    <!--End Product Tags-->
                </div>
            </div> --}}
            <!--End Sidebar-->

            <!--Products-->
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 main-col">
                <!--Product Grid-->
                <div class="grid-products grid-view-items">
                    <div class="row col-row product-options row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-sm-3 row-cols-2">     
                        @foreach ($programs as $program)
                        <div class="item col-item">
                            <div class="product-box">
                                <!-- Start Product Image -->
                                <div class="product-image" style="width: 100%; height: 200px">
                                    <!-- Start Product Image -->
                                    <a href="product-layout1.html" class="product-img rounded-0">
                                        <!-- Image -->
                                        <img class="primary rounded-0 blur-up lazyload" data-src="{{ asset('storage/uploads'.'/'.$program->cover['cover1'])}}" src="{{ asset('storage/uploads'.'/'.$program->cover['cover1'])}}" alt="Program" title="Program" style="height: 200px; object-fit:cover"  />
                                        <!-- End Image -->
                                        <!-- Hover Image -->
                                        <img class="hover rounded-0 blur-up lazyload" data-src="{{ asset('storage/uploads'.'/'.$program->cover['cover2'])}}" src="{{ asset('storage/uploads'.'/'.$program->cover['cover2'])}}" alt="Program" title="Program" style="height: 200px; object-fit:cover"  />
                                        <!-- End Hover Image -->
                                    </a>
                                    <!-- End Product Image -->
                                    <!--Product Button-->
                                    <div class="button-set style1">
                                        <!--Cart Button-->
                                        <a href="{{ route('add.cart',$program->id)}}" class="btn-icon addtocart quick-shop-modal">
                                            <span class="icon-wrap d-flex-justify-center h-100 w-100" data-bs-toggle="tooltip" data-bs-placement="left" title="Select Options"><i class="icon anm anm-cart-l"></i><span class="text">Add To Cart</span></span>
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
                        @endforeach                              
                    </div>

                    <!-- Pagination -->
                    <nav class="clearfix pagination-bottom">
                        <ul class="pagination justify-content-center">
                            <li class="page-item disabled"><a class="page-link" href="#"><i class="icon anm anm-angle-left-l"></i></a></li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link dot" href="#">...</a></li>
                            <li class="page-item"><a class="page-link" href="#">5</a></li>
                            <li class="page-item"><a class="page-link" href="#"><i class="icon anm anm-angle-right-l"></i></a></li>
                        </ul>
                    </nav>
                    <!-- End Pagination -->
                </div>
                <!--End Product Grid-->
            </div>
            <!--End Products-->
        </div>
    </div>
    <!--End Main Content-->
</div>
<!-- End Body Container -->
    
@endsection