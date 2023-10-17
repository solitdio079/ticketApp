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
            <div class="row p-3 m-3">
               <div class="col-12">
                 <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                        <a href="home.php">Home</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                       Ticket Details
                        </li>
                        
                    </ol>
                 </nav>
               </div>
                <div class="col-md-6 col-sm-12">
                    <!-- Controls on hover + Nav (dost) inside (Defaults) -->
                    <div class="card text-white bg-dark border-0">
                    <div class="card-body border-0">
                            <div class="tns-carousel-wrapper tns-controls-static tns-nav-outside"  id="imgContainer">
                            <div class="tns-carousel-inner" data-carousel-options='{"loop": false, "gutter": 16}'>
                                <img src="assets/img/car-finder/blog/01.jpg" alt="Image">
                                <img src="assets/img/car-finder/blog/02.jpg" alt="Image">
                                <img src="assets/img/car-finder/blog/03.jpg" alt="Image">
                            </div>
                            </div>
                         </div>
                            <ul class="list-group">
                                <div class="d-flex flex-wrap  justify-content-between">
                                    <li class="list-group-item list-group-item-dark" id="nameItem">Name: </li>
                                    <li class="list-group-item list-group-item-dark" id="priceItem">Price: </li>
                                    <li class="list-group-item list-group-item-dark" id="dateItem">Date: </li>
                                </div>
                                 <li class="list-group-item list-group-item-dark" id="detailsItem">Details: </li>
                                <li class="list-group-item list-group-item-dark" id="companyItem">Company: </li>
                            </ul>

                </div>

                </div>
                <div class="col-md-6 col-sm-12">
                <div class="card text-white bg-dark border-0">
                <div class="card-body border-0">
                    <h4 class="card-title text-white">Infos de l'utilisateur</h4>
                    <p class="card-text fs-sm text-muted">Ci-dessous se trouve les informations que l'acheteur doit remplir</p>
                </div>
                  <ul class="list-group list-group-flush border-0">
                    <li class="list-group-item list-group-item-dark">
                        <select class="form-select form-select-light" id="passSelect">
                            <option value="0">Nombre de Tickets</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                        </select>
                     </li>
                     
                    <div class="d-none" id="pass1Infos">
                         <li class="list-group-item list-group-item-dark">Beneficiaire No1</li>
                        <li class="list-group-item list-group-item-dark">
                            <input class="form-control form-control-light" type="text" name="pass1FullName" id="pass1FullName" placeholder="Nom Complet du Beneficiaire">
                        </li>
                        <li class="list-group-item list-group-item-dark">
                            <input class="form-control form-control-light" type="text" name="pass1ID" id="pass1ID" placeholder="Numero d'Identite du Beneficiaire">
                        </li>
                    </div>
                   
                    <div class="d-none" id="pass2Infos">
                          <li class="list-group-item list-group-item-dark">Beneficiaire No2</li>
                        <li class="list-group-item list-group-item-dark">
                            <input class="form-control form-control-light" type="text" name="pass2FullName" id="pass2FullName" placeholder="Nom Complet du Beneficiaire">
                        </li>
                        <li class="list-group-item list-group-item-dark">
                            <input class="form-control form-control-light" type="text" name="pass2ID" id="pass2ID" placeholder="Numero d'Identite du Beneficiaire">
                        </li>
                    </div>
                     

                 </ul>
                <hr class="m-3">
                <?php
                if (isset($_SESSION["user"])) {


                    ?>
                                                                                                                                                         <ul class="list-group list-group-flush border-0">
                                                                                                                                                        <li class="list-group-item list-group-item-dark">
                                                                                                                                                            <input class="form-control form-control-light" type="email" name="buyerEmail" id="buyerEmail" value="<?php echo $_SESSION["user"]["email"]; ?>" disabled>
                                                                                                                                                        </li>
                                                                                                                                                        <li class="list-group-item list-group-item-dark">
                                                                                                                                                            <input class="form-control form-control-light" type="text" name="buyerFullName" id="buyerFullName" value="<?php echo $_SESSION["user"]["full_name"]; ?>" disabled>
                                                                                                                                                        </li>
                   
                                                                                                                                                    </ul>

                                                                                                                                            <?php
                } else {
                    ?>

                
                
                
                                                                                                                                         <ul class="list-group list-group-flush border-0">
                                                                                                                                                <li class="list-group-item list-group-item-dark">
                                                                                                                                                    <input class="form-control form-control-light" type="email" name="buyerEmail" id="buyerEmail" placeholder="Email de l'acheteur" required>
                                                                                                                                                </li>
                                                                                                                                                <li class="list-group-item list-group-item-dark">
                                                                                                                                                    <input class="form-control form-control-light" type="text" name="buyerFullName" id="buyerFullName" placeholder="Nom Complet de l'acheteur" required>
                                                                                                                                                </li>
                   
                                                                                                                                            </ul>
                <?php
                }
                ?>
                <div class="card-body border-0">
                    <h5 class="text-light">Options de payment:</h5><br>
                    <button class="btn btn-sm btn-info m-2" id="orangeMoneyBtn">
                       <img src="assets/img/orange/orange_money.png" width="80">
                    </button>
                   ou 
                     <button class="btn btn-accent bg-gradient  m-2" id="stripeBtn">
                       <img src="assets/img/orange/stripe_white.png" width="80">
                    </button>
                </div>
                </div>

                </div>
            </div>
         </div>
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
    <script type="module" src="js/details.js?v='<?php echo time(); ?>'"></script>
</body>

</html>