<?php
    get_header();
?>

    <div class="content index width mx-auto px3 my3">

        <?php get_template_part('tpl/header') ?>

        <section id="wrapper" class="home">

            <?php get_template_part('tpl/single') ?>

        </section>
    </div>

<?php
    get_sidebar();
    get_footer();
?>