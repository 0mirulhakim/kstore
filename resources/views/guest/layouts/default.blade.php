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
            | Selamat Datang ke e-Store PDTK
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
            color: #bc01b3;
        }
    </style>
    <!--end of global css -->
    <!--page level css-->
@yield('header_styles')
<!--end of page level css-->
</head>

<body>
<!-- Header Start -->
<header>
    <!--Icon Section Start-->
    <div id="notific">
        @include('notifications')
    </div>
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
                                        class="text-white">klang@selangor.gov.my</a></label>
                        </li>
                        <li>
                            <a href="tel:"><i class="livicon" data-name="phone" data-size="18" data-loop="true"
                                              data-c="#fff"
                                              data-hc="#fff"></i></a>
                            <label class="d-none d-md-inline-block d-lg-inline-block d-xl-inline-block"><a href="tel:"
                                                                                                           class="text-white">(03)
                                    33711963</a></label>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container indexpage">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="{{ route('home') }}"><img src="{{ asset('images/e-toner.png') }}"
                                                                    alt="logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto  margin_right">

                    <li class="nav-item"><a href="{{ URL::to('semakan') }}" class="nav-link">Semak Status Permohonan</a></li>
                    <li class="nav-item"><a href="{{ URL::to('history') }}" class="nav-link">Sejarah Permohonan</a></li>

                    {{--based on anyone login or not display menu items--}}
                    @if(Sentinel::guest())
                        <li class="nav-item"><a href="{{ URL::to('admin/login') }}" class="nav-link">Login</a></li>
                    @else
                        <li class="nav-item"><a href="{{ URL::to('admin') }}" class="nav-link">Admin Dashboard</a></li>

                    @endif
                </ul>
            </div>
        </nav>
        <!-- Nav bar End -->
    </div>
</header>

<!-- //Header End -->

<!-- slider / breadcrumbs section -->

{{-- breadcrumb --}}

    <div class="breadcum">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('guest') }}"> <i class="livicon icon3 icon4" data-name="home" data-size="18" data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i>Sistem Permohonan Toner Online
                            </a>
                        </li>
                    </ol>
                    <div class="float-right mt-1">
                        <img class="media-object" width="30" height="30" src="{{ asset('images/jataselangor.png') }}"
                             alt="image">
                        <i data-name="clip" data-size="20" data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i> Pejabat Daerah / Tanah Klang
                    </div>
                </div>
            </div>
        </div>
    </div>


<!-- yield (top) dh tak perlu sebab dah masukkan section top dlm ni terus -->

<!-- Content -->
@yield('content')

<!-- Footer Section Start -->

<footer>
    <div class=" col-12 copyright">
        <div class="media">
            <img class="media-object rounded-circle" src="{{ asset('images/logo kstore.png') }}"
                 alt="image">
            <div class="media-body">
                <p class="media-heading text-justify">Copyright &copy; k-Store PDTK, 2019.</p>
                <p class="text-right"><i>Version 1.2</i></p>
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
