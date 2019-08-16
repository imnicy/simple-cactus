<header id="header">
    <a href="/">
        <div id="logo" style="background-image: url(<?php
            if ($logo = get_theme_settings('site_logo')) :
                echo $logo;
            else :
                echo get_template_directory_uri() . '/images/logo.png';
            endif
        ?>);"></div>
        <div id="title">
            <?php if (is_404()) : ?>
                <h1>404 page not found</h1>
            <?php else : ?>
                <h1><?php bloginfo('name') ?></h1>
            <?php endif ?>
        </div>
    </a>
    <div id="nav"><?php wp_nav_menu(['items_wrap' => '<ul><li class="icon"><a href="#"><i class="fa fa-bars fa-2x"></i></a></li>%3$s</ul>']) ?></div>
</header>