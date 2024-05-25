<div class="mobile-nav-wrapper" role="navigation">
    <div class="closemobileMenu">Close Menu <i class="icon anm anm-times-l"></i></div>
    <ul id="MobileNav" class="mobile-nav">
        <li class="lvl1 parent"><a href="{{ route('home')}}">Home </a>
        </li>
        <li class="lvl1 parent"><a href="{{ route('about.us')}}">About Us</a>
        </li>
        <li class="lvl1 parent dropdown"><a href="#">Program <i class="icon anm anm-angle-down-l"></i></a>
            <ul class="dropdown">
                @foreach ($program_categories as $category)
                <li><a href="{{ route('all.programs',$category->name)}}" class="site-nav lvl-2">{{ $category->name }}</a></li>
                @endforeach
            </ul>
        </li>
        {{-- <li class="lvl1 parent"><a href="#">Program</a>
        </li> --}}
        <li class="lvl1 parent"><a href="{{ route('blogs')}}">Blog</a>
        </li>
        <li class="lvl1 parent"><a href="{{ route('contact.us')}}">Contact Us</a>
        </li>
        <li class="lvl1 parent">
            <a href="{{ route('book.trainer')}}">
             <button class="btn btn-primary btn-sm btn-round" style="margin-left: 20px; margin-top: 5px;"> <i class="hdr-icon icon anm anm-pencil-square-o" style="margin-right: 3px"></i> Book Trainer</button>
            </a>
        </li>
        <li class="mobile-menu-bottom">
            <div class="mobile-links"> 
                <ul class="list-inline d-inline-flex flex-column w-100">
                    @if (empty(Auth::user()))
                    <li class="d-flex align-items-center"><a href="{{ route('login')}}"><i class="icon anm anm-sign-in-al"></i>Sign In</a></li>
                    <li class="d-flex align-items-center"><a href="{{ route('register')}}"><i class="icon anm anm-user-al"></i>Register</a></li>
                    @endif
                    @if (Auth::user()?->hasRole('Customer'))
                    <li class="d-flex align-items-center"><a href="{{ route('my.account')}}"><i class="icon anm anm-user-cil"></i>My Account</a></li>
                    <li class="d-flex align-items-center"><a href="{{ route('logout')}}"><i class="icon anm anm-sign-out-al"></i>Sign out</a></li>  
                    @endif
                    @if (Auth::user()?->hasRole('Admin') || Auth::user()?->hasRole('Super Admin'))
                    <li class="d-flex align-items-center"><a href="{{ route('dashboard')}}"><i class="icon anm anm-home"></i>Dashboard</a></li>
                    <li class="d-flex align-items-center"><a href="{{ route('logout')}}"><i class="icon anm anm-sign-out-al"></i>Sign out</a></li>  
                    @endif
                    {{-- <li><a href="{{ route('login')}}" class="d-flex align-items-center"><i class="icon anm anm-sign-in-al"></i>Sign In</a></li>
                    <li><a href="{{ route('register')}}" class="d-flex align-items-center"><i class="icon anm anm-user-al"></i>Register</a></li> --}}
                    {{-- <li><a href="#" class="d-flex align-items-center"><i class="icon anm anm-user-cil"></i>My Account</a></li> --}}
                    <li class="title h5">Need Help?</li>
                    <li><a href="tel:401234567890" class="d-flex align-items-center"><i class="icon anm anm-phone-l"></i> 255 654 638 396</a></li>
                    <li><a href="mailto:info@example.com" class="d-flex align-items-center"><i class="icon anm anm-envelope-l"></i> info@lalishafitzone.co.tz</a></li>
                </ul>
            </div>
            <div class="mobile-follow mt-2">  
                <h5 class="title">Follow Us</h5>
                <ul class="list-inline social-icons d-inline-flex mt-1">
                    <li class="list-inline-item"><a href="#" title="Facebook"><i class="icon anm anm-facebook-f"></i></a></li>
                    <li class="list-inline-item"><a href="#" title="Twitter"><i class="icon anm anm-twitter"></i></a></li>
                    <li class="list-inline-item"><a href="#" title="Pinterest"><i class="icon anm anm-pinterest-p"></i></a></li>
                    <li class="list-inline-item"><a href="#" title="Linkedin"><i class="icon anm anm-linkedin-in"></i></a></li>
                    <li class="list-inline-item"><a href="#" title="Instagram"><i class="icon anm anm-instagram"></i></a></li>
                    <li class="list-inline-item"><a href="#" title="Youtube"><i class="icon anm anm-youtube"></i></a></li>
                </ul>
            </div>
        </li>
    </ul>
</div>