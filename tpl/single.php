<?php if ( have_posts() ) : the_post() ?>

<article class="post" itemscope itemtype="http://schema.org/BlogPosting">
    <header>
        <h1 class="posttitle" itemprop="name headline"><?php the_title() ?></h1>

        <?php if (is_single()) : ?>
        <div class="meta">
            <div class="postdate">
                <time datetime="<?php the_time('F j, Y') ?>" itemprop="datePublished"><?php the_time('F j, Y') ?></time>
            </div>
            <div class="article-tag">
                <i class="fa fa-eye"></i>
                <span id="busuanzi_container_page_pv"><span id="busuanzi_value_page_pv">0</span></span>
            </div>

            <?php if ( get_theme_settings('display_tags') && get_the_tags() ) : ?>

            <div class="article-tag">
                    <i class="fa fa-tag"></i>&nbsp;

                    <?php the_tags(' ', ', &nbsp;') ?>

                <div class="article-tag-box"></div>
            </div>

            <?php endif ?>
        </div>

        <?php endif ?>

    </header>
    <div class="content" itemprop="articleBody">

        <?php the_content() ?>

        <?php if (is_single()) : ?>

            <?php if (get_theme_settings('display_links_to_this_article')) : ?>

                <h2>本文链接：</h2>
                <a href="<?php the_permalink() ?>" target="_blank"><?php the_permalink() ?></a>

            <?php endif ?>

            <?php if (get_theme_settings('display_categories')) : ?>

                <h2>本文发布在：</h2>
                <?php the_category() ?>

            <?php endif ?>

        <?php endif ?>
    </div>
</article>

<?php endif ?>