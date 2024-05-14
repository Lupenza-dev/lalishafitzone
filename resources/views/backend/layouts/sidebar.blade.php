<div id="sidebar-menu">
    <!-- Left Menu Start -->
    <ul class="metismenu list-unstyled" id="side-menu">
        <li class="menu-title" key="t-menu">Menu</li>
        <li>
            <a href="{{ route('dashboard')}}" class="waves-effect">
                <i class="bx bx-home-circle"></i>
                <span key="t-dashboards">Home</span>
            </a>
        </li>
        <li class="menu-title" key="t-apps">Programs</li>
        <li>
            <a href="{{ route('categories.index')}}" class="waves-effect">
                <i class="bx bx-purchase-tag-alt"></i>
                <span key="t-chat">Category</span>
            </a>
        </li>
        <li>
            <a href="{{ route('programs.index')}}" class="waves-effect">
                <i class="bx bx-food-menu"></i>
                <span key="t-chat">Program</span>
            </a>
        </li>
        <li>
            <a href="{{ route('sliders.index')}}" class="waves-effect">
                <i class="bx bx-image-alt"></i>
                <span key="t-chat">Sliders</span>
            </a>
        </li>
        <li>
            <a href="{{ route('testmonials.index')}}" class="waves-effect">
                <i class="bx bx-user-circle"></i>
                <span key="t-chat">Testmonials</span>
            </a>
        </li>
        <li>
            <a href="{{ route('abouts.index')}}" class="waves-effect">
                <i class="bx bx-book"></i>
                <span key="t-chat">About</span>
            </a>
        </li>
        <li>
            <a href="{{ route('categories.news')}}" class="waves-effect">
                <i class="bx bxs-package"></i>
                <span key="t-chat">News Categories</span>
            </a>
        </li>
        <li>
            <a href="{{ route('news.index')}}" class="waves-effect">
                <i class="bx bxs-news"></i>
                <span key="t-chat">News</span>
            </a>
        </li>
        <li>
            <a href="{{ route('news.subcribers')}}" class="waves-effect">
                <i class="bx bx-user"></i>
                <span key="t-chat">News Subscribers</span>
            </a>
        </li>
        <li>
            <a href="{{ route('list.bookings')}}" class="waves-effect">
                <i class="bx bx-list-ul"></i>
                <span key="t-chat">Trainer Booking</span>
            </a>
        </li>
        <li class="menu-title" key="t-menu">Orders</li>
        <li>
            <a href="{{ route('orders')}}" class="waves-effect">
                <i class="bx bx-list-ol"></i>
                <span key="t-dashboards">Orders</span>
            </a>
        </li>

    </ul>
</div>