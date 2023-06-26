<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
        <?= $title; ?> | LIKEY
    </title>
    <link href="/sweetalert2.min.css" rel="stylesheet" type="text/css" />
    <!-- plugins:css -->
    <link rel="stylesheet" href="/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="/assets/css/style.css">
    <!-- <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- End layout styles -->
    <link rel="shortcut icon" href="/logo.png" />
    <style>
        @media (min-width: 768px) {
          .row-equal {
            display: flex;
            flex-wrap: wrap;
          }
          .col-equal {
            margin: auto;
            height: 100%;
          }
        }
    </style>
</head>

<body>
    <div class="container-scroller">
        <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo d-flex" href="/dashboard" style="align-items: center;">
                    <img src="/logo.png" alt="logo" style="width: 30px; height: 30px; margin-left: 20px; margin-right: 10px;" />
                    <h4 style="font-family: monospace; font-weight: bold; margin: auto; margin-left: 0; margin-right: 30px;">
                        LIKEY
                    </h4>
                </a>
                <a class="navbar-brand brand-logo-mini" href="/dashboard">
                    <img src="/logo.png" alt="logo" style="width: 30px; height: 30px;" />
                </a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-stretch">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="mdi mdi-menu"></span>
                </button>
                <div class="search-field d-none d-md-block">
                    <form class="d-flex align-items-center h-100" action="#">
                        <div class="input-group">
                            <div class="input-group-prepend bg-transparent">
                                <i class="input-group-text border-0 mdi mdi-magnify"></i>
                            </div>
                            <input type="text" class="form-control bg-transparent border-0" placeholder="Search projects">
                        </div>
                    </form>
                </div>
                <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item nav-profile dropdown">
                        <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                            <div class="nav-profile-img">
                                <img src="/assets/images/faces/face1.jpg" alt="image">
                                <span class="availability-status online"></span>
                            </div>
                            <div class="nav-profile-text">
                                <p class="mb-1 text-black">
                                    <b>
                                        <?= ucfirst(session()->get('username')); ?>
                                    </b>
                                </p>
                            </div>
                        </a>
                        <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                            <a class="dropdown-item" href="#">
                                <i class="mdi mdi-cached me-2 text-info"></i> Activity Log </a>
                            <a class="dropdown-item" href="/profile">
                                <i class="mdi mdi-account-convert me-2 text-success"></i> My Profile </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="/sign-out">
                                <i class="mdi mdi-logout me-2 text-primary"></i> Signout </a>
                        </div>
                    </li>
                    <li class="nav-item d-none d-lg-block full-screen-link">
                        <a class="nav-link">
                            <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
                        </a>
                    </li>
                    <!--<li class="nav-item dropdown">-->
                    <!--    <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">-->
                    <!--        <i class="mdi mdi-email-outline"></i>-->
                    <!--        <span class="count-symbol bg-warning"></span>-->
                    <!--    </a>-->
                    <!--    <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">-->
                    <!--        <h6 class="p-3 mb-0">Messages</h6>-->
                    <!--        <div class="dropdown-divider"></div>-->
                    <!--        <a class="dropdown-item preview-item">-->
                    <!--            <div class="preview-thumbnail">-->
                    <!--                <img src="/assets/images/faces/face4.jpg" alt="image" class="profile-pic">-->
                    <!--            </div>-->
                    <!--            <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">-->
                    <!--                <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Mark send you a message-->
                    <!--                </h6>-->
                    <!--                <p class="text-gray mb-0"> 1 Minutes ago </p>-->
                    <!--            </div>-->
                    <!--        </a>-->
                    <!--        <div class="dropdown-divider"></div>-->
                    <!--        <a class="dropdown-item preview-item">-->
                    <!--            <div class="preview-thumbnail">-->
                    <!--                <img src="/assets/images/faces/face2.jpg" alt="image" class="profile-pic">-->
                    <!--            </div>-->
                    <!--            <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">-->
                    <!--                <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Cregh send you a-->
                    <!--                    message</h6>-->
                    <!--                <p class="text-gray mb-0"> 15 Minutes ago </p>-->
                    <!--            </div>-->
                    <!--        </a>-->
                    <!--        <div class="dropdown-divider"></div>-->
                    <!--        <a class="dropdown-item preview-item">-->
                    <!--            <div class="preview-thumbnail">-->
                    <!--                <img src="/assets/images/faces/face3.jpg" alt="image" class="profile-pic">-->
                    <!--            </div>-->
                    <!--            <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">-->
                    <!--                <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Profile picture updated-->
                    <!--                </h6>-->
                    <!--                <p class="text-gray mb-0"> 18 Minutes ago </p>-->
                    <!--            </div>-->
                    <!--        </a>-->
                    <!--        <div class="dropdown-divider"></div>-->
                    <!--        <h6 class="p-3 mb-0 text-center">4 new messages</h6>-->
                    <!--    </div>-->
                    <!--</li>-->
                    <!--<li class="nav-item dropdown">-->
                    <!--    <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-bs-toggle="dropdown">-->
                    <!--        <i class="mdi mdi-bell-outline"></i>-->
                    <!--        <span class="count-symbol bg-danger"></span>-->
                    <!--    </a>-->
                    <!--    <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">-->
                    <!--        <h6 class="p-3 mb-0">Notifications</h6>-->
                    <!--        <div class="dropdown-divider"></div>-->
                    <!--        <a class="dropdown-item preview-item">-->
                    <!--            <div class="preview-thumbnail">-->
                    <!--                <div class="preview-icon bg-success">-->
                    <!--                    <i class="mdi mdi-calendar"></i>-->
                    <!--                </div>-->
                    <!--            </div>-->
                    <!--            <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">-->
                    <!--                <h6 class="preview-subject font-weight-normal mb-1">Event today</h6>-->
                    <!--                <p class="text-gray ellipsis mb-0"> Just a reminder that you have an event today-->
                    <!--                </p>-->
                    <!--            </div>-->
                    <!--        </a>-->
                    <!--        <div class="dropdown-divider"></div>-->
                    <!--        <a class="dropdown-item preview-item">-->
                    <!--            <div class="preview-thumbnail">-->
                    <!--                <div class="preview-icon bg-warning">-->
                    <!--                    <i class="mdi mdi-settings"></i>-->
                    <!--                </div>-->
                    <!--            </div>-->
                    <!--            <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">-->
                    <!--                <h6 class="preview-subject font-weight-normal mb-1">Settings</h6>-->
                    <!--                <p class="text-gray ellipsis mb-0"> Update dashboard </p>-->
                    <!--            </div>-->
                    <!--        </a>-->
                    <!--        <div class="dropdown-divider"></div>-->
                    <!--        <a class="dropdown-item preview-item">-->
                    <!--            <div class="preview-thumbnail">-->
                    <!--                <div class="preview-icon bg-info">-->
                    <!--                    <i class="mdi mdi-link-variant"></i>-->
                    <!--                </div>-->
                    <!--            </div>-->
                    <!--            <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">-->
                    <!--                <h6 class="preview-subject font-weight-normal mb-1">Launch Admin</h6>-->
                    <!--                <p class="text-gray ellipsis mb-0"> New admin wow! </p>-->
                    <!--            </div>-->
                    <!--        </a>-->
                    <!--        <div class="dropdown-divider"></div>-->
                    <!--        <h6 class="p-3 mb-0 text-center">See all notifications</h6>-->
                    <!--    </div>-->
                    <!--</li>-->
                    <li class="nav-item nav-logout d-none d-lg-block">
                        <a class="nav-link" href="/sign-out">
                            <i class="mdi mdi-power"></i>
                        </a>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                    <span class="mdi mdi-menu"></span>
                </button>
            </div>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <?= $this->include('layouts/sidebar') ?>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <?= $this->renderSection('content') ?>
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <footer class="footer">
                    <div class="container-fluid d-flex justify-content-between">
                        <span class="text-dark d-block text-center text-sm-start d-sm-inline-block">Copyright ©
                            thelikey.com
                            <?= date('Y'); ?>
                        </span>
                        <!-- <span class="float-none float-sm-end mt-1 mt-sm-0 text-end"> By <a
                                href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap
                                admin template</a> from Bootstrapdash.com</span> -->
                    </div>
                </footer>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="/assets/vendors/chart.js/Chart.min.js"></script>
    <script src="/assets/js/jquery.cookie.js" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="/assets/js/off-canvas.js"></script>
    <script src="/assets/js/hoverable-collapse.js"></script>
    <script src="/assets/js/misc.js"></script>
<script src="/sweetalert2.min.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="/assets/js/dashboard.js"></script>
    <script src="/assets/js/todolist.js"></script>
    <!-- End custom js for this page -->
    <style>
        .nav-logout:hover {
            color: red;
        }
    </style>
</body>

</html>