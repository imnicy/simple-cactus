<?php

    $founds = [
        'find_me_on_github'    => 'fab fa-github',
        'find_me_on_twitter'   => 'fab fa-twitter',
        'find_me_on_facebook'  => 'fab fa-facebook',
        'find_me_on_linkedin'  => 'fab fa-linkedin',
        'find_me_on_weibo'     => 'fab fa-weibo',
        'find_me_on_email'     => 'fas fa-envelope'
    ];

    $index = 1;
    $valid_founds = [];
    $found_string = '';

    foreach ($founds as $found => $icon) {

        if ($value = get_theme_settings($found)) {
            $valid_founds[$found] = $value;
        }
    }

    foreach ($founds as $found => $icon) {

        if ( $value = ($valid_founds[$found] ?? false) ) {

            if ($index == 1) {
                $found_string .= '';
            }
            else if ($index == count($valid_founds)) {
                $found_string .= ' and ';
            }
            else {
                $found_string .= ', ';
            }

            if ($found != 'find_me_on_email') {
                $href = $value;
            }
            else {
                $href = 'mailto:' . get_bloginfo('admin_email');
            }

            $found_string .= <<<EOM
                <a class="icon" target="_blank" href="$href">
                    <i class="$icon"></i>
                </a>
EOM;

            $index++;
        }
    }
?>

<?php get_header() ?>

    <div class="content index py4">

        <?php get_template_part('tpl/header') ?>

        <section id="about">

            <div class="description coding">
                <span class="typed prompt"></span>
            </div>
            <p style="display: inline">

            <p><span>
                <i class="fa fa-eye"></i>
                <span id="busuanzi_container_site_pv">
                    <span id="busuanzi_value_site_pv">0</span>
                </span>
            </span>

            <?php if ($valid_founds) : ?>
                | Find me on <?php echo $found_string ?>
            <?php endif ?>

            </p>
        </section>

        <section id="writing">
            <span class="h1">
                <a href="<?php echo get_year_link(null) ?>">Writing</a>
            </span>
            <ul class="post-list">

                <?php get_template_part('tpl/content', get_post_format()); ?>

            </ul>
        </section>

        <ul id="homepage-block">

            <?php if ( dynamic_sidebar('homepage_block') ) : else : endif; ?>

        </ul>

<?php get_footer() ?>
