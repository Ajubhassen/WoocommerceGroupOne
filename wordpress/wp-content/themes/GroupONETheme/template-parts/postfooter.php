<footer>
    <div class="footer-wrapper">
        <div class="footer-nav">
            <h3>Navigate</h3>
            <?php wp_nav_menu(array('theme_location' => "my-custom-menu")); ?>
        </div>
        <div class="footer-info">
            <h3>Information</h3>
            <a href="#">Privacy policy</a>
            <a href="#">Terms & Agreements</a>
            <a href="#">Affiliates</a>
        </div>
        <?php $site_title = get_bloginfo('name');
        $site_url = network_site_url('/') ?>
        <a href="<?php echo $site_url ?>" class="logo">
            <h3 class="logo-h3">
                <?php echo $site_title; ?>
            </h3>
        </a>
    </div>

</footer>