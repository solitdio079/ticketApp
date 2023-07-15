<?php
session_start();
if (isset($_SESSION["user"])) {
    header("Location: admin.php");
}
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
                        <h2 class="h3 text-light mb-4 mb-sm-5">Salut! <br>Bienvenue.</h2><img class="d-block mx-auto" src="assets/img/signin-modal/signin-dark.svg" width="344" alt="Illustartion">
                        <div class="text-light mt-4 mt-sm-5"><span class="opacity-60">vous n'avez pas de compte? </span><a class="text-light" href="register.php">Creer un compte</a></div>
                    </div>
                    <div class="col-md-6 px-2 pt-2 pb-4 px-sm-5 pb-sm-5 pt-md-5">

                        <form class="needs-validation" id="loginForm">
                            <div class="mb-4">
                                <label class="form-label text-light mb-2" for="signin-email">Email</label>
                                <input class="form-control form-control-light" type="email" id="signin-email" placeholder="Enter your email" required>
                            </div>
                            <div class="mb-4">
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <label class="form-label text-light mb-0" for="signin-password">Mot de Passe</label><a class="fs-sm text-light" href="#">Mot de Passe oublie?</a>
                                </div>
                                <div class="password-toggle">
                                    <input class="form-control form-control-light" type="password" id="signin-password" placeholder="Entrez votre mot de passe" required>
                                    <label class="password-toggle-btn" aria-label="Show/hide password">
                                        <input class="password-toggle-check" type="checkbox"><span class="password-toggle-indicator"></span>
                                    </label>
                                </div>
                            </div>
                            <button class="btn btn-primary btn-lg w-100" id="loginSubmit" type="submit">Connectez-vous</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- Back to top button--><a class="btn-scroll-top" href="#top" data-scroll><span class="btn-scroll-top-tooltip text-muted fs-sm me-2">Top</span><i class="btn-scroll-top-icon fi-chevron-up"> </i></a>

    <!--========  FeedBack Modal =========-->

    <!-- Modal markup -->
    <div class="modal" id="feedBack" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="feedBack-title">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="feedBack-body">
                    <p>Modal body text goes here.</p>
                </div>
                <div class="modal-footer" id="feedBack-footer">
                    <button type="button" class="btn btn-danger btn-sm" data-bs-dismiss="modal">Fermer</button>

                </div>
            </div>
        </div>
    </div>

    <!-- ======== End FeedBack Modal =====-->
    <!-- Vendor scrits: js libraries and plugins-->
    <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/simplebar/dist/simplebar.min.js"></script>
    <script src="assets/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.all.min.js"></script>
    <!-- Main theme script-->
    <script src="assets/js/theme.min.js"></script>

    <script>
        $(document).ready(function() {
            /*
            Messaging functions
            */

            //FeedBack shower
            function showMessage(type, message) {
                Swal.fire({
                    icon: type,
                    title: 'Reponse du server',
                    text: message,
                })

            }


            /**
             * Form  submit action 
             */

            $("#loginForm").submit(function(e) {
                e.preventDefault();
                $("#loginSubmit").html(`<div class="spinner-border text-dark" role="status">
                            <span class="visually-hidden">Loading...</span>
                            </div>`);


                $.post("php/users/login.inc.php", {
                    loginSubmit: "action",
                    email: $("#signin-email").val(),
                    pwd: $("#signin-password").val()
                }, function(data) {
                    if (data !== "Success!") {
                        showMessage("error", data);
                        $("#loginSubmit").html("Connectez-vous");
                    } else {
                        showMessage("success", "Vous etes connectez!");
                        window.location.href = "admin.php";
                    }
                });


            });




        });
    </script>
</body>

</html>