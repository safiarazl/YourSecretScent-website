<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WIK</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
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
                        <a class="nav-link active" aria-current="page" href="<?= base_url('user') ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url('user/log_out'); ?>" class="nav-link">Log out</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- navbar ends -->
    <div class="container">
        <div class="row mt-4" style="border: solid; background-color: #dcdcdc;">
            <div class="col-6">
                <form class="buy" method="POST" action="<?= base_url('user/tambahData'); ?>">
                    <h5><b>Buy some asset in here</b></h5>
                    <div class="teks">
                        <div class="input-group mb-3">
                            <sp class="input-group-text">Sum</sp`an>
                            <input id="sum" name="sum" type="text" class="form-control" placeholder="0" aria-label="Sum" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupSelect01">Coin</label>
                            <select class="form-select" id="coin" name="coin">
                                <option selected>Choose...</option>
                                <?php
                                $x = 0;
                                foreach ($dataMarket as $DM) {
                                    ++$x ?>
                                    <option value="<?php echo $DM['nama_market']; ?>"><?php echo $DM['nama_market']; ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="text-center pb-2">
                        <button type="submit" class="">Buy</button>
                    </div>
                </form>
            </div>
            <div class="col-6">
                <form class="sell" method="POST" action="<?= base_url('user/hapusData'); ?>">
                    <h5><b>Sell some asset in here</b></h5>
                    <div class="teks">
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupSelect01">Coin</label>
                            <select class="form-select" id="coin" name="coin">
                                <option selected>Choose...</option>
                                <?php
                                $x = 0;
                                foreach ($dataAsset as $DA) {
                                    ++$x ?>
                                    <option value="<?php echo $DA['nama_market']; ?>"><?php echo $DA['nama_market']; ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="text-center pb-2">
                        <button type="submit" class="">Sell</button>
                    </div>
                </form>
            </div>
            <div class="col-3"></div>
            <div class="col-6">
                <form class="buy" method="POST" action="<?= base_url('user/updateData'); ?>">
                    <h5><b>Convert your asset here</b></h5>
                    <div class="teks">
                        <div class="input-group mb-3">
                            <span class="input-group-text">From</span>
                            <select class="form-select" id="coin" name="coinBefore">
                                <option selected>Choose...</option>
                                <?php
                                $x = 0;
                                foreach ($dataAsset as $DA) {
                                    ++$x ?>
                                    <option value="<?php echo $DA['nama_market']; ?>"><?php echo $DA['nama_market']; ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupSelect01">To</label>
                            <select class="form-select" id="coin" name="coinAfter">
                                <option selected>Choose...</option>
                                <?php
                                $x = 0;
                                foreach ($dataMarket as $DM) {
                                    ++$x ?>
                                    <option value="<?php echo $DM['nama_market']; ?>"><?php echo $DM['nama_market']; ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text">Sum</span>
                            <input id="nilaiAsset" name="nilaiAsset" type="text" class="form-control" placeholder="0" aria-label="Sum" aria-describedby="basic-addon1">
                        </div>
                    </div>
                    <div class="text-center pb-2">
                        <button type="submit" class="">Convert</button>
                    </div>
                </form>
            </div>
            <div class="col-3"></div>
        </div>
        <h3>Your portofolio</h3>
        <h5>Wallet</h5>
        <div class="top row">
            <div class="col-10">
                <p>your API secret:</p>
                <input type="text" value="<?php echo $token ?>" readonly>
            </div>
            <div class="col-2">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1"><span class="material-icons">search</span></span>
                    <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                </div>
            </div>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col" class="text-center">
                        NO
                    </th>
                    <th scope="col" class="text-center">
                        Crypto
                    </th>
                    <th scope="col" class="text-center">
                        Nilai asset
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php
                $x = 0;
                foreach ($dataAsset as $DM) {
                    ++$x;
                ?>
                    <tr>
                        <td class="text-center">
                            <?php echo $x; ?>
                        </td>
                        <td class="text-center">
                            <?php echo $DM['nama_market']; ?>
                        </td>
                        <td class="text-center">
                            <?php echo $DM['nilai_asset']; ?>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
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