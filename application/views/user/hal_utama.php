<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WIK</title>
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#"><strong>What I Know</strong></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="d-flex flex-row-reverse collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="<?= base_url('user/page_wallet') ?>" class="nav-link">Your wallet</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?= base_url('user/log_out'); ?>">Log out</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- navbar ends -->

    <!-- content -->
    <div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Library</li>
        </ol>
    </nav>
        <h1 class="text-center" style="border-top: 5px solid black;"><strong>Mengenal dunia Kripto</strong></h1>
    </div>
    <div class="container d-flex">
        <div class="w-50 flex-fill">
            <h3 ><b>Cryptocurrency</b> atau Crypto adalah mata uang<br>digital yang dapat digunakan untuk membeli barang atau jasa.<br><br>Ini adalah metode pembayaran yang dapat ditukarkan dengan barang, jasa, atau keuntungan secara online.</h3>
            <form class="row g-3">
                <div class="col-auto">
                    <label for="inputEmail2" class="visually-hidden">Email</label>
                    <input type="email" class="form-control" id="inputEmail2" placeholder="Email / Phone number">
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn btn-primary mb-3">Subscribe</button>
                </div>
                <h3 class="mt-5">
                    Berikut adalah beberapa mata uang Crypto yang berada di pasaran
                </h3>
            </form>
        </div>
        <div class="w-50 flex-fill">
            <img src="https://indodax.com/homepage-assets/img/nina-nino.png" width="100%" alt="">
        </div>
    </div>
    <!-- content ends-->

    <!-- tabel content -->
    <div class="container">
        <h3>Market trend</h3>
        <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col" class="text-center">
                            NO
                        </th>
                        <th scope="col" class="text-center">
                            Market
                        </th>
                        <th scope="col" class="text-center">
                            Crypto
                        </th>
                        <th scope="col" class="text-center">
                            Harga Terakhir
                        </th>
                        <th scope="col" class="text-center">
                            Change
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($dataMarket as $DM) {
                    ?>
                        <tr>
                            <td class="text-center">
                                <?php echo $DM['id_market']; ?>
                            </td>
                            <td class="text-center">
                                <?php echo $DM['nama_market']; ?>
                            </td>
                            <td class="text-center">
                                <?php echo $DM['nama_crypto']; ?>
                            </td>
                            <td class="text-center">
                                <?php echo $DM['harga_crypto']; ?>
                            </td>
                            <td class="text-center">
                                <?php echo $DM['persentasi_market']; ?>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        <h3>Subscribe website kita agar dapat notifikasi terbaru dari kami</h3>
        <button type="submit" class="btn btn-primary mb-3">Subscribe</button>
    </div>
    <!-- tabel content end-->

    <!-- footer -->
    <div class="container">
        <!-- Footer -->
        <footer class="text-center text-lg-start bg-white text-muted">
            <!-- Section: Social media -->
            <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
                <!-- Left -->
                <div class="me-5 d-none d-lg-block">
                    <span>Get connected with us on social networks:</span>
                </div>
                <!-- Left -->

                <!-- Right -->
                <div>
                    <a href="" class="me-4 text-reset">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="" class="me-4 text-reset">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="" class="me-4 text-reset">
                        <i class="fab fa-google"></i>
                    </a>
                    <a href="" class="me-4 text-reset">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="" class="me-4 text-reset">
                        <i class="fab fa-linkedin"></i>
                    </a>
                    <a href="" class="me-4 text-reset">
                        <i class="fab fa-github"></i>
                    </a>
                </div>
                <!-- Right -->
            </section>
            <!-- Section: Social media -->

            <!-- Section: Links  -->
            <section class="">
                <div class="container text-center text-md-start mt-5">
                    <!-- Grid row -->
                    <div class="row mt-3">
                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                            <!-- Content -->
                            <h6 class="text-uppercase fw-bold mb-4">
                                <i class="fas fa-gem me-3"></i>What I Know
                            </h6>
                            <p>
                                Here you can use rows and columns to organize your footer content. Lorem ipsum
                                dolor sit amet, consectetur adipisicing elit.
                            </p>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold mb-4">
                                Products
                            </h6>
                            <p>
                                <a href="#!" class="text-reset">Angular</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">React</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">Vue</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">Laravel</a>
                            </p>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold mb-4">
                                Useful links
                            </h6>
                            <p>
                                <a href="#!" class="text-reset">Pricing</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">Settings</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">Orders</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">Help</a>
                            </p>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold mb-4">
                                Contact
                            </h6>
                            <p><i class="fas fa-home me-3"></i> New York, NY 10012, US</p>
                            <p>
                                <i class="fas fa-envelope me-3"></i>
                                info@example.com
                            </p>
                            <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
                            <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
                        </div>
                        <!-- Grid column -->
                    </div>
                    <!-- Grid row -->
                </div>
            </section>
            <!-- Section: Links  -->

            <!-- Copyright -->
            <div class="text-center p-4" style="background-color: rgba(255,255,255, 0.3);">
                © 2021 Copyright:
                <a class="text-reset fw-bold" href="https://mdbootstrap.com/">WIK.com</a>
            </div>
            <!-- Copyright -->
        </footer>
        <!-- Footer -->
    </div>
    <!-- footer end-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>