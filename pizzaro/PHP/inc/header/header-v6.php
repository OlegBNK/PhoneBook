<header id="masthead" class="site-header header-v1"  style="background-image: none; ">
    <div class="col-full">

        <a class="skip-link screen-reader-text" href="#site-navigation">Skip to navigation</a>
        <a class="skip-link screen-reader-text" href="#content">Skip to content</a>

        <?php require_once 'inc/header/logo.php'; ?>

        <?php require_once 'inc/header/mini-cart.php'; ?>

        <?php require_once 'inc/menu/secondary-menu.php'; ?>

        <nav id="site-navigation" class="main-navigation"  aria-label="Primary Navigation">
            <button class="menu-toggle" aria-controls="site-navigation" aria-expanded="false"><span class="close-icon"><i class="po po-close-delete"></i></span><span class="menu-icon"><i class="po po-menu-icon"></i></span><span class=" screen-reader-text">Menu</span></button>

            <div class="primary-navigation">
                <ul id="menu-home-v6-main-menu" class="menu nav-menu" aria-expanded="false">
                    <li class="menu-item"><a href="index.php?page=about">About Us</a></li>
                    <li class="menu-item"><a href="index.php?page=contact">Contact</a></li>
                    <li class="menu-item"><a href="index.php?page=terms-and-conditions">Terms &amp; Conditions</a></li>
                </ul>
            </div>

            <?php require_once 'inc/menu/handheld-navigation.php'; ?>
        </nav><!-- #site-navigation -->

        <div class="footer-social-icons">
            <span class="social-icon-text">Follow us</span>
            <ul class="social-icons list-unstyled">
                <li><a class="fa fa-facebook" href="#"></a></li>
                <li><a class="fa fa-twitter" href="#"></a></li>
                <li><a class="fa fa-instagram" href="#"></a></li>
                <li><a class="fa fa-youtube" href="#"></a></li>
            </ul>
        </div>
        <div class="site-info">
            <p class="copyright">Copyright © 2017 Pizzaro Template. All rights reserved.</p>
        </div><!-- .site-info -->
    </div>
</header>
