<?php get_header() ?>

    <div id="header-post">
        <a id="menu-icon" href="#">
            <i class="fas fa-bars fa-lg"></i>
        </a>
        <a id="menu-icon-tablet" href="#">
            <i class="fas fa-bars fa-lg"></i>
        </a>
        <a id="top-icon-tablet" href="#" onclick="$('html, body').animate({ scrollTop: 0 }, 'fast');" style="display:none;">
            <i class="fas fa-chevron-up fa-lg"></i>
        </a>
        <span id="menu">
            <span id="nav">
                <?php wp_nav_menu(['container' => '', 'items_wrap' => '<ul>%3$s</ul>']) ?>
            </span>
            <br/>
            <span id="actions">
                <ul>
                    <li>
                        <a class="icon"
                           href="#">
                            <i class="fas fa-chevron-right" aria-hidden="true" onmouseover="$('#i-next').toggle();"
                               onmouseout="$('#i-next').toggle();"></i>
                        </a>
                    </li>
                    <li>
                        <a class="icon" href="#" onclick="$('html, body').animate({ scrollTop: 0 }, 'fast');">
                            <i class="fas fa-chevron-up" aria-hidden="true" onmouseover="$('#i-top').toggle();"
                               onmouseout="$('#i-top').toggle();"></i>
                        </a>
                    </li>
                </ul>
                <span id="i-prev" class="info" style="display:none;">Previous post</span>
                <span id="i-next" class="info" style="display:none;">Next post</span>
                <span id="i-top" class="info" style="display:none;">Back to top</span>
            <br/>
            <div id="toc"></div>
        </span>
    </div>
    <div class="content index py4">
        <article class="post" itemscope itemtype="http://schema.org/BlogPosting">

            <?php get_template_part('tpl/single'); ?>

        </article>
        <div class="blog-post-comments">

            <?php
                // If comments are open or we have at least one comment, load up the comment template.
                if (comments_open() || get_comments_number()) {
                    comments_template();
                }
            ?>

        </div>
        <div id="footer-post-container">
            <div id="footer-post">
                <div id="nav-footer" style="display: none">

                    <?php wp_nav_menu() ?>

                </div>
                <div id="toc-footer" style="display: none"></div>
                <div id="actions-footer">
                    <a id="menu" class="icon" href="#" onclick="$('#nav-footer').toggle();return false;">
                        <i class="fas fa-bars fa-lg" aria-hidden="true"></i> Menu
                    </a>
                    <a id="toc-action" class="icon" href="#" onclick="$('#toc-footer').toggle();return false;">
                        <i class="fas fa-list fa-lg" aria-hidden="true"></i> TOC
                    </a>
                    <a id="top" style="display:none" class="icon" href="#" onclick="$('html, body').animate({ scrollTop: 0 }, 'fast');">
                        <i class="fas fa-chevron-up fa-lg" aria-hidden="true"></i> Top
                    </a>
                </div>
            </div>
        </div>

<?php get_footer() ?>
