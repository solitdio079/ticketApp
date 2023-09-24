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
                 <img class="rounded-circle" src="<?php echo $_SESSION["user"]["photo"]; ?>" width="40" alt="User">
             </a>
             <div class="dropdown-menu dropdown-menu-end">
                 <div class="d-flex align-items-start border-bottom px-3 py-1 mb-2" style="width: 16rem;">
                     <img class="rounded-circle" src="<?php echo $_SESSION["user"]["photo"]; ?>" width="48" alt="User">
                     <div class="ps-2">
                         <h6 class="fs-base mb-0"><?php echo $_SESSION["user"]["full_name"]; ?></h6>
                         <div class="star-rating star-rating-sm">
                             <i class="star-rating-icon fi-star-filled active"></i>
                             <i class="star-rating-icon fi-star-filled active"></i>
                             <i class="star-rating-icon fi-star-filled active"></i>
                             <i class="star-rating-icon fi-star-filled active"></i>
                             <i class="star-rating-icon fi-star-filled active"></i>
                         </div>
                         <div class="fs-xs py-2"><?php echo $_SESSION["user"]["phone"]; ?><br><?php echo $_SESSION["user"]["email"]; ?></div>
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
                     <i class="fi-star opacity-60 me-2"></i>
                     Reviews
                 </a>
                 <a href="#" class="dropdown-item">
                     <i class="fi-bell opacity-60 me-2"></i>
                     Notifications
                 </a>
                 <div class="dropdown-divider"></div>
                 <a href="#" class="dropdown-item">Help</a>
                 <a href="php/users/logout.inc.php" class="dropdown-item">Sign Out</a>
             </div>
         </div>
         <div class="collapse navbar-collapse order-lg-2" id="navbarUserNav">
             <ul class="navbar-nav">
                 <li class="nav-item active">
                     <a href="home.php" class="nav-link">Accueil</a>
                 </li>
                 <li class="nav-item">
                     <a href="#" class="nav-link">Tickets</a>
                 </li>
                 <li class="nav-item">
                     <a href="#" class="nav-link">Compte</a>
                 </li>
                 <li class="nav-item">
                     <a href="#" class="nav-link">A propos</a>
                 </li>
             </ul>
         </div>
     </div>
 </header>