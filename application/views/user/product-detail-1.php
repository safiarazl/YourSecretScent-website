<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>YSS - Product Detail</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

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
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">
            <h1 class="logo">
                <a href="<?= base_url('user'); ?>" style="text-decoration: none">Your Secret Scent<span>.</span></a>
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
    <!-- End Header -->

    <main id="main" data-aos="fade-up">
        <!-- ======= Breadcrumbs Section ======= -->
        <section class="breadcrumbs">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                    <h2>Your Idol</h2>
                    <ol>
                        <li><a href="<?= base_url('user'); ?>">Home</a></li>
                        <li><a href="<?= base_url('user/page_products'); ?>">Product</a></li>
                        <li>Your Idol</li>
                    </ol>
                </div>
            </div>
        </section>
        <!-- Breadcrumbs Section -->

        <!-- ======= Portfolio Details Section ======= -->
        <section id="portfolio-details" class="portfolio-details">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-2"></div>
                    <div class="col-lg-4">
                        <div class="portfolio-details-slider swiper">
                            <div class="swiper-wrapper align-items-center">
                                <div class="swiper-slide">
                                    <img src="<?= base_url('assets/'); ?>avatar/pageProducts/1.JPG" class="d-block w-100" alt="" />
                                </div>

                                <div class="swiper-slide">
                                    <img src="<?= base_url('assets/'); ?>avatar/pageProducts/2.JPG" class="d-block w-100" alt="" />
                                </div>

                                <div class="swiper-slide">
                                    <img src="<?= base_url('assets/'); ?>avatar/pageProducts/3.JPG" class="d-block w-100" alt="" />
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="portfolio-info">
                            <h2>Your Idol</h2>
                            <hr>
                            <p> <i>Product Description</i></p>
                            <p>
                                "Perfume formulated based on the scent of your favorite Idol. Just from the smell,
                                people can easily remember you, especially the same as your idol and be one of the
                                people who smells the same as your favorite idol!!!"<br><br>
                                <i class='bx bxs-magic-wand'></i> We use glass bottles 100ml & 250ml <br>
                            <table>
                                <tr>
                                    <td><i class='bx bx-dollar'></i> Price: </td>
                                    <td> Rp. 45.000 /100ml - bottle</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td> Rp. 50.000 /250ml - bottle</td>
                                </tr>
                            </table>
                            </p>
                        </div>
                    </div>
                    <div class="col-2"></div>
                </div>
            </div>
        </section>
        <!-- End Portfolio Details Section -->
    </main>
    <!-- End #main -->

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

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

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