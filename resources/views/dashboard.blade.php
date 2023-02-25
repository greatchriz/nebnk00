<!doctype html>
<html lang="en">


    <!-- Mirrored from finapp.bragherstudio.com/view22/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 19 Feb 2023 05:07:01 GMT -->
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport"
            content="width=device-width, initial-scale=1, minimum-scale=1,
            maximum-scale=1, viewport-fit=cover" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="apple-mobile-web-app-status-bar-style"
            content="black-translucent">
        <meta name="theme-color" content="#000000">
        <title>Finapp</title>
        <meta name="description" content="Finapp HTML Mobile Template">
        <meta name="keywords"
            content="bootstrap, wallet, banking, fintech mobile template,
            cordova, phonegap, mobile, html, responsive" />
        <link rel="icon" type="image/png" href="assets/img/favicon.png"
            sizes="32x32">
        <link rel="apple-touch-icon" sizes="180x180"
            href="assets/img/icon/192x192.png">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="manifest" href="__manifest.json">
    </head>

    <body>

        <!-- loader -->

        <!-- * loader -->

        <!-- App Header -->
        @include('layouts.top');
        <!-- * App Header -->


        <!-- App Capsule -->
        <div id="appCapsule">

            <!-- Wallet Card -->
            <x-wallet-card :user="$user"/>

            <!-- Wallet Card -->

            <!-- Deposit Action Sheet -->
            <div class="modal fade action-sheet" id="depositActionSheet"
                tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Add Balance</h5>
                        </div>
                        <div class="modal-body">
                            <div class="action-sheet-content">
                                <form>
                                    <div class="form-group basic">
                                        <div class="input-wrapper">
                                            <label class="label" for="account1">From</label>
                                            <select class="form-control
                                                custom-select" id="account1">
                                                <option value="0">Savings (***
                                                    5019)</option>
                                                <option value="1">Investment
                                                    (*** 6212)</option>
                                                <option value="2">Mortgage (***
                                                    5021)</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group basic">
                                        <label class="label">Enter Amount</label>
                                        <div class="input-group mb-2">
                                            <span class="input-group-text"
                                                id="basic-addona1">$</span>
                                            <input type="text"
                                                class="form-control"
                                                placeholder="Enter an amount"
                                                value="100">
                                        </div>
                                    </div>


                                    <div class="form-group basic">
                                        <button type="button" class="btn
                                            btn-primary btn-block btn-lg"
                                            data-bs-dismiss="modal">Deposit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- * Deposit Action Sheet -->

            <!-- Withdraw Action Sheet -->
            <div class="modal fade action-sheet" id="withdrawActionSheet"
                tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Withdraw Money</h5>
                        </div>
                        <div class="modal-body">
                            <div class="action-sheet-content">
                                <form>
                                    <div class="form-group basic">
                                        <div class="input-wrapper">
                                            <label class="label"
                                                for="account2d">From</label>
                                            <select class="form-control
                                                custom-select" id="account2d">
                                                <option value="0">Savings (***
                                                    5019)</option>
                                                <option value="1">Investment
                                                    (*** 6212)</option>
                                                <option value="2">Mortgage (***
                                                    5021)</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group basic">
                                        <div class="input-wrapper">
                                            <label class="label" for="text11d">To</label>
                                            <input type="email"
                                                class="form-control"
                                                id="text11d" placeholder="Enter
                                                IBAN">
                                            <i class="clear-input">
                                                <ion-icon name="close-circle"></ion-icon>
                                            </i>
                                        </div>
                                    </div>

                                    <div class="form-group basic">
                                        <label class="label">Enter Amount</label>
                                        <div class="input-group mb-2">
                                            <span class="input-group-text"
                                                id="basic-addonb1">$</span>
                                            <input type="text"
                                                class="form-control"
                                                placeholder="Enter an amount"
                                                value="100">
                                        </div>
                                    </div>

                                    <div class="form-group basic">
                                        <button type="button" class="btn
                                            btn-primary btn-block btn-lg"
                                            data-bs-dismiss="modal">Withdraw</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- * Withdraw Action Sheet -->

            <!-- Send Action Sheet -->
            <div class="modal fade action-sheet" id="sendActionSheet"
                tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Send Money</h5>
                        </div>
                        <div class="modal-body">
                            <div class="action-sheet-content">
                                <form>
                                    <div class="form-group basic">
                                        <div class="input-wrapper">
                                            <label class="label" for="account2">From</label>
                                            <select class="form-control
                                                custom-select" id="account2">
                                                <option value="0">Savings (***
                                                    5019)</option>
                                                <option value="1">Investment
                                                    (*** 6212)</option>
                                                <option value="2">Mortgage (***
                                                    5021)</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group basic">
                                        <div class="input-wrapper">
                                            <label class="label" for="text11">To</label>
                                            <input type="email"
                                                class="form-control" id="text11"
                                                placeholder="Enter bank ID">
                                            <i class="clear-input">
                                                <ion-icon name="close-circle"></ion-icon>
                                            </i>
                                        </div>
                                    </div>

                                    <div class="form-group basic">
                                        <label class="label">Enter Amount</label>
                                        <div class="input-group mb-2">
                                            <span class="input-group-text"
                                                id="basic-addon1">$</span>
                                            <input type="text"
                                                class="form-control"
                                                placeholder="Enter an amount"
                                                value="100">
                                        </div>
                                    </div>

                                    <div class="form-group basic">
                                        <button type="button" class="btn
                                            btn-primary btn-block btn-lg"
                                            data-bs-dismiss="modal">Send</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- * Send Action Sheet -->

            <!-- Exchange Action Sheet -->
            <div class="modal fade action-sheet" id="exchangeActionSheet"
                tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Exchange Money</h5>
                        </div>
                        <div class="modal-body">
                            <div class="action-sheet-content">
                                <form>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group basic">
                                                <div class="input-wrapper">
                                                    <label class="label"
                                                        for="currency1">From</label>
                                                    <select class="form-control
                                                        custom-select"
                                                        id="currency1">
                                                        <option value="1">EUR</option>
                                                        <option value="2">USD</option>
                                                        <option value="3">AUD</option>
                                                        <option value="4">CAD</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group basic">
                                                <div class="input-wrapper">
                                                    <label class="label"
                                                        for="currency2">To</label>
                                                    <select class="form-control
                                                        custom-select"
                                                        id="currency2">
                                                        <option value="1">USD</option>
                                                        <option value="1">EUR</option>
                                                        <option value="2">AUD</option>
                                                        <option value="3">CAD</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group basic">
                                        <label class="label">Enter Amount</label>
                                        <div class="input-group mb-2">
                                            <span class="input-group-text"
                                                id="basic-addon2">$</span>
                                            <input type="text"
                                                class="form-control"
                                                placeholder="Enter an amount"
                                                value="100">
                                        </div>
                                    </div>



                                    <div class="form-group basic">
                                        <button type="button" class="btn
                                            btn-primary btn-block btn-lg"
                                            data-bs-dismiss="modal">Exchange</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- * Exchange Action Sheet -->

            <!-- Stats -->
            <div class="section">
                <div class="row mt-2">
                    <div class="col-6">
                        <div class="stat-box">
                            <div class="title">Income</div>
                            <div class="value text-success">$ 552.95</div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="stat-box">
                            <div class="title">Expenses</div>
                            <div class="value text-danger">$ 86.45</div>
                        </div>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-6">
                        <div class="stat-box">
                            <div class="title">Total Bills</div>
                            <div class="value">$ 53.25</div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="stat-box">
                            <div class="title">Savings</div>
                            <div class="value">$ 120.99</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- * Stats -->

            <!-- Transactions -->
            <div class="section mt-4">
                <div class="section-heading">
                    <h2 class="title">Transactions</h2>
                    <a href="app-transactions.html" class="link">View All</a>
                </div>
                <div class="transactions">
                    <!-- item -->
                    <a href="app-transaction-detail.html" class="item">
                        <div class="detail">
                            <img src="assets/img/sample/brand/1.jpg" alt="img"
                                class="image-block imaged w48">
                            <div>
                                <strong>Amazon</strong>
                                <p>Shopping</p>
                            </div>
                        </div>
                        <div class="right">
                            <div class="price text-danger"> - $ 150</div>
                        </div>
                    </a>
                    <!-- * item -->
                    <!-- item -->
                    <a href="app-transaction-detail.html" class="item">
                        <div class="detail">
                            <img src="assets/img/sample/brand/2.jpg" alt="img"
                                class="image-block imaged w48">
                            <div>
                                <strong>Apple</strong>
                                <p>Appstore Purchase</p>
                            </div>
                        </div>
                        <div class="right">
                            <div class="price text-danger">- $ 29</div>
                        </div>
                    </a>
                    <!-- * item -->
                    <!-- item -->
                    <a href="app-transaction-detail.html" class="item">
                        <div class="detail">
                            <img src="assets/img/sample/avatar/avatar3.jpg"
                                alt="img" class="image-block imaged w48">
                            <div>
                                <strong>Alex Ljung</strong>
                                <p>Transfer</p>
                            </div>
                        </div>
                        <div class="right">
                            <div class="price">+ $ 1,000</div>
                        </div>
                    </a>
                    <!-- * item -->
                    <!-- item -->
                    <a href="app-transaction-detail.html" class="item">
                        <div class="detail">
                            <img src="assets/img/sample/avatar/avatar4.jpg"
                                alt="img" class="image-block imaged w48">
                            <div>
                                <strong>Beatriz Brito</strong>
                                <p>Transfer</p>
                            </div>
                        </div>
                        <div class="right">
                            <div class="price text-danger">- $ 186</div>
                        </div>
                    </a>
                    <!-- * item -->
                </div>
            </div>
            <!-- * Transactions -->

            <!-- Saving Goals -->
            <div class="section mt-4">
                <div class="section-heading">
                    <h2 class="title">Saving Goals</h2>
                    <a href="app-savings.html" class="link">View All</a>
                </div>
                <div class="goals">
                    <!-- item -->
                    <div class="item">
                        <div class="in">
                            <div>
                                <h4>Gaming Console</h4>
                                <p>Gaming</p>
                            </div>
                            <div class="price">$ 499</div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar"
                                style="width: 85%;" aria-valuenow="85"
                                aria-valuemin="0" aria-valuemax="100">85%</div>
                        </div>
                    </div>
                    <!-- * item -->
                    <!-- item -->
                    <div class="item">
                        <div class="in">
                            <div>
                                <h4>New House</h4>
                                <p>Living</p>
                            </div>
                            <div class="price">$ 100,000</div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar"
                                style="width: 55%;" aria-valuenow="55"
                                aria-valuemin="0" aria-valuemax="100">55%</div>
                        </div>
                    </div>
                    <!-- * item -->
                    <!-- item -->
                    <div class="item">
                        <div class="in">
                            <div>
                                <h4>Sport Car</h4>
                                <p>Lifestyle</p>
                            </div>
                            <div class="price">$ 42,500</div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar"
                                style="width: 15%;" aria-valuenow="15"
                                aria-valuemin="0" aria-valuemax="100">15%</div>
                        </div>
                    </div>
                    <!-- * item -->
                </div>
            </div>
            <!-- * Saving Goals -->

            <!-- app footer -->
            <div class="appFooter">
                <div class="footer-title">
                    Copyright © Finapp 2021. All Rights Reserved.
                </div>
                Bootstrap 5 based mobile template.
            </div>
            <!-- * app footer -->

        </div>
        <!-- * App Capsule -->


        <!-- App Bottom Menu -->
        @include('layouts.menu');

        <!-- * App Bottom Menu -->

        <!-- App Sidebar -->
        @include('layouts.navigation');


        <!-- * App Sidebar -->



        <!-- iOS Add to Home Action Sheet -->
        <div class="modal inset fade action-sheet ios-add-to-home"
            id="ios-add-to-home-screen" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add to Home Screen</h5>
                        <a href="#" class="close-button"
                            data-bs-dismiss="modal">
                            <ion-icon name="close"></ion-icon>
                        </a>
                    </div>
                    <div class="modal-body">
                        <div class="action-sheet-content text-center">
                            <div class="mb-1"><img
                                    src="assets/img/icon/192x192.png"
                                    alt="image" class="imaged w64 mb-2">
                            </div>
                            <div>
                                Install <strong>Finapp</strong> on your iPhone's
                                home screen.
                            </div>
                            <div>
                                Tap <ion-icon name="share-outline"></ion-icon>
                                and Add to homescreen.
                            </div>
                            <div class="mt-2">
                                <button class="btn btn-primary btn-block"
                                    data-bs-dismiss="modal">CLOSE</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- * iOS Add to Home Action Sheet -->


        <!-- Android Add to Home Action Sheet -->
        <div class="modal inset fade action-sheet android-add-to-home"
            id="android-add-to-home-screen" tabindex="-1"
            role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add to Home Screen</h5>
                        <a href="#" class="close-button"
                            data-bs-dismiss="modal">
                            <ion-icon name="close"></ion-icon>
                        </a>
                    </div>
                    <div class="modal-body">
                        <div class="action-sheet-content text-center">
                            <div class="mb-1">
                                <img src="assets/img/icon/192x192.png"
                                    alt="image" class="imaged w64 mb-2">
                            </div>
                            <div>
                                Install <strong>Finapp</strong> on your
                                Android's home screen.
                            </div>
                            <div>
                                Tap <ion-icon name="ellipsis-vertical"></ion-icon>
                                and Add to homescreen.
                            </div>
                            <div class="mt-2">
                                <button class="btn btn-primary btn-block"
                                    data-bs-dismiss="modal">CLOSE</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- * Android Add to Home Action Sheet -->



        <div id="cookiesbox" class="offcanvas offcanvas-bottom cookies-box"
            tabindex="-1" data-bs-scroll="true"
            data-bs-backdrop="false">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title">We use cookies</h5>
            </div>
            <div class="offcanvas-body">
                <div>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Nulla non lacinia quam. Nulla facilisi.
                    <a href="#" class="text-secondary"><u>Learn more</u></a>
                </div>
                <div class="buttons">
                    <a href="#" class="btn btn-primary btn-block"
                        data-bs-dismiss="offcanvas">I understand</a>
                </div>
            </div>
        </div>

        <!-- ========= JS Files =========  -->
        <!-- Bootstrap -->
        <script src="assets/js/lib/bootstrap.bundle.min.js"></script>
        <!-- Ionicons -->
        <script type="module"
            src="../../unpkg.com/ionicons%405.5.2/dist/ionicons/ionicons.js"></script>
        <!-- Splide -->
        <script src="assets/js/plugins/splide/splide.min.js"></script>
        <!-- Base Js File -->


        <script>
        // Add to Home with 2 seconds delay.
        AddtoHome("2000", "once");
        </script>

        <script type="module"
        src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule
        src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </body>


    <!-- Mirrored from finapp.bragherstudio.com/view22/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 19 Feb 2023 05:07:01 GMT -->
</html>
