<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>YSS - Team</title>
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
                <a href="<?= base_url('auth'); ?>">Your Secret Scent<span>.</span></a>
            </h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt=""></a>-->

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link" href="<?= base_url('auth'); ?>">Home</a></li>
                    <li><a class="nav-link" href="<?= base_url('auth/page_about'); ?>">About</a></li>
                    <li><a class="nav-link" href="<?= base_url('auth/page_milestone'); ?>">Milestone</a></li>
                    <li><a class="nav-link" href="<?= base_url('auth/page_products'); ?>">Product</a></li>
                    <li><a class="nav-link active" href="<?= base_url('auth/page_team'); ?>">Team</a></li>
                    <li><a class="nav-link" href="<?= base_url('auth/page_FAQ'); ?>">FAQ</a></li>
                    <li><a class="nav-link" href="<?= base_url('auth/login'); ?>">Login</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->
        </div>
    </header>
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container text-center" data-aos="zoom-out" data-aos-delay="100">
            <h1>Our<span> Hardworking Team</span></h1>
            <h2>Kami percaya bahwa kenangan terbaik dimulai
                dari aroma yang tak terlupakan. Jadi, wujudkan bersama kami!</h2>
        </div>
    </section>
    <!-- End Hero -->
    <!-- modal -->
    <!-- Direktur -->
    <div class="modal fade" id="modalDir" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Job Description</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Direktur <br>
                    Memimpin dan mengawasi sebuah perusahaan, mewakili perusahaan untuk melakukan kerja sama dengan
                    lembaga lain, serta mengurus dan mengelola perusahaan
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Sekretaris -->
    <div class="modal fade" id="modalSekre" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Job Description</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Sekretaris <br>
                    Membantu Kepala Badan dalam melaksanakan rumusan rencana program dan kegiatan. Serta
                    mengkoordinasikan dan monitoring, urusan administrasi umum dan kepegawaian, keuangan, perencanaan
                    serta evaluasi dan pelaporan.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Bendahara -->
    <div class="modal fade" id="modalBen" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Job Description</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Bendahara <br>
                    Membantu kepala atau ketua untuk melakukan pengelolaan keuangan beserta aktivitas terkait keuangan.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Manager Pemasaran -->
    <div class="modal fade" id="modalMpem" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Job Description</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Manager Pemasaran <br>
                    Membuat media promosi untuk mendorong bisnis, menguji peluang pemasaran baru, membangun hubungan dengan media, serta mengarahkan strategi media sosial.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Manager Produksi -->
    <div class="modal fade" id="modalMpro" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Job Description</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Manager Produksi <br>
                    Melakukan perencanaan dan pengorganisasian jadwal produksi, menilai proyek dan sumber daya persyaratan, memperkirakan, negosiasi dan menyetujui anggaran dan rentang waktu dengan klien dan manajer.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Manager Personalia -->
    <div class="modal fade" id="modalMper" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Job Description</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Manager Personalia <br>
                    Perencanaan, pengembangan, pembagian kompensasi, penginterprestasian, dan pemeliharaan tenaga kerja dengan maksud untuk membantu mencapai tujuan perusahaan, individu dan masyarakat
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- end modal -->
    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
        <div class="container" data-aos="fade-up">

            <div class="row">

                <div class="col-lg-2 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                    <div class="member">
                        <div data-bs-target="#modalDir" data-bs-toggle="modal">
                            <div class="member-img">
                                <img src="<?= base_url('assets/'); ?>avatar/Yusuf.jpg" class="img-fluid" alt="">
                                <div class="social">
                                    <a href="https://instagram.com/yusufmuliapratama?igshid=YmMyMTA2M2Y" target="_blank"><i class="bi bi-instagram"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Yusuf Mulia P</h4>
                                <span>21110250425</span>
                                <span>Direktur</span>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-2 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                    <div class="member">
                        <div data-bs-target="#modalSekre" data-bs-toggle="modal">
                            <div class="member-img">
                                <img src="<?= base_url('assets/'); ?>avatar/Syifa.JPG" class="img-fluid" alt="">
                                <div class="social">
                                    <a href="https://instagram.com/syifasaffanah_?igshid=YmMyMTA2M2Y" target="_blank"><i class="bi bi-instagram"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Syifa Saffanah S</h4>
                                <span>21110250478</span>
                                <span>Sekretaris</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                    <div class="member">
                        <div data-bs-target="#modalBen" data-bs-toggle="modal">
                            <div class="member-img">
                                <img src="<?= base_url('assets/'); ?>avatar/Pritha.JPG" class="img-fluid" alt="">
                                <div class="social">
                                    <a href="https://instagram.com/prithaeigii?igshid=YmMyMTA2M2Y" target="_blank"><i class="bi bi-instagram"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>RR. Pritha E. R</h4>
                                <span>21110250196</span>
                                <span>Bendahara</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
                    <div class="member">
                        <div data-bs-target="#modalMpem" data-bs-toggle="modal">
                            <div class="member-img">
                                <img src="<?= base_url('assets/'); ?>avatar/Suci.JPG" class="img-fluid" alt="">
                                <div class="social">
                                    <a href="https://instagram.com/wsuci_p?igshid=YmMyMTA2M2Y" target="_blank"><i class="bi bi-instagram"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Wahyuning Suci P</h4>
                                <span>21110250544</span>
                                <span>Manajer Pemasaran</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
                    <div class="member">
                        <div data-bs-target="#modalMpro" data-bs-toggle="modal">
                            <div class="member-img">
                                <img src="<?= base_url('assets/'); ?>avatar/Rika.JPG" class="img-fluid" alt="">
                                <div class="social">
                                    <a href="https://instagram.com/rikaariantii__?igshid=YmMyMTA2M2Y=" target="_blank"><i class="bi bi-instagram"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Rika Arianti</h4>
                                <span>21110250491</span>
                                <span>Manajer Produksi</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
                    <div class="member">
                        <div data-bs-target="#modalMper" data-bs-toggle="modal">
                            <div class="member-img">
                                <img src="<?= base_url('assets/'); ?>avatar/Yoga.JPG" class="img-fluid" alt="">
                                <div class="social">
                                    <a href="https://instagram.com/yogafrgiawan?igshid=YmMyMTA2M2Y" target="_blank"><i class="bi bi-instagram"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Yoga Firgiawan</h4>
                                <span>21110250614</span>
                                <span>Manager Personalia</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Team Section -->


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