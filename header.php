<!-- Offcanvas Menu Section Begin -->
<div class="offcanvas-menu-overlay"></div>
<div class="offcanvas-menu-wrapper">
    <div class="canvas-close">
        <i class="fa fa-close"></i>
    </div>
    <div class="canvas-search search-switch">
        <i class="fa fa-search"></i>
    </div>
    <nav class="canvas-menu mobile-menu">
        <ul>
            <li><a href="index.php" class="<?php if (basename($_SERVER['PHP_SELF']) == 'index.php') echo 'active'; ?>">Home</a></li>
            <li><a href="about-us.php" class="<?php if (basename($_SERVER['PHP_SELF']) == 'about-us.php') echo 'active'; ?>">About Us</a></li>
            <li><a href="services.php" class="<?php if (basename($_SERVER['PHP_SELF']) == 'services.php') echo 'active'; ?>">Services</a></li>
            <li><a href="contact.php" class="<?php if (basename($_SERVER['PHP_SELF']) == 'contact.php') echo 'active'; ?>">Contact</a></li>
        </ul>
    </nav>
    <div id="mobile-menu-wrap"></div>
    <div class="canvas-social">
        <a><i class="fa fa-facebook"></i></a>
        <a><i class="fa fa-twitter"></i></a>
        <a><i class="fa fa-youtube-play"></i></a>
        <a><i class="fa fa-instagram"></i></a>
    </div>
</div>
<!-- Offcanvas Menu Section End -->

<!-- Header Section Begin -->
<header class="header-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3">
                <div class="logo">
                    <a href="index.php">
                        <img src="img/logo.png" alt="Fitness Gym Logo">
                    </a>
                </div>
            </div>
            <div class="col-lg-6">
                <nav class="nav-menu">
                    <ul>
                        <li class="<?php if (basename($_SERVER['PHP_SELF']) == 'index.php') echo 'active'; ?>"><a href="index.php">Home</a></li>
                        <li class="<?php if (basename($_SERVER['PHP_SELF']) == 'about-us.php') echo 'active'; ?>"><a href="about-us.php">About Us</a></li>
                        <li class="<?php if (basename($_SERVER['PHP_SELF']) == 'services.php') echo 'active'; ?>"><a href="services.php">Services</a></li>
                        <li class="<?php if (basename($_SERVER['PHP_SELF']) == 'contact.php') echo 'active'; ?>"><a href="contact.php">Contact</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-3">
                <div class="top-option">
                    <div class="to-social">
                        <a><i class="fa fa-facebook"></i></a>
                        <a><i class="fa fa-twitter"></i></a>
                        <a><i class="fa fa-youtube-play"></i></a>
                        <a><i class="fa fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="canvas-open">
            <i class="fa fa-bars"></i>
        </div>
    </div>
</header>
<!-- Header End -->
