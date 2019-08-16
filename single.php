<?php
    get_header();
?>
    <div id="header-post">
        <a id="menu-icon" href="#">
            <i class="fa fa-bars fa-lg"></i>
        </a>
        <a id="menu-icon-tablet" href="#">
            <i class="fa fa-bars fa-lg"></i>
        </a>
        <a id="top-icon-tablet" href="#" onclick="$('html, body').animate({ scrollTop: 0 }, 'fast');">
            <i class="fa fa-chevron-up fa-lg"></i>
        </a>
        <span id="menu">
                <span id="nav">
                    <?php wp_nav_menu() ?>
                </span>
                <br>
                <span id="actions">
                    <ul>
                        <li>
                            <a class="icon" href="#">
                                <i class="fa fa-chevron-left" aria-hidden="true" onmouseover='$("#i-prev").toggle();'
                                   onmouseout='$("#i-prev").toggle();'></i>
                            </a>
                        </li>
                        <li>
                            <a class="icon" href="#">
                                <i class="fa fa-chevron-right" aria-hidden="true" onmouseover='$("#i-next").toggle();'
                                   onmouseout='$("#i-next").toggle();'></i>
                            </a>
                        </li>
                        <li>
                            <a class="icon" href="#" onclick="$('html, body').animate({ scrollTop: 0 }, 'fast');">
                                <i class="fa fa-chevron-up" aria-hidden="true" onmouseover='$("#i-top").toggle();'
                                   onmouseout='$("#i-top").toggle();'></i>
                            </a>
                        </li>
                    </ul>
                    <span id="i-prev" class="info" style="display:none;">Previous post</span>
                    <span id="i-next" class="info" style="display:none;">Next post</span>
                    <span id="i-top" class="info" style="display:none;">Back to top</span>
                </span>
                <br>
                <?php if (get_theme_settings('display_toc')) : ?>

                <div id="toc">
                    <nav id="TableOfContents">
                        <ul></ul>
                    </nav>
                </div>

                <?php endif ?>
            </span>
    </div>
    <div class="content index width mx-auto px3 my3">
        <section id="wrapper" class="home">

            <?php

                get_template_part('tpl/single');

                // If comments are open or we have at least one comment, load up the comment template.
                if ( comments_open() || get_comments_number() ) {
                    comments_template();
                }
            ?>
        </section>
    </div>

<?php
    get_sidebar();
    get_footer();
?>