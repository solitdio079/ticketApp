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
        <header class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a href="#" class="navbar-brand flex-shrink-0 me-2 me-xl-4">
                    <img class="d-block" src="assets/img/logo/logo-light.svg" width="116" alt="Finder">
                </a>
                <button type="button" class="navbar-toggler ms-auto" data-bs-toggle="collapse" data-bs-target="#navbarUserNav" aria-controls="navbarUserNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="dropdown order-lg-3">
                    <a href="#" class="d-inline-block py-1" data-bs-toggle="dropdown">
                        <img class="rounded-circle" src="assets/img/avatars/02.jpg" width="40" alt="User">
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <div class="d-flex align-items-start border-bottom px-3 py-1 mb-2" style="width: 16rem;">
                            <img class="rounded-circle" src="  assets/img/avatars/02.jpg" width="48" alt="User">
                            <div class="ps-2">
                                <h6 class="fs-base mb-0">Robert Fox</h6>
                                <div class="star-rating star-rating-sm">
                                    <i class="star-rating-icon fi-star-filled active"></i>
                                    <i class="star-rating-icon fi-star-filled active"></i>
                                    <i class="star-rating-icon fi-star-filled active"></i>
                                    <i class="star-rating-icon fi-star-filled active"></i>
                                    <i class="star-rating-icon fi-star-filled active"></i>
                                </div>
                                <div class="fs-xs py-2">(302) 555-0107<br>robert_fox@gmail.com</div>
                            </div>
                        </div>
                        <a href="#" class="dropdown-item">
                            <i class="fi-user opacity-60 me-2"></i>
                            Personal Info
                        </a>
                        <a href="#" class="dropdown-item">
                            <i class="fi-lock opacity-60 me-2"></i>
                            Password & Security
                        </a>
                        <a href="#" class="dropdown-item">
                            <i class="fi-list opacity-60 me-2"></i>
                            My Listings
                        </a>
                        <a href="#" class="dropdown-item">
                            <i class="fi-heart opacity-60 me-2"></i>
                            Wishlist
                        </a>
                        <a href="#" class="dropdown-item">
                            <i class="fi-star opacity-60 me-2"></i>
                            Reviews
                        </a>
                        <a href="#" class="dropdown-item">
                            <i class="fi-bell opacity-60 me-2"></i>
                            Notifications
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">Help</a>
                        <a href="#" class="dropdown-item">Sign Out</a>
                    </div>
                </div>
                <div class="collapse navbar-collapse order-lg-2" id="navbarUserNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a href="#" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Features</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">About</a>
                        </li>
                    </ul>
                </div>
            </div>
        </header>

        <div class="container pt-5 pb-lg-4 mt-1 mb-sm-2">
            <!-- Breadcrumb-->
            <nav class="mb-4 pt-md-3" aria-label="Breadcrumb">
                <ol class="breadcrumb breadcrumb-light">
                    <li class="breadcrumb-item"><a href="car-finder-home.html">Accueil</a></li>
                    <li class="breadcrumb-item active"><a href="#">Compte</a></li>

                </ol>
            </nav>
            <!-- Page content-->
            <div class="row">
                <!-- Sidebar-->
                <aside class="col-lg-4 col-md-5 pe-xl-4 mb-5">
                    <!-- Account nav-->
                    <div class="card card-body card-light border-0 shadow-sm pb-1 me-lg-1">
                        <div class="d-flex d-md-block d-lg-flex align-items-start pt-lg-2 mb-4"><img class="rounded-circle" src="<?php echo $_SESSION["user"]["photo"]; ?>" width="48" alt="<?php echo $_SESSION["user"]["full_name"]; ?>">
                            <div class="pt-md-2 pt-lg-0 ps-3 ps-md-0 ps-lg-3">
                                <h2 class="fs-lg text-light mb-0"><?php echo $_SESSION["user"]["full_name"]; ?></h2><span class="star-rating"><i class="star-rating-icon fi-star-filled active"></i><i class="star-rating-icon fi-star-filled active"></i><i class="star-rating-icon fi-star-filled active"></i><i class="star-rating-icon fi-star-filled active"></i><i class="star-rating-icon fi-star-filled active"></i></span>
                                <ul class="list-unstyled fs-sm mt-3 mb-0">
                                    <li><a class="nav-link-light fw-normal" href="tel:3025550107"><i class="fi-phone opacity-60 me-2"></i><?php echo $_SESSION["user"]["phone"]; ?></a></li>
                                    <li><a class="nav-link-light fw-normal" href="mailto:robert_fox@email.com"><i class="fi-mail opacity-60 me-2"></i><?php echo $_SESSION["user"]["email"]; ?></a></li>
                                </ul>
                            </div>


                        </div>

                        <a class="btn btn-outline-light d-block d-md-none w-100 mb-3" href="#account-nav" data-bs-toggle="collapse"><i class="fi-align-justify me-2"></i>Menu</a>
                        <div class="collapse d-md-block mt-3" id="account-nav">


                            <!-- Vertical tabs -->
                            <ul class="nav nav-tabs nav-tabs-light flex-column" role="tablist">
                                <li class="nav-item">
                                    <a class="card-nav-link active" href="#home1" data-bs-toggle="tab" role="tab">
                                        <i class="fi-home me-2"></i>
                                        Tableau de Bord
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="card-nav-link" href="#users" data-bs-toggle="tab" role="tab">
                                        <i class="fi-user me-2"></i>
                                        Utilisateurs
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="card-nav-link" href="#profile1" data-bs-toggle="tab" role="tab">
                                        <i class="fi-ticket me-2"></i>
                                        Tous vos Tickets
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="card-nav-link" href="#messages1" data-bs-toggle="tab" role="tab">
                                        <i class="fi-chat-left me-2"></i>
                                        Messages
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="card-nav-link" href="#settings1" data-bs-toggle="tab" role="tab">
                                        <i class="fi-settings me-2"></i>
                                        Parametres
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="card-nav-link" href="php/users/logout.inc.php">
                                        <i class="fi-logout me-2"></i>
                                        Se Deconnectez
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </aside>
                <!-- Content-->
                <!-- Tabs content -->
                <div class="col-lg-8 col-md-7 mb-5 tab-content">
                    <div class="tab-pane fade show active" id="home1" role="tabpanel">
                        <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui. Excepteur sint occaecat cupidatat non proident.</p>
                    </div>
                    <div class="tab-pane fade" id="users" role="tabpanel">
                        <!-- Light card on dark background: Horizontal -->

                        <!-- Dark table with striped rows -->
                        <div class="table-responsive">
                            <table class="table table-dark table-striped" id="usersTable">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Image</th>
                                        <th>Nom Complet</th>
                                        <th>Email</th>
                                        <th>Type</th>
                                        <th>Telephone</th>
                                        <th>Notifier</th>
                                        <th>Supprimer</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>



                        </div>

                    </div>
                    <div class="tab-pane fade" id="profile1" role="tabpanel">
                        <button class="btn btn-success" id="eventFormToggle">Ajouter un Ticket</button>
                        <!-- Light card on dark background: Horizontal -->

                        <form class="p-5" id="addEventForm" style="display:none;" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-sm-12 my-3 col-md-6">
                                    <input class="form-control form-control-light" id="name" name="name" type="text" placeholder="Nom de l'evenement" required>

                                </div>
                                <div class="col-sm-12 my-3 col-md-6">
                                    <input class="form-control form-control-light" id="place" name="place" type="text" placeholder="Lieu de l'evenement" required>
                                </div>
                                <div class="col-sm-12 my-3 col-md-6">
                                    <input class="form-control form-control-light" id="images" name="images[]" multiple type="file" required>
                                </div>
                                <div class="col-sm-12 my-3 col-md-6">
                                    <select class="form-select form-select-light" id="organizer" name="organizer" required>
                                        <option value="0">Choisir un organisateur</option>

                                    </select>

                                </div>
                                <div class="col-sm-12  my-3 col-md-6">
                                    <!-- Min date + default date - Today -->

                                    <div class="input-group">
                                        <input class="form-control form-control-light date-picker rounded pe-5" type="text" name="date" placeholder="Choisissez la date de l'evenement" data-datepicker-options='{"altInput": true, "altFormat": "F j, Y", "dateFormat": "Y-m-d", "defaultDate": "today", "minDate": "today"}' required>
                                        <i class="fi-calendar position-absolute top-50 end-0 translate-middle-y me-3"></i>
                                    </div>
                                </div>
                                <div class="col-sm-12 my-3 col-md-6">
                                    <input class="form-control form-control-light" type="text" id="hour" name="hour" data-format="time" placeholder="hh:mm:ss" required>

                                </div>
                                <div class="col-sm-12 my-3 col-md-6">
                                    <input class="form-control form-control-light" type="number" id="total" name="total" placeholder="Nombre de tickets" required>

                                </div>
                                <div class="col-sm-12 my-3 col-md-6">
                                    <input class="form-control form-control-light" step="0.01" type="number" id="price" name="price" placeholder="le price d'un ticket" required>

                                </div>
                                <div class="col-12 my-3">
                                    <button type="submit" id="addEventBtn" class="btn btn-primary">Ajouter</button>
                                </div>
                            </div>



                        </form>


                        <div class="container p-5">
                            <div class="row">

                            </div>
                            <div class="row" id="eventRow">
                                <div class="col-sm-12 col-md-6">
                                    <!-- Static content overlay -->
                                    <div class="card bg-size-cover bg-position-center border-0 overflow-hidden" style="background-image: url(assets/img/city-guide/home/upcoming-3.jpg);">
                                        <span class="img-gradient-overlay"></span>
                                        <div class="card-body content-overlay pb-0">
                                            <span class="badge bg-info fs-sm">New</span>
                                        </div>
                                        <div class="card-footer content-overlay border-0 pt-0 pb-4">
                                            <div class="d-sm-flex justify-content-between align-items-end pt-5 mt-2 mt-sm-5">
                                                <a href="#" class="text-decoration-none text-light pe-2">
                                                    <div class="fs-sm text-uppercase pt-2 mb-1">For sale</div>
                                                    <h3 class="h5 text-light mb-1">Duplex with Garage</h3>
                                                    <div class="fs-sm opacity-70">
                                                        <i class="fi-map-pin me-1"></i>
                                                        21 Pulaski Road Kings Park, NY 11754
                                                    </div>
                                                </a>
                                                <div class="btn-group ms-n2 ms-sm-0 mt-3">
                                                    <a href="#" class="btn btn-primary px-3">$200,410</a>
                                                    <button type="button" class="btn btn-primary btn-icon border-end-0 border-top-0 border-bottom-0 border-light fs-sm">
                                                        <i class="fi-heart"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-6">
                                    <!-- Static content overlay -->
                                    <div class="card bg-size-cover bg-position-center border-0 overflow-hidden" style="background-image: url(assets/img/city-guide/home/upcoming-2.jpg);">
                                        <span class="img-gradient-overlay"></span>
                                        <div class="card-body content-overlay pb-0">
                                            <span class="badge bg-info fs-sm">New</span>
                                        </div>
                                        <div class="card-footer content-overlay border-0 pt-0 pb-4">
                                            <div class="d-sm-flex justify-content-between align-items-end pt-5 mt-2 mt-sm-5">
                                                <a href="#" class="text-decoration-none text-light pe-2">
                                                    <div class="fs-sm text-uppercase pt-2 mb-1">For sale</div>
                                                    <h3 class="h5 text-light mb-1">Duplex with Garage</h3>
                                                    <div class="fs-sm opacity-70">
                                                        <i class="fi-map-pin me-1"></i>
                                                        21 Pulaski Road Kings Park, NY 11754
                                                    </div>
                                                </a>
                                                <div class="btn-group ms-n2 ms-sm-0 mt-3">
                                                    <a href="#" class="btn btn-primary px-3">$200,410</a>
                                                    <button type="button" class="btn btn-primary btn-icon border-end-0 border-top-0 border-bottom-0 border-light fs-sm">
                                                        <i class="fi-heart"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-6">
                                    <!-- Static content overlay -->
                                    <div class="card bg-size-cover bg-position-center border-0 overflow-hidden" style="background-image: url(assets/img/city-guide/home/upcoming-1.jpg);">
                                        <span class="img-gradient-overlay"></span>
                                        <div class="card-body content-overlay pb-0">
                                            <span class="badge bg-info fs-sm">New</span>
                                        </div>
                                        <div class="card-footer content-overlay border-0 pt-0 pb-4">
                                            <div class="d-sm-flex justify-content-between align-items-end pt-5 mt-2 mt-sm-5">
                                                <a href="#" class="text-decoration-none text-light pe-2">
                                                    <div class="fs-sm text-uppercase pt-2 mb-1">For sale</div>
                                                    <h3 class="h5 text-light mb-1">Duplex with Garage</h3>
                                                    <div class="fs-sm opacity-70">
                                                        <i class="fi-map-pin me-1"></i>
                                                        21 Pulaski Road Kings Park, NY 11754
                                                    </div>
                                                </a>
                                                <div class="btn-group ms-n2 ms-sm-0 mt-3">
                                                    <a href="#" class="btn btn-primary px-3">$200,410</a>
                                                    <button type="button" class="btn btn-primary btn-icon border-end-0 border-top-0 border-bottom-0 border-light fs-sm">
                                                        <i class="fi-heart"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                    </div>
                    <div class="tab-pane fade" id="messages1" role="tabpanel">
                        <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
                    </div>
                    <div class="tab-pane fade" id="settings1" role="tabpanel">
                        <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral, mustache readymade thundercats keffiyeh craft beer marfa ethical. Wolf salvia freegan.</p>
                    </div>



                </div>
            </div>
    </main>
    <!-- Footer-->
    <footer class="footer bg-faded-light">
        <div class="border-bottom border-light py-4">
            <div class="container d-sm-flex align-items-center justify-content-between"><a class="d-inline-block" href="real-estate-home-v1.html"><img src="assets/img/logo/logo-light.svg" width="116" alt="logo"></a>
                <div class="d-flex pt-3 pt-sm-0">
                    <div class="dropdown ms-n3">
                        <button class="btn btn-light btn-link btn-sm dropdown-toggle fw-normal py-2" type="button" data-bs-toggle="dropdown"><i class="fi-globe me-2"></i>Eng</button>
                        <div class="dropdown-menu dropdown-menu-dark w-100"><a class="dropdown-item" href="#">Deutsch</a><a class="dropdown-item" href="#">Français</a><a class="dropdown-item" href="#">Español</a></div>
                    </div>
                    <div class="dropdown">
                        <button class="btn btn-light btn-link btn-sm dropdown-toggle fw-normal py-2 pe-0" type="button" data-bs-toggle="dropdown"><i class="fi-map-pin me-2"></i>New York</button>
                        <div class="dropdown-menu dropdown-menu-dark dropdown-menu-sm-end" style="min-width: 7.5rem;"><a class="dropdown-item" href="#">Chicago</a><a class="dropdown-item" href="#">Dallas</a><a class="dropdown-item" href="#">Los Angeles</a><a class="dropdown-item" href="#">San Diego</a></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container d-lg-flex align-items-center justify-content-between fs-sm pb-3">
            <div class="d-flex flex-wrap justify-content-center order-lg-2 mb-3"><a class="nav-link nav-link-light fw-normal" href="#">Terms of use</a><a class="nav-link nav-link-light fw-normal" href="#">Privacy policy</a><a class="nav-link nav-link-light fw-normal" href="#">Accessibility statement</a><a class="nav-link nav-link-light fw-normal pe-0" href="#">Interest based ads</a></div>
            <p class="text-center text-lg-start order-lg-1 mb-lg-0"><span class="text-light opacity-50">&copy; All rights reserved. Made by </span><a class="nav-link-light fw-bold" href="https://createx.studio/" target="_blank" rel="noopener">Createx Studio</a></p>
        </div>
    </footer>
    <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/simplebar/dist/simplebar.min.js"></script>
    <script src="assets/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.all.min.js"></script>
    <script src="//cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
    <script src="assets/vendor/flatpickr/dist/flatpickr.min.js"></script>
    <script src="assets/vendor/cleave.js/dist/cleave.min.js"></script>
    <!-- Main theme script-->
    <script src="assets/js/theme.min.js"></script>
    <script>
        $(document).ready(function() {
            //FeedBack shower
            function showMessage(type, message) {
                Swal.fire({
                    icon: type,
                    title: 'Reponse du server',
                    text: message,
                })

            }

            // ========================== Get All Events ============== //
            function getAllEvents() {
                $.post("php/events/getAll.inc.php", {
                    getAllSubmit: "action"
                }, function(data) {
                    if (isJson(data)) {
                        localStorage.setItem('events', data);
                        showMessage("success", "Events are in the local storage")
                    }
                });
            }
            getAllEvents()


            //======================= Add Event Form Submit============
            // Form Toggle
            $("#eventFormToggle").click(function() {
                $("#addEventForm").toggle(500)
                if ($(this).hasClass('btn-success')) {
                    $(this).removeClass('btn-success');
                    $(this).addClass('btn-danger');
                    $(this).html('Cacher la forme')
                } else {
                    $(this).addClass('btn-success');
                    $(this).removeClass('btn-danger');
                    $(this).html('Ajouter un ticket')
                }




            });
            $("#addEventForm").submit(function(e) {
                e.preventDefault();
                $("#addEventBtn").html(`<div class="spinner-border" role="status">
  <span class="visually-hidden">Loading...</span>
</div>`);

                const formData = new FormData(this);
                formData.append("createSubmit", "action");

                $.ajax({
                    type: 'POST',
                    url: 'php/events/create.inc.php',
                    data: formData,
                    contentType: false,
                    cache: false,
                    processData: false,
                    error: function() {
                        showMessage("error", "An error occured");
                        $("#addEventBtn").html("Ajouter");
                    },
                    success: function(data, status) {
                        if (data !== "Success!") {
                            showMessage("error", data);
                            $("#addEventBtn").html("Ajouter");

                        } else {
                            showMessage("success", "Evenement ajoute avec succes!");
                            $("#addEventBtn").html("Ajouter");
                            $("#addEventForm")[0].reset();



                        }
                    }
                });
            });


            //================================================

            /*****
             * Getting all Users and initializing the datatable
             */

            let table = new $('#usersTable').DataTable();

            function getAllUsers() {
                $.post("php/users/getAllUsers.inc.php", {
                    getAllSubmit: "action"
                }, function(data) {
                    if (!isJson(data)) {
                        showMessage("error", data);

                    } else {
                        const users = JSON.parse(data);
                        const select = document.querySelector('#organizer');


                        users.filter(user => user.type > 0).forEach(user => {
                            const option = document.createElement('option');
                            option.value = user.id;
                            option.textContent = user.full_name;
                            select.appendChild(option);
                        });

                        table.destroy();

                        table = new $('#usersTable').DataTable({
                            data: users,
                            columns: [{
                                    data: 'id'
                                },
                                {
                                    data: 'photo',
                                    render: function(data, typpe, row) {
                                        return `<img src="${data}" width="60">`
                                    }
                                }, {
                                    data: 'full_name'
                                },
                                {
                                    data: 'email'
                                },
                                {
                                    data: "type",
                                    render: function(data, type, row) {
                                        return `<input value="${data}" type="number max="4" min="0" data-id="${row.id}" class="userType">`
                                    }

                                },
                                {
                                    data: 'phone'
                                },
                                {
                                    data: 'id',
                                    render: function(data, type, row) {
                                        return `<button type="button" data-id="${data}" class="btn btn-warning">Notifier</button>`
                                    }
                                },
                                {
                                    data: 'id',
                                    render: function(data, type, row) {
                                        return `<button type="button" data-id="${data}" class="btn btn-danger deleteUser">Supprimer</button>`
                                    }
                                },
                            ]
                        });

                        $(".userType").keypress(function(e) {
                            e.stopImmediatePropagation();
                            if (e.which === 13) {
                                const id = $(this).data("id");
                                const type = parseInt($(this).val());
                                $.post("php/users/changeType.inc.php", {
                                    changeTypeSubmit: "action",
                                    type,
                                    id
                                }, function(data) {
                                    if (data !== "Success!") {
                                        showMessage("error", data);
                                    } else {
                                        showMessage("success", "Type d'Utilisateur mis a jour!");
                                    }
                                })
                            }
                        });
                        $(".deleteUser").click(function(e) {
                            e.stopPropagation();
                            const id = $(this).data("id");
                            $.post("php/users/deleteUser.inc.php", {
                                deleteUserSubmit: "action",
                                id
                            }, function(data) {
                                if (data !== "Success!") {
                                    showMessage("error", data);
                                } else {
                                    showMessage("success", "Utilisateur supprimer avec succes");
                                    setTimeout(getAllUsers(), 3000);

                                }
                            })
                        });


                    }

                })
            }
            getAllUsers()

            // function to check parsability of string

            function isJson(item) {
                item = typeof item !== "string" ?
                    JSON.stringify(item) :
                    item;

                try {
                    item = JSON.parse(item);
                } catch (e) {
                    return false;
                }

                if (typeof item === "object" && item !== null) {
                    return true;
                }

                return false;
            }
        });
    </script>
</body>

</html>