<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <title>
        @section('title')
            | Welcome to Josh Frontend
        @show
    </title>
    <!--global css starts-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/lib.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/custom.css') }}">
    <style>
        .dropdown-item:active{
            background-color: transparent !important;
        }
        .indexpage.navbar-nav >.nav-item .nav-link:hover {
            color: #01bc8c;
        }
    </style>
    <!--end of global css-
    <!--page level css-->
@yield('header_styles')
<!--end of page level css-->
</head>

<body>
<!-- Header Start -->
<header>
    <!--Icon Section Start-->
    <div class="icon-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-8 col-md-4 mt-2">
                    <ul class="list-inline">
                        <li>
                            <a href="#"> <i class="livicon" data-name="facebook" data-size="18" data-loop="true" data-c="#fff"
                                            data-hc="#757b87"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#"> <i class="livicon" data-name="twitter" data-size="18" data-loop="true" data-c="#fff"
                                            data-hc="#757b87"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#"> <i class="livicon" data-name="google-plus" data-size="18" data-loop="true"
                                            data-c="#fff" data-hc="#757b87"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#"> <i class="livicon" data-name="linkedin" data-size="18" data-loop="true" data-c="#fff"
                                            data-hc="#757b87"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#"> <i class="livicon" data-name="rss" data-size="18" data-loop="true" data-c="#fff"
                                            data-hc="#757b87"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-8 col-4 col-md-8 text-right mt-2">
                    <ul class="list-inline">
                        <li>
                            <a href="mailto:"><i class="livicon" data-name="mail" data-size="18" data-loop="true"
                                                 data-c="#fff"
                                                 data-hc="#fff"></i></a>
                            <label class="d-none d-md-inline-block d-lg-inline-block d-xl-inline-block"><a
                                        href="mailto:"
                                        class="text-white">info@joshadmin.com</a></label>
                        </li>
                        <li>
                            <a href="tel:"><i class="livicon" data-name="phone" data-size="18" data-loop="true"
                                              data-c="#fff"
                                              data-hc="#fff"></i></a>
                            <label class="d-none d-md-inline-block d-lg-inline-block d-xl-inline-block"><a href="tel:"
                                                                                                           class="text-white">(703)
                                    717-4200</a></label>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container indexpage">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="{{ route('home') }}"><img src="{{ asset('images/e-store.png') }}"
                                                                    alt="logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto  margin_right">
                    <li  class="nav-item {!! (Request::is('/') ? 'active' : '') !!}">
                        <a href="{{ route('home') }}" class="nav-link"> Home</a>
                    </li>
                    <li class=" nav-item dropdown  {!! (Request::is('typography') || Request::is('advancedfeatures') || Request::is('grid') ? 'active' : '') !!}">
                        <a href="#" aria-expanded="false" class="nav-link"> Features</a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ URL::to('typography') }}" class="dropdown-item">Typography</a>
                            </li>
                            <li><a href="{{ URL::to('advancedfeatures') }}" class="dropdown-item">Advanced Features</a>
                            </li>
                            <li><a href="{{ URL::to('grid') }}" class="dropdown-item">Grid System</a>
                            </li>
                        </ul>
                    </li>
                    <li class=" nav-item dropdown {!! (Request::is('aboutus') || Request::is('timeline') || Request::is('faq') || Request::is('blank_page')  ? 'active' : '') !!}">
                        <a href="#" class="nav-link"> Pages</a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ URL::to('aboutus') }}" class="dropdown-item">About Us</a>
                            </li>
                            <li><a href="{{ URL::to('timeline') }}" class="dropdown-item">Timeline</a></li>
                            <li><a href="{{ URL::to('price') }}" class="dropdown-item">Price</a>
                            </li>
                            <li><a href="{{ URL::to('404') }}" class="dropdown-item">404 Error</a>
                            </li>
                            <li><a href="{{ URL::to('500') }}" class="dropdown-item">500 Error</a>
                            </li>
                            <li><a href="{{ URL::to('faq') }}" class="dropdown-item">FAQ</a>
                            </li>
                            <li><a href="{{ URL::to('blank_page') }}" class="dropdown-item">Blank</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown {!! (Request::is('products') || Request::is('single_product') || Request::is('compareproducts') || Request::is('category')  ? 'active' : '') !!}">
                        <a href="#" class="nav-link"> Shop</a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ URL::to('products') }}" class="dropdown-item">Products</a>
                            </li>
                            <li><a href="{{ URL::to('single_product') }}" class="dropdown-item">Single Product</a>
                            </li>
                            <li><a href="{{ URL::to('compareproducts') }}" class="dropdown-item">Compare Products</a>
                            </li>
                            <li><a href="{{ URL::to('category') }}"  class="dropdown-item">Categories</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown {!! (Request::is('portfolio') || Request::is('portfolioitem') ? 'active' : '') !!}">
                        <a href="#" class="nav-link"> Portfolio</a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ URL::to('portfolio') }}">Portfolio</a>
                            </li>
                            <li><a href="{{ URL::to('portfolioitem') }}">Portfolio Item</a>
                            </li>
                        </ul>
                    </li>
                    @if(Sentinel::check())
                        <li class=" nav-item dropdown {!! (Request::is('user_emails/inbox') || Request::is('user_emails/compose') || Request::is('user_emails/sent') ? 'active' : '') !!}">
                            <a href="#" aria-expanded="false" class="nav-link"> Emails</a>
                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ URL::to('user_emails/compose') }}" class="dropdown-item">Compose</a>
                                </li>
                                <li>
                                    <a href="{{ URL::to('user_emails/inbox') }}" class="dropdown-item">Inbox</a>
                                </li>
                                <li>
                                    <a href="{{ URL::to('user_emails/sent') }}" class="dropdown-item">Sent</a>
                                </li>
                            </ul>
                        </li>
                    @endif
                    <li class="nav-item {!! (Request::is(
                    'news*') ? 'active' : '') !!}"><a href="{{ URL::to('news') }}" class="nav-link">News</a>
                    </li>
                    <li class="nav-item {!! (Request::is(
                    'blog') || Request::is('blogitem/*') ? 'active' : '') !!}"><a href="{{ URL::to('blog') }}" class="nav-link">
                            Blog</a>
                    </li>
                    <li class="nav-item {!! (Request::is(
                    'contact') ? 'active' : '') !!}"><a href="{{ URL::to('contact') }}" class="nav-link">Contact</a>
                    </li>

                    {{--based on anyone login or not display menu items--}}
                    @if(Sentinel::guest())
                        <li class="nav-item"><a href="{{ URL::to('login') }}" class="nav-link">Login</a>
                        </li>
                        <li class="nav-item"><a href="{{ URL::to('register') }}" class="nav-link">Register</a>
                        </li>
                    @else
                        <li class="nav-item {{ (Request::is('my-account') ? 'active' : '') }}"><a href="{{ URL::to('my-account') }}" class="nav-link">My
                                Account</a>
                        </li>
                        <li class="nav-item"><a href="{{ URL::to('logout') }}" class="nav-link">Logout</a>
                        </li>
                    @endif
                </ul>
            </div>
        </nav>
        <!-- Nav bar End -->
    </div>
</header>

<!-- //Header End -->

<!-- slider / breadcrumbs section -->
@yield('top')

<!-- Content -->
@yield('content')

<!-- Footer Section Start -->
<footer>
    <div class=" col-12 copyright">
        <div class="media">
            <img class="media-object rounded-circle mr-3" src="{{ asset('images/logo kstore.png') }}"
                 alt="image">
            <div class="media-body">
                <p class="media-heading text-justify">Copyright &copy; k-Store PDTK, 2019.</p>
                <p class="text-right"><i>Version 1.0</i></p>
            </div>
        </div>
    </div>
    <!-- //Footer Section End -->
</footer>
<a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" data-original-title="Return to top"
   data-toggle="tooltip" data-placement="left">
    <i class="livicon" data-name="plane-up" data-size="18" data-loop="true" data-c="#fff" data-hc="white"></i>
</a>



<!--global js starts-->
<script type="text/javascript" src="{{ asset('js/frontend/lib.js') }}"></script>
<!--global js end-->
<!-- begin page level js -->
@yield('footer_scripts')
<!-- end page level js -->
<script>
    $(".navbar-toggler-icon").click(function () {
        $(this).closest('.navbar').find('.collapse').toggleClass('collapse1')
    })

    $(function () {
        $('[data-toggle="tooltip"]').tooltip().css('font-size', '14px');
    })
</script>
</body>

</html>
