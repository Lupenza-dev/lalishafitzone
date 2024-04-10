@extends('frontend.layouts.main')
@section('content')
     <!-- Body Container -->
     <div id="page-content"> 
        <!--Page Header-->
        <div class="page-header text-center">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 d-flex justify-content-between align-items-center">
                        <div class="page-title"><h1>Blog Details</h1></div>
                        <!--Breadcrumbs-->
                        <div class="breadcrumbs"><a href="{{ route('home')}}" title="Back to the home page">Home</a><span class="title"><i class="icon anm anm-angle-right-l"></i>Blog</span><span class="main-title fw-bold"><i class="icon anm anm-angle-right-l"></i>{{ $blog->title}}</span></div>
                        <!--End Breadcrumbs-->
                    </div>
                </div>
            </div>
        </div>
        <!--End Page Header-->

        <!--Main Content-->
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-3 blog-sidebar sidebar sidebar-bg">
                    <!--Sidebar-->
                    <div class="sidebar-tags sidebar-sticky clearfix">
                        <!--Category-->
                        <div class="sidebar-widget clearfix categories">
                            <div class="widget-title"><h2>Category</h2></div>
                            <div class="widget-content">
                                <ul class="sidebar-categories scrollspy clearfix">
                                    @foreach ($categories as $category)
                                    <li class="lvl-1 active"><a href="blog-grid-sidebar.html" class="site-nav lvl-1">{{ $category->name }} <span class="count">{{ $category->news_count}}</span></a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <!--End Category-->
                        <!--Archive-->
                        {{-- <div class="sidebar-widget clearfix categories">
                            <div class="widget-title"><h2>Archive</h2></div>
                            <div class="widget-content">
                                <ul class="sidebar-categories scrollspy clearfix">
                                    <li class="lvl-1"><a href="blog-grid-sidebar.html" class="site-nav lvl-1">24 February 2023</a></li>
                                    <li class="lvl-1"><a href="blog-grid-sidebar.html" class="site-nav lvl-1">31 March 2023</a></li>
                                    <li class="lvl-1"><a href="blog-grid-sidebar.html" class="site-nav lvl-1">10 April 2023</a></li>
                                </ul>
                            </div>
                        </div> --}}
                        <!--End Archive-->
                        <!--Recent Posts-->
                        <div class="sidebar-widget clearfix">
                            <div class="widget-title"><h2>Recent Blogs</h2></div>
                            <div class="widget-content">
                                <div class="list list-sidebar-products">
                                    @foreach ($other_blogs as $other)
                                    <div class="mini-list-item d-flex align-items-center w-100 clearfix">
                                        <div class="mini-image"><a class="item-link" href="{{ route('blog.view',$other->uuid)}}"><img class="featured-image blur-up lazyload" data-src="{{ asset('storage/uploads'.'/'.$other->image)}}" src="{{ asset('storage/uploads'.'/'.$other->image)}}" alt="blog" width="100" height="100" /></a></div>
                                        <div class="ms-3 details">
                                            <a class="item-title" href="{{ route('blog.view',$other->uuid)}}">{{ $other->title}}</a>
                                            <div class="item-meta opacity-75"><time datetime="2023-01-02">{{ date('M d, Y',strtotime($other->created_at))}}</time></div>
                                        </div>
                                    </div>  
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <!--End Recent Posts-->
                        <!--Popular Tags-->
                        {{-- <div class="sidebar-widget clearfix tags-clouds">
                            <div class="widget-title"><h2>Popular Tags</h2></div>
                            <div class="widget-content">
                                <ul class="tags-list d-flex-wrap">
                                    <li class="item"><a class="rounded-3" href="blog-grid-sidebar.html">Fashion</a></li>
                                    <li class="item"><a class="rounded-3" href="blog-grid-sidebar.html">Shoes</a></li>
                                    <li class="item"><a class="rounded-3" href="blog-grid-sidebar.html">Beauty</a></li>
                                    <li class="item"><a class="rounded-3" href="blog-grid-sidebar.html">Accessories</a></li>
                                    <li class="item"><a class="rounded-3" href="blog-grid-sidebar.html">Trending</a></li>
                                </ul>
                            </div>
                        </div> --}}
                        <!--End Popular Tags-->
                    </div>
                    <!--End Sidebar-->
                </div>

                <!-- Blog Content-->
                <div class="col-12 col-sm-12 col-md-12 col-lg-9 main-col">
                    <div class="blog-article"> 
                        <div class="blog-img mb-3">
                            <img class="rounded-0 blur-up lazyload" data-src="{{ asset('storage/uploads'.'/'.$blog->image)}}" src="{{ asset('storage/uploads'.'/'.$blog->image)}}" alt="New shop collection our shop" width="1200" height="700" />
                        </div>
                        <!-- Blog Content -->
                        <div class="blog-content">
                            <h2 class="h1">{{ $blog->title }}</h2>
                            <ul class="publish-detail d-flex-wrap">                      
                                <li><i class="icon anm anm-user-al"></i> <span class="opacity-75 me-1">Posted by:</span>Admin</li>
                                <li><i class="icon anm anm-clock-r"></i> <time datetime="2023-01-02">{{ date('M d, Y',strtotime($blog->created_at))}}</time></li>
                                {{-- <li><i class="icon anm anm-comments-l"></i> <a href="#">2 Comments</a></li> --}}
                                <li><i class="icon anm anm-tag-r"></i><span class="opacity-75">{{ $blog->category?->name }}</li>
                            </ul>
                            <hr />
                            <div class="content">
                                {!! $blog->description !!}
                            </div>
                            <hr />
                            {{-- <div class="row blog-action d-flex-center justify-content-between">
                                <ul class="col-lg-6 tags-list d-flex-center">
                                    <li class="item fw-600">Related Tags :</li>
                                    <li class="item"><a class="text-link" href="blog-grid-sidebar.html">Fashion,</a></li>
                                    <li class="item"><a class="text-link" href="blog-grid-sidebar.html">Shoes,</a></li>
                                    <li class="item"><a class="text-link" href="blog-grid-sidebar.html">Accessories</a></li>
                                </ul>

                                <div class="col-lg-6 mt-2 mt-lg-0 social-sharing d-flex-center justify-content-lg-end">
                                    <span class="sharing-lbl fw-600">Share :</span>
                                    <a href="#" class="d-flex-center btn btn-link btn--share share-facebook" data-bs-toggle="tooltip" data-bs-placement="top" title="Share on Facebook"><i class="icon anm anm-facebook-f"></i><span class="share-title d-none">Facebook</span></a>
                                    <a href="#" class="d-flex-center btn btn-link btn--share share-facebook" data-bs-toggle="tooltip" data-bs-placement="top" title="Tweet on Twitter"><i class="icon anm anm-twitter"></i><span class="share-title d-none">Twitter</span></a>
                                    <a href="#" class="d-flex-center btn btn-link btn--share share-facebook" data-bs-toggle="tooltip" data-bs-placement="top" title="Pin on Pinterest"><i class="icon anm anm-pinterest-p"></i><span class="share-title d-none">Pinterest</span></a>
                                    <a href="#" class="d-flex-center btn btn-link btn--share share-facebook" data-bs-toggle="tooltip" data-bs-placement="top" title="Share on Instagram"><i class="icon anm anm-linkedin-in"></i><span class="share-title d-none">Instagram</span></a>
                                    <a href="#" class="d-flex-center btn btn-link btn--share share-facebook" data-bs-toggle="tooltip" data-bs-placement="top" title="Share by Email"><i class="icon anm anm-envelope-l"></i><span class="share-title d-none">Email</span></a>
                                </div>
                            </div> --}}
                            <!-- Blog Nav -->
                            {{-- <div class="blog-nav d-flex-center justify-content-between mt-3">
                                <div class="nav-prev fs-14"><a href="#"><i class="align-middle me-2 icon anm anm-angle-left-r"></i><span class="align-middle">Previous post</span></a></div>
                                <div class="nav-next fs-14"><a href="#"><span class="align-middle">Next post</span><i class="align-middle ms-2 icon anm anm-angle-right-r"></i></a></div>
                            </div> --}}
                            <!-- End Blog Nav -->
                            <hr />

                            {{-- <div class="author-bio">
                                <div class="author-image d-flex">
                                    <a class="author-img" href="#"><img class="blur-up lazyload" data-src="assets/images/users/user-img3.jpg" src="assets/images/users/user-img3.jpg" alt="author" width="200" height="200" /></a>
                                    <div class="author-info ms-4">
                                        <h4 class="mb-2">Jhon Arthur</h4>
                                        <p class="text-muted mb-2"><span class="postcount">234 posts</span><span class="postsince ms-2">Since 2023</span></p>
                                        <p class="author-des">Hi there, I am a Hema blogger sharing Multipurpose Template that will give you and your customers a smooth shopping experience which can be used for various kinds of stores such as fashion.</p>
                                    </div>
                                </div>
                            </div> --}}

                            <!-- Blog Comments -->
                            {{-- <div class="blog-comment section">
                                <h2 class="mb-4">Comments (3)</h2>
                                <ol class="comments-list">
                                    <li class="comments-items">
                                        <div class="comments-item d-flex w-100">
                                            <div class="flex-shrink-0 comment-img"><img class="blur-up lazyload" data-src="assets/images/users/user-img1.jpg" src="assets/images/users/user-img1.jpg" alt="comment" width="200" height="200" /></div>
                                            <div class="flex-grow-1 comment-content">
                                                <div class="comment-user d-flex-center justify-content-between">
                                                    <div class="comment-author fw-600">Alex Sort</div>
                                                    <div class="comment-date opacity-75"><time datetime="2023-01-02">Jan 02, 2023</time></div>
                                                </div>
                                                <div class="comment-text my-2">It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software.</div>
                                                <div class="comment-reply"><button type="button" class="text-link text-decoration-none"><i class="icon anm anm-reply me-2"></i>Reply</button></div>
                                            </div>
                                        </div>
                                        <div class="comments-item d-flex w-100">
                                            <div class="flex-shrink-0 comment-img"><img class="blur-up lazyload" data-src="assets/images/users/user-img2.jpg" src="assets/images/users/user-img2.jpg" alt="comment" width="200" height="200" /></div>
                                            <div class="flex-grow-1 comment-content">
                                                <div class="comment-user d-flex-center justify-content-between">
                                                    <div class="comment-author fw-600">Admin</div>
                                                    <div class="comment-date opacity-75"><time datetime="2023-01-03">Jan 03, 2023</time></div>
                                                </div>
                                                <div class="comment-text my-2">It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software.</div>
                                                <div class="comment-reply"><button type="button" class="text-link text-decoration-none"><i class="icon anm anm-reply me-2"></i>Reply</button></div>
                                            </div>
                                        </div>
                                    </li>
                                </ol>
                            </div> --}}
                            <!-- End Blog Comments -->
                            <!-- Blog Comments Form -->
                            {{-- <div class="formFeilds comment-form form-vertical">
                                <form method="post" action="#">
                                    <h2 class="mb-3">Leave a Comment</h2>
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <label for="commentName" class="d-none">Name</label>
                                                <input type="text" id="commentName" name="contact[name]" placeholder="Name" value="" required />
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <label for="commentEmail" class="d-none">Email</label>
                                                <input type="email" id="commentEmail" name="contact[email]" placeholder="Email" value="" required />                        	
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                            <div class="form-group">
                                                <label for="commentMessage" class="d-none">Message</label>
                                                <textarea rows="5" id="commentMessage" name="contact[body]" placeholder="Write Comment" required></textarea>
                                            </div>
                                        </div>  
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                            <input type="submit" class="btn btn-lg" value="Post comment">
                                        </div>
                                    </div>
                                </form>
                            </div> --}}
                            <!-- End Blog Comments Form -->
                        </div>
                        <!-- End Blog Content -->
                    </div>
                </div>
                <!--End Blog Content-->
            </div>
        </div>
        <!--End Main Content-->
    </div>
    <!-- End Body Container -->
@endsection