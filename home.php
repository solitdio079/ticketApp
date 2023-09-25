<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Finder | Sign In Page (Dark)</title>
    <!-- SEO Meta Tags-->
    <meta name="description" content="Finder - Directory &amp; Listings Bootstrap Template">
    <meta name="keywords" content="bootstrap, business, directory, listings, e-commerce, car dealer, city guide, real estate, job board, user account, multipurpose, ui kit, html5, css3, javascript, gallery, slider, touch">
    <meta name="author" content="Createx Studio">
    <!-- Viewport-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon and Touch Icons-->
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">
    <link rel="mask-icon" color="#5bbad5" href="safari-pinned-tab.svg">
    <meta name="msapplication-TileColor" content="#766df4">
    <meta name="theme-color" content="#ffffff">
    <!-- Page loading styles-->
    <style>
        .page-loading {
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100%;
            -webkit-transition: all .4s .2s ease-in-out;
            transition: all .4s .2s ease-in-out;
            background-color: #1f1b2d;
            opacity: 0;
            visibility: hidden;
            z-index: 9999;
        }

        .page-loading.active {
            opacity: 1;
            visibility: visible;
        }

        .page-loading-inner {
            position: absolute;
            top: 50%;
            left: 0;
            width: 100%;
            text-align: center;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
            -webkit-transition: opacity .2s ease-in-out;
            transition: opacity .2s ease-in-out;
            opacity: 0;
        }

        .page-loading.active>.page-loading-inner {
            opacity: 1;
        }

        .page-loading-inner>span {
            display: block;
            font-size: 1rem;
            font-weight: normal;
            color: #fff;
            ;
        }

        .page-spinner {
            display: inline-block;
            width: 2.75rem;
            height: 2.75rem;
            margin-bottom: .75rem;
            vertical-align: text-bottom;
            border: .15em solid #9691a4;
            border-right-color: transparent;
            border-radius: 50%;
            -webkit-animation: spinner .75s linear infinite;
            animation: spinner .75s linear infinite;
        }

        @-webkit-keyframes spinner {
            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }

        @keyframes spinner {
            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }
    </style>
    <!-- Page loading scripts-->
    <script>
        (function() {
            window.onload = function() {
                var preloader = document.querySelector('.page-loading');
                preloader.classList.remove('active');
                setTimeout(function() {
                    preloader.remove();
                }, 2000);
            };
        })();
    </script>
    <!-- Vendor Styles-->
    <link rel="stylesheet" media="screen" href="assets/vendor/simplebar/dist/simplebar.min.css" />
    <!--Flatpickr-->
    <link rel="stylesheet" href="assets/vendor/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" href="assets/vendor/tiny-slider/dist/tiny-slider.css">
    <!-- Main Theme Styles + Bootstrap-->
    <link rel="stylesheet" media="screen" href="//cdn.datatables.net/1.13.3/css/jquery.dataTables.min.css">
    <link rel="stylesheet" media="screen" href="assets/css/theme.min.css">
</head>
<!-- Body-->

<body class="bg-dark">
    <!-- Page loading spinner-->
    <div class="page-loading active">
        <div class="page-loading-inner">
            <div class="page-spinner"></div><span>Loading...</span>
        </div>
    </div>
    <main class="page-wrapper">
        <!-- Navbar with user account dropdown -->
        <?php
        require_once "php/header.inc.php";
        ?>
        <div class="container pb-lg-4 mt-1 mb-sm-2">
            <div class="row">
                <!-- Fade transition + Layer animations -->
                <div class="tns-carousel-wrapper  tns-carousel-light">
                    <div class="tns-carousel-inner" data-carousel-options='{"mode": "gallery", "nav": false, "loop":true, "speed": 300, "autoplay": true}'>
                        <div>
                            <div class="bg-faded-primary text-center py-5 px-3">
                                <h3 class="from-top">From top to bottom</h3>
                                <p class="fs-lg mb-4 pb-2 from-bottom delay-1">From bottom to top</p>
                                <button class="btn btn-primary scale-down delay-2" type="button">Scale down</button>
                            </div>
                        </div>
                        <div>
                            <div class="bg-faded-success text-center py-5 px-3">
                                <h3 class="from-start">From left to right</h3>
                                <p class="fs-lg mb-4 pb-2 from-end">From right to left</p>
                                <button class="btn btn-success scale-up delay-2" type="button">Scale up</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row px-3">
                <form class="form-group form-group-light" id="homeSearchForm">
                    <select class="form-select" id="homeSearchType" required>
                        <option value="none">Type de Ticket</option>
                        <option value="0">Evenement</option>
                        <option value="1">Bus</option>
                    </select>
                    <div class="input-group m-2">
                        <input  id="homeSearchDate" class="form-control form-control-light date-picker rounded pe-5" type="text" placeholder="Choose date" data-datepicker-options='{"altInput": true, "altFormat": "F j, Y", "dateFormat": "Y-m-d"}' required>
                        <i class="fi-calendar position-absolute top-50 end-0 translate-middle-y me-3"></i>
                    </div>
                    <button type="submit" id="homeSearchBtn" class="btn btn-translucent-primary">Rechercher</button>
                </form>
            </div>
            <div class="row p-3 d-flex justify-content-center m-3" id="ticketsContainer">

            </div>
        </div>
    </main>
    <?php
    require_once "php/footer.inc.php";
    ?>
    <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/simplebar/dist/simplebar.min.js"></script>
    <script src="assets/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.all.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
    <script src="assets/vendor/flatpickr/dist/flatpickr.min.js"></script>
    <script src="assets/vendor/tiny-slider/dist/min/tiny-slider.js"></script>
    <script src="assets/vendor/cleave.js/dist/cleave.min.js"></script>

    <!-- Main theme script-->
    <script src="assets/js/theme.min.js"></script>
    <script type="module" src="js/home.js"></script>
</body>

</html>