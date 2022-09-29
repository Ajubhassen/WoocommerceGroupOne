<header>
    <?php $site_title = get_bloginfo('name'); $site_url = network_site_url('/')?>
        <a href="<?php echo $site_url ?>" class="logo">
            <h3 class="logo-h3">
                <?php echo $site_title; ?>
            </h3>
        </a>
        <?php wp_nav_menu(array('theme_location' => "my-custom-menu")); ?>
</header>