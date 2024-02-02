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
    <title>Bookpress</title>
</head>

<body data-bs-spy="scroll" data-bs-target="#navbarSupportedContent">
    <!-- header -->
    <header id="navbar_top" class="bg-white">
        <div class="container">
            <nav class="navbar navbar-expand-lg py-3">
                <a class="navbar-brand" href="{{ url('views') }}">
                    <img src="{{ asset('admin_assets/img/logo.png') }}" alt="Site Logo" width="200">
                </a>
                <button class="navbar-toggler me-3 ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                        <li class="nav-item text-black">
                            <a class="nav-link" aria-current="page" href="{{ url('views') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{ url('#') }}">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{ url('#') }}">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{ url('#') }}">Contact</a>
                        </li>
                    </ul>
                    <a class="btn btn-primary" href="#" target="_blank">Book now</a>
                </div>
                <div class="header-seperator"></div>
            </nav>
        </div>
    </header>
    <!-- header end -->

    <!-- header banner -->
    <section class="header-banner bookpress-parallax" id="header-banner-id">
        <div class="container d-flex justify-content-between align-items-center text-white">
            <div class="overlay-out">
                <h1 class="banner-title">Products</h1>
                <p class="text-white"><a href="index.html" class="text-decoration-none text-white">Home</a> /
                    <a href="product-single.html" class="text-decoration-none text-white">Product</a>
                </p>
            </div>
            <img src="{{ asset('admin_assets/img/banner-image.png') }}" class="img-fluid" alt="Books">
            <div class="parallax start-0 top-0 w-100 h-100"></div>
        </div>
    </section><!-- header banner end -->

    <!-- product content -->
    <section class="product pt-100 pb-5">
        <div class="container">
            <div class="row border">
                <div class="col-md-5 ps-0">
                    <!-- product thumbnail -->
                    <div class="p-3 bg-light border-bottom border-end">
                        <img src="{{ asset('admin_assets/img/shop/product-image.png') }}" class="img-fluid" alt="Book">
                    </div>

                    <!-- product gallery -->
                    <div class="row row-cols-3 gx-3 py-3 ps-3">
                        <div class="col">
                            <div>
                                <img src="{{ asset('admin_assets/img/shop/product-gallery-1.png') }}" class="img-fluid" alt="Book Gallery">
                            </div>
                        </div>
                        <div class="col">
                            <div>
                                <img src="{{ asset('admin_assets/img/shop/product-gallery-2.png') }}" class="img-fluid" alt="Book Gallery">
                            </div>
                        </div>
                        <div class="col">
                            <div>
                                <img src="{{ asset('admin_assets/img/shop/product-gallery-3.png') }}" class="img-fluid" alt="Book Gallery">
                            </div>
                        </div>
                    </div><!-- product gallery end-->
                </div>
                <div class="col-md-7">
                    <div class="p-3">
                        <div class="pb-3 border-bottom">
                            <p class="text-primary mb-2">Book Feature</p>
                            <h2 class="fs-2">{{ $book->title }}</h2>
                            <!-- product rating -->
                            <div class="pt-2">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-secondary"></i>
                                <span class="ps-3">(50 Reviews)</span>
                            </div>
                        </div>
                        <div>
                            <p class="pt-4">{{ $book->description }}</p>

                            <ul class="list-col-2 li-unstyled responsive-grid ps-0 mb-0 check-icon-sm pt-4">
                                <li class="mb-3">
                                    <i class="bi bi-check-lg"></i><span class="ms-2">Genre : {{ $book->genre }}</span>
                                </li>
                                <li class="mb-3">
                                    <i class="bi bi-check-lg"></i><span class="ms-2">In Stock <span class="text-primary">(only {{ $book->available_copies }} Copies Left)</span></span>
                                </li>
                                <li class="mb-3">
                                    <i class="bi bi-check-lg"></i><span class="ms-2">Publish Date : {{ $book->publication_year }}</span>
                                </li>
                            </ul>
                        </div>

                        <div class="d-flex justify-content-between align-items-center pe-lg-5 border-top border-bottom mt-4 py-3">
                            <div class="d-flex gap-3 pe-5 border-end">
                                <img src="{{ asset('admin_assets/img/shop/author.png') }}" class="img-fluid" alt="Author Image">
                                <div class="d-flex flex-column my-auto">
                                    <span class="fs-4">{{ $book->author }}</span>
                                    <span class="d-inline-block">Author & Writer</span>
                                </div>
                            </div>

                            <div class="ps-2">
                                <img src="{{ asset('admin_assets/img/shop/author-signature.png') }}" class="img-fluid" alt="Author Signature">
                            </div>
                        </div>

                        <!-- add to cart buttons -->
                        <div class="gap-4 py-30 border-bottom">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Book Now
                            </button>
                        </div>


                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ route('reservations.store') }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div>
                                                <div class="row mb-3">
                                                    <div class="col">
                                                        <input type="hidden" id="title" name="title" class="form-control" placeholder="Enter Book title" value="{{ $book->id }}" required>
                                                    </div>
                                                    <div class="col">
                                                        <input type="hidden" id="user_id" name="user_id" class="form-control" value="{{ Auth::id() }}" required>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col">
                                                        <label class="form-label text-dark" for="	reservation_date">Reservation Date</label>
                                                        <input type="date" id="reservation_date" name="reservation_date" class="form-control" required min="{{ now()->format('Y-m-d') }}">
                                                    </div>
                                                    <div class="col">
                                                        <label class="form-label text-dark" for="return_date">Return Date</label>
                                                        <input type="date" id="	return_date" name="return_date" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col">
                                                        <label class="form-label text-dark" for="description">Descriptoin</label>
                                                        <textarea rows="4" id="description" class="form-control" name="description" placeholder="Add Book Descriptoin"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product content end -->

    <!-- product specifications -->
    <section class="product-meta pb-100">
        <div class="container">
            <h3 class="fs-2">Product Specification & Summary</h3>
            <div class="pt-5">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="bg-light ps-3 pe-1 pt-3 pb-1 rounded-2">
                            <ul class="nav nav-pills mb-3 ps-4" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link py-3 px-5  active" id="pills-summary-tab" data-bs-toggle="pill" data-bs-target="#pills-summary" type="button" role="tab" aria-controls="pills-summary" aria-selected="true">Summary</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link py-3 px-5 " id="pills-specification-tab" data-bs-toggle="pill" data-bs-target="#pills-specification" type="button" role="tab" aria-controls="pills-specification" aria-selected="false">Specification</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link py-3 px-5 " id="pills-review-tab" data-bs-toggle="pill" data-bs-target="#pills-review" type="button" role="tab" aria-controls="pills-review" aria-selected="false">Reviews</button>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>

                <div class="tab-content mt-4" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-summary" role="tabpanel" aria-labelledby="pills-summary-tab" tabindex="0">
                        <div>
                            <table class="product-specifications">
                                <thead>
                                    <tr>
                                        <td class="meta">Title</td>
                                        <td class="specification">{{ $book->title }}</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="meta">Author</td>
                                        <td class="specification">{{ $book->author }}</td>
                                    </tr>
                                    <tr>
                                        <td class="meta">Genre</td>
                                        <td class="specification">{{ $book->genre }}</td>
                                    </tr>
                                    <tr>
                                        <td class="meta">Publication Year</td>
                                        <td class="specification">{{ $book->publication_year }}</td>
                                    </tr>
                                    <tr>
                                        <td class="meta">Total Copies</td>
                                        <td class="specification">{{ $book->total_copies }}</td>
                                    </tr>
                                    <tr>
                                        <td class="meta">Available Copies</td>
                                        <td class="specification">{{ $book->available_copies }}</td>
                                    </tr>
                                    <tr>
                                        <td class="meta">Language</td>
                                        <td class="specification">English, Arabic, French</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-specification" role="tabpanel" aria-labelledby="pills-specification-tab" tabindex="0">
                        <div>
                            <table class="product-specifications">
                                <thead>
                                    <tr>
                                        <td class="meta">Title</td>
                                        <td class="specification">{{ $book->title }}</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="meta">Format</td>
                                        <td class="specification">Ebook, Hard Copy</td>
                                    </tr>
                                    <tr>
                                        <td class="meta">Pages</td>
                                        <td class="specification">460</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="pills-review" role="tabpanel" aria-labelledby="pills-review-tab" tabindex="0">
                        <section class="review-section-3 pt-4">
                            <div class="row justify-content-center">
                                <div class="col-md-10">
                                    <div class="text-center process-title-2">
                                        <p class="mb-32 fs-5 fw-normal">Lorem ipsum dolor sit amet,
                                            consectetur
                                            adipiscing
                                            elit, eius Lorem ipsum dolor sit amet, consectetur
                                            adipiscing elit, eius mod
                                            tempor incididunt ut
                                            labore mod tempor incididunt ut laboretur adipiscing elit,
                                            eius Lorem ipsum
                                            dolor sit amet, consectetur
                                            adipiscing elit
                                        </p>
                                        <h3>Alexander Mason</h3>
                                        <p class="mb-32">(Owner, Charitro)</p>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- product specifications end-->

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
