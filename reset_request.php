<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>TicketApp | Reset Request</title>
    <!-- SEO Meta Tags-->
    <meta name="description" content="TicketApp - Application &amp; Pour Acheter tous vos tickets">
    <meta name="keywords" content="ticket, mali ticket app, ticketApp, ticket app, ecommerce, mali online business, online africa">
    <meta name="author" content="bySolitdio">
    <!-- Viewport-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon and Touch Icons-->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon-16x16.png">
    <link rel="manifest" href="assets/site.webmanifest">
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
            <div class="card card-light card-body" style="max-width: 940px"><a class="position-absolute top-0 end-0 nav-link-light fs-sm py-1 px-2 mt-3 me-3" href="#" onclick="window.history.go(-1); return false;"><i class="fi-arrow-long-left fs-base me-2"></i>Go back</a>
                <div class="row mx-0 align-items-center">
                    <div class="col-md-6 border-end-md border-light p-2 p-sm-5">
                        <h2 class="h3 text-light mb-4 mb-sm-5">Mot de Passe oublie? <br>Recevez un lien de renouvellement.</h2><img class="d-block mx-auto" src="assets/img/signin-modal/signin-dark.svg" width="344" alt="Illustartion">
                        <div class="text-light mt-4 mt-sm-5"><span class="opacity-60">vous n'avez pas de compte? </span><a class="text-light" href="signup.php">Creer un compte</a></div>
                    </div>
                    <div class="col-md-6 px-2 pt-2 pb-4 px-sm-5 pb-sm-5 pt-md-5">

                        <form class="needs-validation" id="requestForm">
                            <div class="mb-4">
                                <label class="form-label text-light mb-2" for="request-email">Email</label>
                                <input class="form-control form-control-light" type="email" id="request-email" placeholder="Enter your email" required>
                            </div>

                            <button class="btn btn-primary btn-lg w-100" id="requestSubmit" type="submit">Envoyez</button>
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
    <!-- Main theme script-->
    <script src="assets/js/theme.min.js"></script>

    <script>
        $(document).ready(function() {
            /*
            Messaging functions
            */

            function showMessage(type, message) {
                if (type == "success") {
                    $("#feedBack-title").html("Message du Serveur");
                    $("#feedBack-body").html("<div class='d-flex flex-column justify-content-between text-center'> <i style='font-size:4rem;' class='fi-check-circle mb-2 text-success'></i><p>" + message + "</p></div>");
                } else if (type == "error") {
                    $("#feedBack-title").html("Message du Serveur");
                    $("#feedBack-body").html("<div class='d-flex flex-column justify-content-between text-center'> <i  style='font-size:4rem;'  class='fi-alert-circle  mb-2 text-danger'></i><p>" + message + "</p></div>");
                } else {
                    $("#feedBack-body").html("<div class='d-flex flex-column justify-content-between text-center'> <i  style='font-size:4rem;'  class='fi-alert-circle mb-2 text-danger'></i><p>Le type de message icorrect!</p></div>");
                }

                $("#feedBack").modal("toggle");
            }


            /**
             * Form  submit action 
             */

            $("#requestForm").submit(function(e) {
                e.preventDefault();
                $("#requestSubmit").html(`<div class="spinner-border text-dark" role="status">
                            <span class="visually-hidden">Loading...</span>
                            </div>`);


                $.post("php/reset_request.inc.php", {
                    resetRequestSubmit: "action",
                    email: $("#request-email").val(),

                }, function(data) {
                    if (data !== "Success") {
                        showMessage("error", data);
                        $("#requestSubmit").html("Envoyer");
                    } else {
                        showMessage("success", "Verifiez votre email pour le lien!");
                        $("#requestSubmit").html("Envoyer");
                        //window.location.href = "login.php";
                    }
                });


            });




        });
    </script>
</body>

</html>