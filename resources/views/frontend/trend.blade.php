<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Caraft</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- owl carousel style -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.2.4/assets/owl.carousel.min.css" />
    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/style.css') }}">
    <!-- Responsive-->
    <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css') }}">
    <!-- fevicon -->
    <link rel="icon" href="{{ asset('frontend/images/fevicon.png') }}" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/css/jquery.mCustomScrollbar.min.css') }}">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <!-- owl stylesheets -->
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
        media="screen">
    <style>
        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            transition: 0.3s;
            border-radius: 5px;
            overflow: hidden;
            margin: 20px auto;
            width: 350px;
        }

        .card:hover {
            box-shadow: 0 8px 16px 0 #e91e63;
        }

        .card-image {
            transition: .5s ease-in-out;
        }

        .card:hover .card-image {
            transform: translateY(-4px);
        }

        .card-image {
            width: 100%;
            height: "30";
            object-fit: cover;
        }

        .card-content {
            padding: 20px;
        }

        .card-title {
            margin: 0;
            font-size: 24px;
            font-weight: bold;
        }

        .card-text {
            margin: 10px 0;
            font-size: 14px;
            color: gray;
        }
    </style>
</head>

<body>
    <!--header section start -->
    <div class="header_section">
        <div class="container">
            <nav class="navbar navbar-dark bg-dark">
                <a class="logo" href="index.html"><img src="{{ asset('frontend/images/logo.png') }}"></a>
                <div class="search_section">
                    <ul>
                        <li><a href="{{ route('login') }}">Log In</a></li>
                        <li><a href="#"><img src="{{ asset('frontend/images/shopping-bag.png') }}"></a></li>
                        <li><a href="#"><img src="{{ asset('frontend/images/search-icon.png') }}"></a></li>
                    </ul>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample01"
                    aria-controls="navbarsExample01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarsExample01">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="category.html">Category</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="products.html">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="clients.html">Client</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!--banner section start -->
        <div class="banner_section layout_padding">
            <div id="my_slider" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="taital_main">
                                        <h4 class="banner_taital"><span class="font_size_90">50%</span> Discount Online
                                            Shop</h4>
                                        <p class="banner_text">There are many variations of passages of Lorem Ipsum
                                            available, but the majority have suffered alteration </p>
                                        <div class="book_bt"><a href="#">Shop Now</a></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div><img src="{{ asset('frontend/images/img-1.png') }}" class="image_1"></div>
                                </div>
                            </div>
                            <div class="button_main"><button class="all_text">All</button><input type="text"
                                    class="Enter_text" placeholder="Enter keywords" name=""><button
                                    class="search_text">Search</button></div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="taital_main">
                                        <h4 class="banner_taital"><span class="font_size_90">30%</span> Discount
                                            Online Shop</h4>
                                        <p class="banner_text">There are many variations of passages of Lorem Ipsum
                                            available, but the majority have suffered alteration </p>
                                        <div class="book_bt"><a href="#">Shop Now</a></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div><img src="{{ asset('frontend/images/img-1.png') }}" class="image_1"></div>
                                </div>
                            </div>
                            <div class="button_main"><button class="all_text">All</button><input type="text"
                                    class="Enter_text" placeholder="Enter keywords" name=""><button
                                    class="search_text">Search</button></div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="taital_main">
                                        <h4 class="banner_taital"><span class="font_size_90">70%</span> Discount
                                            Online Shop</h4>
                                        <p class="banner_text">There are many variations of passages of Lorem Ipsum
                                            available, but the majority have suffered alteration </p>
                                        <div class="book_bt"><a href="#">Shop Now</a></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div><img src="{{ asset('frontend/images/img-1.png') }}" class="image_1"></div>
                                </div>
                            </div>
                            <div class="button_main"><button class="all_text">All</button><input type="text"
                                    class="Enter_text" placeholder="Enter keywords" name=""><button
                                    class="search_text">Search</button></div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="prev">
                    <i class=""><img src="{{ asset('frontend/images/lefticon.png') }}"></i>
                </a>
                <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
                    <i class=""><img src="{{ asset('frontend/images/righticon.png') }}"></i>
                </a>
            </div>
        </div>
        <!--banner section end -->
    </div>
    <!--header section end -->
    <!--category section start -->
    <div class="container">

        <div class="category_section_2">
            <div>
                <h1 class="feature_taital">Trending</h1>
            </div>
            <div class="container text-center">
                <div class="row row-cols-2">
                    @foreach ($product as $item)
                        <div class="col">
                            <div class="card">
                                <img src="{{ asset($item->image) }}" alt="Card image" class="card-image"
                                    width="100" height="100">
                                <div class="card-content">
                                    <h1 class="bed_text">{{ $item->title }}</h1>
                                    <p class="card-text">{{ $item->small_desc }}</p>
                                    <p class="btn btn-primary">Old Price : {{ $item->price }}$</p><br>
                                    <p class="btn btn-primary">New Price : {{ $item->sell_price }}$</p>
                                    <div class="seemore_bt"><a href="#">see More</a></div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- beauty product section end -->
    <!-- footer section start -->
    <div class="footer_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <h4 class="information_text">Category</h4>
                    <p class="dummy_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim Lorem ipsum dolor sit amet,
                        consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Ut enim ad minim </p>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="information_main">
                        <h4 class="information_text">Useful Links</h4>
                        <p class="many_text">Contrary to popular belief, Lorem Ipsum is not simply random text. It </p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="information_main">
                        <h4 class="information_text">Contact Us</h4>
                        <p class="call_text"><a href="#">+01 1234567890</a></p>
                        <p class="call_text"><a href="#">+01 9876543210</a></p>
                        <p class="call_text"><a href="#">demo@gmail.com</a></p>
                        <div class="social_icon">
                            <ul>
                                <li><a href="#"><img src="images/fb-icon.png"></a></li>
                                <li><a href="#"><img src="images/twitter-icon.png"></a></li>
                                <li><a href="#"><img src="images/linkedin-icon.png"></a></li>
                                <li><a href="#"><img src="images/instagram-icon.png"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright_section">
                <h1 class="copyright_text">
                    Copyright 2020 All Right Reserved <a href="https://html.design"> Free Html Templates</a>
            </div>
        </div>
    </div>
    <!-- footer section end -->
    <!-- Javascript files-->
    <script src="{{ asset('frontend/js/jquery.min.js') }}"></script>
    <script src="{{ asset('frontend/js/popper.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery-3.0.0.min.js') }}"></script>
    <script src="{{ asset('frontend/js/plugin.js') }}"></script>
    <!-- sidebar -->
    <script src="{{ asset('frontend/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('frontend/js/custom.js') }}"></script>
    <!-- javascript -->
    <script src="{{ asset('frontend/js/owl.carousel.js') }}"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <script type="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2//2.0.0-beta.2.4/owl.carousel.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script>
        window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')
    </script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
</body>

</html>
