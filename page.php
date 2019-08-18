<?php get_header() ?>

    <div class="content index py4">

        <?php get_template_part('tpl/header') ?>

        <article class="post" itemscope itemtype="http://schema.org/BlogPosting">

            <?php get_template_part('tpl/single') ?>

        </article>

        <div class="blog-post-comments">

            <?php
            // If comments are open or we have at least one comment, load up the comment template.
            if (comments_open() || get_comments_number()) {
                comments_template();
            }
            ?>

        </div>

<?php get_footer() ?>