<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>TicketApp</title>
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
    <link rel="stylesheet" media="screen" href="assets/vendor/tiny-slider/dist/tiny-slider.css" />

    <link rel="stylesheet" media="screen" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.min.css">
    <!-- Main Theme Styles + Bootstrap-->
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
        <!-- Page content-->
        <div class="container-fluid d-flex h-100 align-items-center justify-content-center py-4 py-sm-5">
            <div class="card card-light card-body" style="max-width: 940px"><a class="position-absolute top-0 end-0 nav-link-light fs-sm py-1 px-2 mt-3 me-3" href="#" onclick="window.history.go(-1); return false;"><i class="fi-arrow-long-left fs-base me-2"></i>Retour</a>
                <div class="row mx-0 align-items-center">
                    <div class="col-md-6 border-end-md border-light p-2 p-sm-5">
                        <h2 class="h3 text-light mb-4 mb-sm-5">Joignez TicketApp.<br>Ici vous pouvez:</h2>
                        <ul class="list-unstyled mb-4 mb-sm-5">
                            <li class="d-flex mb-2"><i class="fi-check-circle text-primary mt-1 me-2"></i><span class="text-light">Promouvoir vos evenements</span></li>
                            <li class="d-flex mb-2"><i class="fi-check-circle text-primary mt-1 me-2"></i><span class="text-light">Gerez avec facilite vos publications</span></li>
                            <li class="d-flex mb-0"><i class="fi-check-circle text-primary mt-1 me-2"></i><span class="text-light">Notez les evenements</span></li>
                        </ul><img class="d-block mx-auto" src="assets/img/signin-modal/signup-dark.svg" width="344" alt="Illustartion">
                        <div class="text-light mt-sm-4 pt-md-3"><span class="opacity-60">Vous avez deja un compte? </span><a class="text-light" href="index.php">Connectez-vous</a></div>
                    </div>
                    <div class="col-md-6 px-2 pt-2 pb-4 px-sm-5 pb-sm-5 pt-md-5">
                        <form class="needs-validation" id="registerForm" enctype="multipart/form-data">
                            <div class="mb-4">
                                <label class="form-label text-light" for="signup-name">Nom Complet</label>
                                <input class="form-control form-control-light" type="text" id="signup-name" placeholder="Entrez votre nom complet" required>
                            </div>
                            <div class="mb-4">
                                <label class="form-label text-light" for="signup-email">Adresse Email</label>
                                <input class="form-control form-control-light" type="email" id="signup-email" placeholder="Entrez votre email" required>
                            </div>
                            <div class="mb-4">
                                <label class="form-label text-light" for="signup-phone">Numero de Telephone</label>
                                <input class="form-control form-control-light" type="tel" id="signup-phone" placeholder="Entrez votre numero de telephone" required>
                            </div>
                            <div class="mb-4">
                                <label class="form-label text-light" for="signup-password">Mot de Passe <span class='fs-sm opacity-50'>min. 8 char</span></label>
                                <div class="password-toggle">
                                    <input class="form-control form-control-light" type="password" id="signup-password" minlength="8" required>
                                    <label class="password-toggle-btn" aria-label="Show/hide password">
                                        <input class="password-toggle-check" type="checkbox"><span class="password-toggle-indicator"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="mb-4">
                                <label class="form-label text-light" for="signup-password-confirm">Confirmez Mot de Passe</label>
                                <div class="password-toggle">
                                    <input class="form-control form-control-light" type="password" id="signup-password-confirm" minlength="8" required>
                                    <label class="password-toggle-btn" aria-label="Show/hide password">
                                        <input class="password-toggle-check" type="checkbox"><span class="password-toggle-indicator"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="mb-4">
                                <label class="form-label text-light" for="signup-photo">Votre Photo ou Logo(compagnie)</label>
                                <input class="form-control form-control-light" type="file" id="signup-photo" required>
                            </div>
                            <div class="form-check form-check-light mb-4">
                                <input class="form-check-input" type="checkbox" id="agree-to-terms" required>
                                <label class="form-check-label" for="agree-to-terms"><span class='opacity-70'>By joining, I agree to the</span> <a href='#' class='text-light'>Terms of use</a> <span class='opacity-70'>and</span> <a href='#' class='text-light'>Privacy policy</a></label>
                            </div>
                            <button class="btn btn-primary btn-lg w-100" type="submit" id="registerSubmit">Sign up </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>


    <!-- ======== End FeedBack Modal =====-->

    <!-- Back to top button--><a class="btn-scroll-top" href="#top" data-scroll><span class="btn-scroll-top-tooltip text-muted fs-sm me-2">Top</span><i class="btn-scroll-top-icon fi-chevron-up"> </i></a>
    <!-- Vendor scrits: js libraries and plugins-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/simplebar/dist/simplebar.min.js"></script>
    <script src="assets/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
    <script src="assets/vendor/tiny-slider/dist/min/tiny-slider.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.all.min.js"></script>

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

            $("#registerForm").submit(function(e) {
                e.preventDefault();

                $("#registerSubmit").html(`<div class="spinner-border text-dark" role="status">
                            <span class="visually-hidden">Loading...</span>
                            </div>`);

                if ($("#signup-password").val() !== $("#signup-password-confirm").val()) {
                    showMessage("error", "Les Mots de Passes ne correspondent!");
                    $("#registerSubmit").html("Creer Compte");

                } else {

                    var formData = new FormData(this);
                    formData.append("registerSubmit", "action");
                    formData.append("full_name", $("#signup-name").val());
                    formData.append("email", $("#signup-email").val());
                    formData.append("phone", $("#signup-phone").val());
                    formData.append("pwd", $("#signup-password").val());
                    formData.append("photo", $('#signup-photo').prop('files')[0]);

                    $.ajax({
                        type: 'POST',
                        url: 'php/users/register.inc.php',
                        data: formData,
                        contentType: false,
                        cache: false,
                        processData: false,


                        error: function(e) {
                            alert(JSON.stringify(e));
                        },
                        success: function(data) {

                            if (data != "Success!") {
                                showMessage("error", data);
                                $("#registerSubmit").html(`Creer Compte`);

                            } else {
                                showMessage("success", `Compte creer avec success!`);
                                $("#registerSubmit").html(`Creer Compte`);
                                window.location.href = "index.php";

                            }





                        }
                    });

                }



            });

        });
    </script>
</body>

</html>
</body>

</html>