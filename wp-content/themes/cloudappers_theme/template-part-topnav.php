<?php if (has_nav_menu('main_menu')) : ?>
<section class="top-header">
    <div class="container">
        <div class="row">
            <nav class="navbar navbar-inverse" role="navigation">
                <div class="container">
                    <div class="navbar-header">
                        <a class="logo-mob hidden-lg " href="<?php echo home_url(); ?>">
                            <img class="img-responsive" src="<?php echo get_stylesheet_directory_uri() . '/img/white-ca-icon@3x.svg'?>" alt="CloudAppers" />
                        </a>
                        <a class="logo-desk hidden-md hidden-sm hidden-xs" href="<?php echo home_url(); ?>">
                            <img src="<?php echo get_stylesheet_directory_uri() . '/img/CA-full-logo.png'  ?>" alt="CloudAppers" />
                            <img class="img-float" src="<?php echo get_stylesheet_directory_uri() . '/img/blue-CA-icon@3x.svg'  ?>" alt="CloudAppers" />
                        </a>

                        <button id="nav-toggle" type="button" class="navbar-toggle" data-toggle="collapse"
                                data-target=".navbar-1-collapse">
<!--                            <span class="sr-only">--><?php //_e('Toggle navigation', 'devdmbootstrap3'); ?><!--</span>-->
<!--                            <span class="icon-bar"></span>-->
<!--                            <span class="icon-bar"></span>-->
<!--                            <span class="icon-bar"></span>-->
                            <span></span>
                        </button>
                    </div>

                    <?php
                    wp_nav_menu([
                            'theme_location' => 'main_menu',
                            'depth' => 2,
                            'container' => 'div',
                            'container_class' => 'collapse navbar-collapse navbar-1-collapse',
                            'menu_class' => 'nav navbar-nav',
                            'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
                            'walker' => new wp_bootstrap_navwalker()]
                    );
                    ?>
                </div>
            </nav>
        </div>
    </div>
</section>
<?php endif; ?>