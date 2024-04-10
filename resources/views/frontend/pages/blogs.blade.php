@extends('frontend.layouts.main')
@section('content')
      <!-- Body Container -->
      <div id="page-content"> 
        <!--Page Header-->
        <div class="page-header text-center">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 d-flex justify-content-between align-items-center">
                        <div class="page-title"><h1>Blogs</h1></div>
                        <!--Breadcrumbs-->
                        <div class="breadcrumbs"><a href="{{ route('home')}}" title="Back to the home page">Home</a><span class="title"><i class="icon anm anm-angle-right-l"></i>Blog</span><span class="main-title fw-bold"><i class="icon anm anm-angle-right-l"></i>All Blog</span></div>
                        <!--End Breadcrumbs-->
                    </div>
                </div>
            </div>
        </div>
        <!--End Page Header-->

        <!--Main Content-->
        <div class="container">
            <!--Toolbar-->
            <div class="toolbar toolbar-wrapper blog-toolbar">
                <div class="row align-items-center">
                    <div class="col-12 col-sm-6 col-md-6 col-lg-6 text-left filters-toolbar-item d-flex justify-content-center justify-content-sm-start">
                        <div class="search-form mb-3 mb-sm-0">
                            <form class="d-flex" action="#">
                                <input class="search-input" type="text" placeholder="Blog search...">
                                <button type="submit" class="search-btn"><i class="icon anm anm-search-l"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-6 text-right filters-toolbar-item d-flex justify-content-between justify-content-sm-end">
                        <div class="filters-item d-flex align-items-center">
                            <label for="ShowBy" class="mb-0 me-2">Show:</label>
                            <select name="ShowBy" id="ShowBy" class="filters-toolbar-sort">
                                <option value="title-ascending" selected="selected">10</option>
                                <option>15</option>
                                <option>20</option>
                                <option>25</option>
                                <option>30</option>
                            </select>
                        </div>
                        {{-- <div class="filters-item d-flex align-items-center ms-3">
                            <label for="SortBy" class="mb-0 me-2">Sort:</label>
                            <select name="SortBy" id="SortBy" class="filters-toolbar-sort">
                                <option value="title-ascending" selected="selected">Featured</option>
                                <option>Newest</option>
                                <option>Most comments</option>
                                <option>Release Date</option>
                            </select>
                        </div> --}}
                    </div>
                </div>
            </div>
            <!--End Toolbar-->

            <!--Blog Grid-->
            <div class="blog-grid-view">
                <div class="row col-row row-cols-lg-3 row-cols-sm-2 row-cols-1">
                    @foreach ($blogs as $blog)
                    <div class="blog-item col-item">
                        <div class="blog-article zoomscal-hov">
                            <div class="blog-img">
                                <a class="featured-image rounded-0 zoom-scal" href="{{ route('blog.view',$blog->uuid)}}"><img class="rounded-0 blur-up lazyload" data-src="{{ asset('storage/uploads'.'/'.$blog->image)}}" src="{{ asset('storage/uploads'.'/'.$blog->image)}}" alt="New shop collection our shop" width="740" height="410" /></a>
                            </div>
                            <div class="blog-content">
                                <h2 class="h3"><a href="{{ route('blog.view',$blog->uuid)}}">{{ $blog->title }}</a></h2>
                                <ul class="publish-detail d-flex-wrap">                      
                                    <li><i class="icon anm anm-user-al"></i> <span class="opacity-75 me-1">Posted by:</span> Admin</li>
                                    <li><i class="icon anm anm-clock-r"></i> <time datetime="2023-01-02">Jan 02, 2023 {{ date('M d, Y',strtotime($blog->created_at))}}</time></li>
                                    {{-- <li><i class="icon anm anm-comments-l"></i> <a href="#">2 Comments</a></li> --}}
                                </ul>
                                <p class="content">{{ $blog->caption }}</p>
                                <a href="{{ route('blog.view',$blog->uuid)}}" class="btn btn-secondary btn-sm">Read more</a>
                            </div>
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
            <!--End Blog Grid-->
        </div>
        <!--End Main Content-->
    </div>
    <!-- End Body Container -->
@endsection