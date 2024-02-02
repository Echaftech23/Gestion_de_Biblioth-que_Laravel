<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='dns-prefetch' href='http://bookpresstheme.com/' />
    <link rel='dns-prefetch' href='http://fonts.googleapis.com/' />
    <link rel="stylesheet" href="{{ asset('admin_assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin_assets/css/bootstrap-icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin_assets/css/magnific-popup.css') }}">
    <link href="{{ asset('admin_assets/css/fontawesome/fontawesome.css') }}" rel="stylesheet">
    <link href="{{ asset('admin_assets/css/fontawesome/brands.css') }}" rel="stylesheet">
    <link href="{{ asset('admin_assets/css/fontawesome/solid.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('admin_assets/css/style.css') }}">
    <title>Bookpress Home 2</title>
</head>

<body data-bs-spy="scroll" data-bs-target="#navbarSupportedContent">
    <!-- header -->
    <header id="navbar_top" class="index2-header-bg">
        <div class="container">
            <nav class="navbar navbar-expand-lg py-3 navbar-dark header-transparent">
                <a class="navbar-brand" href="{{ url('views') }}">
                    <img class="logo-white" src="{{ asset('admin_assets/img/logo-main-2.png') }}" alt="Site Logo" width="200">
                </a>
                <button class="navbar-toggler me-3 ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ url('views') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{ url('features') }}">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{ url('about') }}">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{ url('about') }}">Contact</a>
                        </li>
                    </ul>
                    <a class="btn btn-warning complementary-background rounded-pill text-white" href="register">Register Now</a>
                </div>
                <div class="header-seperator"></div>
            </nav>
        </div>
    </header>
    <!-- header end -->

    <!-- hero section -->
    <section id="section-hero" class="hero-section-2 py-100">
        <div class="container">
            <div class="row gx-5 d-flex justify-content-center align-items-center">
                <div class="col-md-6">
                    <p class="fs-5 fw-normal text-white">50% discount on early purchase</p>
                    <h2 class="my-3 text-white">Settle Your Daily life Issue in 1 <span class="complementary-color ps-0">Minute.</span></h2>
                    <p class="fs-6 fw-normal text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit, eius
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, eius mod tempor incididunt labore
                        mod tempor incididunt ut labore adipiscing.</p>
                    <div class="d-flex align-items-center gap-4 mt-5">
                        <a href="{{ url('views') }}" class="btn btn-light rounded-pill">More About us</a>
                        <span class="text-decoration-none play-2 video-play">
                            <div class="d-flex gap-2 align-items-center">
                                <i class="bi bi-play-fill fs-4"></i>
                                <div class="ms-1">
                                    <p class="play-text-md text-decoration-none">Watch Video</p>
                                    <p class=" play-text-sm text-decoration-underline">Duration 3:00 min</p>
                                </div>
                            </div>
                        </span>
                    </div>
                </div>
                <div class="col-md-6">
                    <img class="img-fluid" src="{{ asset('admin_assets/img/book-image-main.png') }}" alt="3 books">
                </div>
            </div>
        </div>
    </section>
    <!-- hero section end -->

    <!-- blog section -->
    <section id="section-blog" class="blog-section">
        <div class="container">
            <div class="row gx-5 gy-4">
                <div class="col-md-9 m-auto">
                    <div class="row row-cols-2 row-cols-md-3 gx-4 gy-4">
                        @foreach($book as $bk)
                        <div class="col">
                            <div class="bg-white p-3 bordered-shadow">
                                <img src="{{ asset('admin_assets/img/shop/book-mockup1.png') }}" alt="Book Image" class="img-fluid">
                                <p class="py-2">personality, science</p>
                                <a href="{{ route('views.show', $bk->id) }}" class="text-decoration-none">
                                    <h3>{{ (strlen($bk->title) > 18 ? substr($bk->title, 0, 18) . '...' : $bk->title) }}</h3>
                                </a>
                                <div class="pt-2">
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                </div>
                                <div class="pt-2">
                                    <span class="me-2">{{ $bk->author }}</span>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- pagination -->
            <div class="pagination-wrap my-7">
                <ul class="d-flex justify-content-center align-items-center gap-3 ps-0">
                    <li><a href="#">1</a></li>
                    <li class="active"><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                </ul>
            </div>
        </div>
    </section>
    <!-- blog section end -->

    <!-- Scroll Back to Top -->
    <a href="#header-banner-id" class="back-to-top"><i class="fa-solid fa-arrow-up"></i></a>
    <!-- End Scroll Back to Top -->

    <!-- footer section -->
    <footer id="footer" class="footer bg-dark pt-5">
        <div class="container">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 gx-5 gy-4">
                <div class="col">
                    <a href="#"><img src="{{ asset('admin_assets/img/logo-main-2.png') }}" alt="Footer logo" class="img-fluid mb-3"></a>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod incididunt psum dolor amet</p>
                    <ul class="d-flex gap-3 ps-0 pt-5 social-icons">
                        <li><a href="#" target="_blank" class="blue-bg"><i class="fa-brands fa-facebook-f"></i></a></li>
                        <li><a href="#" target="_blank" class="bg-primary"><i class="fa-brands fa-twitter"></i></a></li>
                        <li><a href="#" target="_blank" class="dark-blue-bg"><i class="fa-brands fa-vimeo-v"></i></a></li>
                        <li><a href="#" target="_blank" class="orange-bg"><i class="fa-brands fa-pinterest"></i></a></li>
                    </ul>
                </div>
                <div class="col">
                    <div class="footer-links">
                        <h4 class="mb-4">Important Links</h4>
                        <ul class="li-unstyled ps-0 footer-content hyphen-icon">
                            <li class="mb-3"><a href="#"><span class="ms-1">Website Development</span></a></li>
                            <li class="mb-3"><a href="#"><span class="ms-1">Web Applications</span></a></li>
                            <li class="mb-3"><a href="#"><span class="ms-1">Mobile Applications</span></a></li>
                            <li class="mb-3"><a href="#"><span class="ms-1">UI/UX Design</span></a></li>
                            <li class="mb-3"><a href="#"><span class="ms-1">Data Marketing</span></a></li>
                            <li class="mb-3"><a href="#"><span class="ms-1">Our Project</span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col">
                    <h4 class="mb-4">Contact</h4>
                    <ul class="li-unstyled ps-0 footer-content footer-contact">
                        <li class="mb-3"><a href="#"><i class="fa-solid fa-location-dot"></i> Wave, via habro dereinio 2b 52100 Arezo, italy</a></li>
                        <li class="mb-3"><a href="#"><i class="fa-solid fa-envelope"></i> yoursite@example.com</a></li>
                        <li class="mb-3"><a href="#"><i class="fa-solid fa-phone"></i> +65 8133 3116 (Toll Free)</a></li>
                        <li class="mb-3"><a href="#"><i class="fa-solid fa-fax"></i> +65 8133 3116</a></li>
                    </ul>
                </div>
                <div class="col">
                    <h4 class="mb-4">Subscription</h4>
                    <div class="position-relative">
                        <form action="#" method="post">
                            <input class="form-control rounded-pill" type="email" name="email" placeholder="Your Email">
                            <div class="submit">
                                <button class="btn btn-primary py-3 rounded-pill" type="submit"><span class="fa-solid fa-arrow-right-long"></span></button>
                            </div>
                        </form>
                    </div>
                    <p class="pt-30">Sign up for our latest news & articles. We won’t give you spam mails.</p>
                    <ul class="li-unstyled ps-0 d-md-flex align-items-center gap-3 pt-5">
                        <li class="mb-4 mb-lg-0"><a href="#"><img src="{{ asset('admin_assets/img/visa.png') }}" alt="VISA"></a></li>
                        <li class="mb-4 mb-lg-0"><a href="#"><img src="{{ asset('admin_assets/img/mastercard.png') }}" alt="Master Card"></a></li>
                        <li class="mb-4 mb-lg-0"><a href="#"><img src="{{ asset('admin_assets/img/american-express.png') }}" alt="American Express"></a></li>
                        <li class="mb-4 mb-lg-0"><a href="#"><img src="{{ asset('admin_assets/img/discover.png') }}" alt="Discover"></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="copyright mt-5">
            <p class="py-4">&copy; 2024 BookPress. All Rights Reserved</p>
        </div>
        <!-- Scroll Back to Top -->
        <a href="#section-hero" class="back-to-top"><i class="fa-solid fa-arrow-up"></i></a>
        <!-- End Scroll Back to Top -->
    </footer>
    <!-- footer section end -->

    <!-- load scripts -->
    <script src="{{ asset('admin_assets/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('admin_assets/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('admin_assets/js/jquery.counterup.js') }}"></script>
    <script src="{{ asset('admin_assets/js/bootstrap.bundle.min.js') }}"></script>
    <!-- magnafic popup -->
    <script src="{{ asset('admin_assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('admin_assets/js/scripts.js') }}"></script>

</body>

</html>
