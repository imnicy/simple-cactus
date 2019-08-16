<?php
    get_header();
?>

    <div class="content index width mx-auto px3 my3">

        <?php get_template_part('tpl/header') ?>

        <section id="wrapper" class="home">

            <?php
                get_template_part('tpl/single') ;

                // If comments are open or we have at least one comment, load up the comment template.
                if ( get_theme_settings('page_allow_comments') && (comments_open() || get_comments_number()) ) {
                    comments_template();
                }
            ?>

        </section>
    </div>

<?php
    get_sidebar();
    get_footer();
?>