<?php
    get_header();

    $archiveAll = [];
    if ( have_posts() ) {

        while (have_posts()) {

            the_post();

            $post = get_post();
            $year = date('Y', strtotime($post->post_date));

            if ($year) {
                $archiveAll[$year][] = $post;
            }
        }
    }
?>

    <div class="content index width mx-auto px3 my4">

        <?php get_template_part('tpl/header') ?>

        <div id="theme-tagcloud" class="tagcloud-wrap">

            <?php wp_tag_cloud() ?>

        </div>
        <section id="wrapper" class="home">
            <div class="archive">

                <?php foreach ($archiveAll as $year => $archives) : ?>

                <h3><?php echo $year; ?></h3>
                <ul class="post-list" id="post-list">

                    <?php foreach ($archives as $archive) : ?>
                    <li class="post-item">
                        <div class="meta">
                            <time datetime="<?php $dateFormat = date(get_option('date_format'), strtotime($archive->post_date)); echo $dateFormat ?>" itemprop="datePublished">
                                <?php echo $dateFormat ?>
                            </time>
                        </div>
                        <span>
                            <a href="<?php get_permalink($archive->ID) ?>"><?php echo $archive->post_title ?></a>
                        </span>
                    </li>
                    <?php endforeach ?>

                </ul>

                <?php endforeach ?>
            </div>
        </section>
    </div>

<?php
    get_sidebar();
    get_footer();
?>