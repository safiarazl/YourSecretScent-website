<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Favicons -->
    <link href="<?= base_url('assets/'); ?>avatar/YSS.PNG" rel="icon" />
    <link href="<?= base_url('assets/'); ?>avatar/YSS.PNG" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="<?= base_url('assets/'); ?>assets-pIndex/assets/vendor/aos/aos.css" rel="stylesheet" />
    <link href="<?= base_url('assets/'); ?>assets-pIndex/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?= base_url('assets/'); ?>assets-pIndex/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
    <link href="<?= base_url('assets/'); ?>assets-pIndex/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
    <link href="<?= base_url('assets/'); ?>assets-pIndex/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
    <link href="<?= base_url('assets/'); ?>assets-pIndex/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="<?= base_url('assets/'); ?>assets-pIndex/assets/css/style.css" rel="stylesheet" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>YSS - Products</title>
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="<?= base_url('assets/'); ?>assets-pProducts/css/styles.css" rel="stylesheet" />
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">
            <h1 class="logo">
                <a href="<?= base_url('user'); ?>" style="text-decoration: none;">Your Secret Scent<span>.</span></a>
            </h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt=""></a>-->

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link" href="<?= base_url('user'); ?>">Home</a></li>
                    <li><a class="nav-link" href="<?= base_url('user/page_about'); ?>">About</a></li>
                    <li><a class="nav-link" href="<?= base_url('user/page_milestone'); ?>">Milestone</a></li>
                    <li><a class="nav-link active" href="<?= base_url('user/page_products'); ?>">Product</a></li>
                    <li><a class="nav-link" href="<?= base_url('user/page_team'); ?>">Team</a></li>
                    <li><a class="nav-link" href="<?= base_url('user/page_FAQ'); ?>">FAQ</a></li>
                    <li><a class="nav-link" href="<?= base_url('user/log_out'); ?>">Log Out</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->
        </div>
    </header>
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container text-center" data-aos="zoom-out" data-aos-delay="100">
            <h1><span>Shop in</span> Style</h1>
            <h2>Kami percaya bahwa kenangan terbaik dimulai
                dari aroma yang tak terlupakan. Jadi, wujudkan bersama kami!</h2>
        </div>
    </section>
    <!-- End Hero -->
    <!-- Section-->
    <section class="py-5" data-aos="fade-up" data-aos-delay="200">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <!-- slider img -->
                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="<?= base_url('assets/'); ?>avatar/pageProducts/1.JPG" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="<?= base_url('assets/'); ?>avatar/pageProducts/2.JPG" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="<?= base_url('assets/'); ?>avatar/pageProducts/3.JPG" class="d-block w-100" alt="...">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                        <!-- end slider img -->
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Your Idol</h5>
                                <!-- Product price-->
                                <span>Rp. 45.000 - 50.000</span>
                                /Bottle
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="<?= base_url('user/page_productDetail'); ?>">View details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Sale badge-->
                        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale
                        </div>
                        <!-- Product image-->
                        <!-- slider img -->
                        <div id="carouselExampleIndicators2" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="<?= base_url('assets/'); ?>avatar/pageProducts/4.JPG" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="<?= base_url('assets/'); ?>avatar/pageProducts/5.JPG" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="<?= base_url('assets/'); ?>avatar/pageProducts/6.JPG" class="d-block w-100" alt="...">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                        <!-- end slider img -->
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Linen Spray</h5>
                                <!-- Product price-->
                                <span>Rp. 50.000</span>
                                /Bottle
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="<?= base_url('user/page_productDetail2'); ?>">View details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h3>Your Secret Scent<span>.</span></h3>
                        <p>
                            Jl Kemang Raya. Perum Jatiwaringin Mansion no. 65<br />
                            Kota Bekasi, Pondok Gede,<br />
                            JAWA BARAT ID, 17411 <br /><br />
                            <strong>Phone:</strong> +62 813 8512 8157<br />
                            <strong>Email:</strong> yssparfume@gmail.com<br />
                        </p>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Fragrance quiz</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="https://forms.gle/u5etZjUs5WCPGuP28" target="_blank">Quiz</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Social Networks</h4>
                        <p>We are available on various media platforms so you can easily find us. Contact now, or you'll
                            run out!</p>
                        <div class="social-links mt-3">
                            <a href="https://api.whatsapp.com/send/?phone=6281385128157&text&type=phone_number&app_absent=0" target="_blank" class="twitter"><i class="bx bxl-whatsapp"></i></a>
                            <a href="https://instagram.com/yssofficial__?igshid=YmMyMTA2M2Y=" target="_blank" class="instagram"><i class="bx bxl-instagram"></i></a>
                            <a href="https://mail.google.com/mail/?view=cm&fs=1&to=yssparfume@gmail.com&su=&body=" target="_blank" class="google-plus"><i class="bx bxl-gmail"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container py-4">
            <div class="copyright">
                &copy; Copyright <strong><span>Your Secret Scent</span></strong>. All Rights Reserved
            </div>
        </div>
        <div class="container py-4">
            25C6T Group-5, R.R Pritha E.R, Rika Arianti, Syifa Saffanah S, Wahyuning Suci P, Yoga Firgiawan, Yusuf Mulia
            Pratama
        </div>
    </footer>
    <!-- End Footer -->
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="<?= base_url('assets/'); ?>assets-pProducts/js/scripts.js"></script>

    <!-- Vendor JS Files -->
    <script src="<?= base_url('assets/'); ?>assets-pIndex/assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="<?= base_url('assets/'); ?>assets-pIndex/assets/vendor/aos/aos.js"></script>
    <script src="<?= base_url('assets/'); ?>assets-pIndex/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('assets/'); ?>assets-pIndex/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="<?= base_url('assets/'); ?>assets-pIndex/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?= base_url('assets/'); ?>assets-pIndex/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="<?= base_url('assets/'); ?>assets-pIndex/assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="<?= base_url('assets/'); ?>assets-pIndex/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="<?= base_url('assets/'); ?>assets-pIndex/assets/js/main.js"></script>
</body>

</html>