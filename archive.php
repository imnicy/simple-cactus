<?php get_header() ?>

    <div class="content index width mx-auto px3 my4">

        <?php get_template_part('tpl/header') ?>

        <div id="theme-tagcloud" class="tagcloud-wrap">

            <?php wp_tag_cloud() ?>

        </div>
        <section id="wrapper" class="home">
            <div class="archive">
                <ul class="post-list" id="post-list">

                    <?php get_template_part('tpl/content', get_post_format()); ?>

                </ul>
            </div>
        </section>

<?php get_footer() ?>