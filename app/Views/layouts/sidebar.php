<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <a href="/profile" class="nav-link">
                <div class="nav-profile-image">
                    <img src="<?= $user['display_picture']; ?>" alt="profile">
                    <span class="login-status online"></span>
                    <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                    <span class="font-weight-bold mb-2">
                        <?= ucfirst($user['username']); ?>
                    </span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
            </a>
        </li>


        <!-- dashboard  -->

        <li class="nav-item border-bottom">
            <a class="nav-link" href="/dashboard">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
            </a>
        </li>

        <!-- new promotion  -->

        <li class="nav-item">
            <a class="nav-link" href="/new_promotion">
                <span class="menu-title">New Promotion</span>
                <i class="mdi mdi-airplane-takeoff  menu-icon"></i>
            </a>
        </li>

        <!-- new task  -->

        <li class="nav-item border-bottom">
            <a class="nav-link" href="/new_task">
                <span class="menu-title">New Task</span>
                <i class="mdi mdi-plus menu-icon"></i>
            </a>
        </li>

        <!-- earn free credit  -->

        <li class="nav-item">
            <a class="nav-link" href="/earn_credits">
                <span class="menu-title">Earn free credits</span>
                <i class="mdi mdi-coin  menu-icon"></i>
            </a>
        </li>

        <!-- make money  -->

        <li class="nav-item border-bottom">
            <a class="nav-link" href="/make_money">
                <span class="menu-title">Make money</span>
                <i class="mdi mdi-coin  menu-icon"></i>
            </a>
        </li>

        <!-- transfer  -->

        <li class="nav-item">
            <a class="nav-link" href="/wallet/transfer">
                <span class="menu-title">Internal transfer</span>
                <i class="mdi mdi-transfer-right menu-icon"></i>
            </a>
        </li>

        <!-- fund wallet  -->

        <li class="nav-item">
            <a class="nav-link" href="/wallet/add_fund">
                <span class="menu-title">Add funds</span>
                <i class="mdi mdi-cash-usd menu-icon"></i>
            </a>
        </li>

        <!-- withdraw earnings  -->

        <li class="nav-item border-bottom">
            <a class="nav-link" href="/wallet/withdraw">
                <span class="menu-title">Withdraw</span>
                <i class="mdi mdi-cash-multiple menu-icon"></i>
            </a>
        </li>

        <!-- how it works  -->

        <li class="nav-item border-bottom">
            <a class="nav-link" href="/how-it-works">
                <span class="menu-title">How it works</span>
                <i class="mdi mdi-alert-circle menu-icon"></i>
            </a>
        </li>

        <!-- signout  -->

        <li class="nav-item border-bottom">
            <a class="nav-link" href="/sign-out">
                <span class="menu-title">Sign out</span>
                <i class="mdi mdi-logout-variant menu-icon"></i>
            </a>
        </li>
    </ul>
</nav>