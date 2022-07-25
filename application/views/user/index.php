<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>YSS - HomePage</title>
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
    <link href="<?= base_url('assets/'); ?>assets-pIndex/assets/css/footer.css" rel="stylesheet" />
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">
            <h1 class="logo">
                <a href="<?= base_url('user'); ?>">Your Secret Scent<span>.</span></a>
            </h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt=""></a>-->

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link active" href="<?= base_url('user'); ?>">Home</a></li>
                    <li><a class="nav-link" href="<?= base_url('user/page_about'); ?>">About</a></li>
                    <li><a class="nav-link" href="<?= base_url('user/page_milestone'); ?>">Milestone</a></li>
                    <li><a class="nav-link" href="<?= base_url('user/page_products'); ?>">Product</a></li>
                    <li><a class="nav-link" href="<?= base_url('user/page_team'); ?>">Team</a></li>
                    <li><a class="nav-link" href="<?= base_url('user/page_FAQ'); ?>">FAQ</a></li>
                    <li><a class="nav-link" href="<?= base_url('auth/login'); ?>">Login</a></li>
                    <?php if ($teks['status'] == "Login") { ?>
                        <li><a class="nav-link" href="<?= base_url('user/log_out'); ?>">Log Out</a></li>
                    <?php
                    } else {?>
                        <li><a class="nav-link" href="<?= base_url('auth'); ?>">Login</a></li>
                    <?php } ?>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->
        </div>
    </header>
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container" data-aos="zoom-out" data-aos-delay="100">
            <h1>Hai! Terima Kasih banyak dan Selamat Datang di <span>Your Secret Scent</span></h1>
            <h2>Kami percaya bahwa kenangan terbaik dimulai dari aroma yang tak terlupakan. So, find your extraordinary freedom with your scent!</h2>
            <div class="d-flex">
                <a href="#about" class="btn-get-started">Get Started</a>
            </div>
        </div>
    </section>
    <!-- End Hero -->

    <main id="main">
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">
                <div class="row gx-0">
                    <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                        <div class="content">
                            <h3>Who We Are</h3>
                            <h2>YSS adalah parfum yang diracik dengan bahan-bahan berkualitas dan premium.
                            </h2>
                            <div class="text-center text-lg-start">
                                <a href="pages/about.html">
                                    <span>Read More</span>
                                    <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                        <img src="<?= base_url('assets/'); ?>assets-pIndex/assets/img/bawah.JPG" class="img-fluid" alt="" />
                    </div>
                </div>
            </div>
        </section>
        <!-- End About Section -->



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
                                <li><i class="bx bx-chevron-right"></i> <a href="https://forms.gle/u5etZjUs5WCPGuP28" target="_blank">Quiz</a>
                                </li>
                            </ul>
                        </div>

                        <div class="col-lg-3 col-md-6 footer-links">
                            <h4>Our Social Networks</h4>
                            <p>We are available on various media platforms so you can easily find us. Contact now, or
                                you'll run out!</p>
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
                25C6T Group-5, R.R Pritha E.R, Rika Arianti, Syifa Saffanah S, Wahyuning Suci P, Yoga Firgiawan, Yusuf Mulia Pratama
            </div>
        </footer>
        <!-- End Footer -->

        <div id="preloader"></div>
        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

        <!-- Vendor JS Files -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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