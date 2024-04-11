@extends('frontend.layouts.main')
@section('content')

    <!-- Body Container -->
    <div id="page-content"> 
        <!--Page Header-->
        <div class="page-header text-center">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 d-flex justify-content-between align-items-center">
                        <div class="page-title"><h1>Cart Checkout</h1></div>
                        <!--Breadcrumbs-->
                        <div class="breadcrumbs"><a href="{{ route('home')}}" title="Back to the home page">Home</a><span class="main-title"><i class="icon anm anm-angle-right-l"></i>Check Out</span></div>
                        <!--End Breadcrumbs-->
                    </div>
                </div>
            </div>
        </div>
        <!--End Page Header-->

        <!--Main Content-->
        <div class="container">     
            <!--Checkout Content-->
            <form class="checkout-form" method="post" action="#">
                <div class="row">
                    <div class="col-lg-8 col-md-7 col-sm-12 col-12 mb-4 mb-md-0">
                        <!--Order Summary-->
                        <div class="block order-summary">
                            <div class="block-content">
                                <h3 class="title mb-3 text-uppercase">Order Summary</h3>
                                <div class="table-responsive-sm table-bottom-brd order-table"> 
                                    <table class="table table-hover align-middle mb-0">
                                        <thead>
                                            <tr>
                                                <th class="action">&nbsp;</th>
                                                <th class="text-start">Image</th>
                                                <th class="text-start proName">Product</th>
                                                <th class="text-center">Qty</th>
                                                <th class="text-center">Price</th>
                                                {{-- <th class="text-center">Subtotal</th> --}}
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($big_carts as $cart)
                                            <tr>
                                                <td class="text-center cart-delete"><a href="{{ route('remove.cart',$cart->rowId)}}" class="cart-remove remove-icon position-static" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove to Cart"><i class="icon anm anm-times-r"></i></a></td>
                                                <td class="text-start"><a href="product-layout1.html" class="thumb"><img class="rounded-0 blur-up lazyload" data-src="{{ asset('storage/uploads'.'/'.$cart->options?->image)}}" src="{{ asset('storage/uploads'.'/'.$cart->options?->image)}}" alt="product" title="product" width="120" height="170" /></a></td>
                                                <td class="text-start proName">
                                                    <div class="list-view-item-title">
                                                        <a href="product-layout1.html">{{ $cart->name }}</a>
                                                    </div>
                                                    <div class="cart-meta-text">
                                                       {{ $cart->options?->caption }}
                                                    </div>
                                                </td>
                                                <td class="text-center">{{ $cart->qty}}</td>
                                                <td class="text-center">{{ number_format($cart->price)}}</td>
                                                {{-- <td class="text-center"><strong>$198.00</strong></td> --}}
                                            </tr>  
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!--End Order Summary-->
                    </div>
                    <div class="col-lg-4 col-md-5 col-sm-12 col-12">
                        <!--Cart Summary-->
                        <div class="cart-info">
                            <div class="cart-order-detail cart-col">
                                <div class="row g-0 border-bottom pb-2">
                                    <span class="col-6 col-sm-6 cart-subtotal-title"><strong>Subtotal</strong></span>
                                    @if (count($big_carts))
                                    <span class="col-6 col-sm-6 cart-subtotal-title cart-subtotal text-end"><span class="money">{{ number_format($big_carts->sum('price'))}}</span></span>
                                    @else
                                    <span class="col-6 col-sm-6 cart-subtotal-title cart-subtotal text-end"><span class="money">0</span></span>
                                    @endif
                                </div>
                                <div class="row g-0 border-bottom py-2">
                                    <span class="col-6 col-sm-6 cart-subtotal-title"><strong>Coupon Discount</strong></span>
                                    <span class="col-6 col-sm-6 cart-subtotal-title cart-subtotal text-end"><span class="money">0</span></span>
                                </div>
                                {{-- <div class="row g-0 border-bottom py-2">
                                    <span class="col-6 col-sm-6 cart-subtotal-title"><strong>Tax</strong></span>
                                    <span class="col-6 col-sm-6 cart-subtotal-title cart-subtotal text-end"><span class="money">$10.00</span></span>
                                </div> --}}
                                {{-- <div class="row g-0 border-bottom py-2">
                                    <span class="col-6 col-sm-6 cart-subtotal-title"><strong>Shipping</strong></span>
                                    <span class="col-6 col-sm-6 cart-subtotal-title cart-subtotal text-end"><span class="money">Free shipping</span></span>
                                </div> --}}
                                <div class="row g-0 pt-2">
                                    <span class="col-6 col-sm-6 cart-subtotal-title fs-6"><strong>Total</strong></span>
                                    <span class="col-6 col-sm-6 cart-subtotal-title fs-5 cart-subtotal text-end text-primary"><b class="money">{{ number_format(count($big_carts) ? $big_carts->sum('price') : 0) }}</b></span>
                                </div>

                                <a href="{{ route('complete.check.out')}}" id="cartCheckout" class="btn btn-lg my-4 checkout w-100">Complete Check Out</a>
                                {{-- <div class="paymnet-img text-center"><img src="assets/images/icons/safepayment.png" alt="Payment" width="299" height="28" /></div> --}}
                                <div class="d-flex-center flex-column justify-content-md-between flex-md-row-reverse">
                                    <ul class="payment-icons d-flex-center mb-2 mb-md-0" style="gap: 5px">
                                        <li>
                                            <img width="50" height="50" src="{{ asset('assets/frontend/images/airtel.png')}}" alt="">
                                        </li>
                                        <li>
                                            <img width="50" height="50" src="{{ asset('assets/frontend/images/tigopesa.png')}}" alt="">
                                        </li>
                                        <li>
                                            <img width="50" height="50" src="{{ asset('assets/frontend/images/vodacom.jpeg')}}" alt="">
                                        </li>
                                        {{-- <li>
                                            <img width="50" height="50" src="{{ asset('assets/frontend/images/visa.png')}}" alt="">
                                        </li> --}}
                                        <li>
                                            <img width="50" height="50" src="{{ asset('assets/frontend/images/master.png')}}" alt="">
                                        </li>
                                        {{-- <li>
                                            <img width="50" height="50" src="{{ asset('assets/frontend/images/cash.png')}}" alt="">
                                        </li> --}}
                                    </ul>
                                </div>
                            </div>                               
                        </div>
                        <!--Cart Summary-->
                    </div>
                </div>
            </form>
            <!--End Checkout Content-->
        </div>
        <!--End Main Content-->
    </div>
    <!-- End Body Container -->
    
@endsection