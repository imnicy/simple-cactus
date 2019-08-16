<?php if ( have_posts() ) : the_post() ?>

<article class="post" itemscope itemtype="http://schema.org/BlogPosting">
    <header>
        <h1 class="posttitle" itemprop="name headline"><?php the_title() ?></h1>

        <?php if (is_single()) : ?>

        <div class="meta">
            <div class="postdate">
                <time datetime="<?php the_time(get_option('date_format')) ?>" itemprop="datePublished"><?php the_time(get_option('date_format')) ?></time>
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

<?php if (get_theme_settings('enable_code_highlight')) : ?>

    <?php if ($style = get_theme_settings('custom_code_highlight_style')) : ?>
        <link rel="stylesheet" href="//cdn.jsdelivr.net/gh/highlightjs/cdn-release@9.15.9/build/styles/<?php echo $style ?>.min.css">
    <?php endif ?>

    <script src="//cdn.jsdelivr.net/gh/highlightjs/cdn-release@9.15.9/build/highlight.min.js"></script>

    <?php if (get_theme_settings('enable_code_line_number')) : ?>
        <script src="//cdn.jsdelivr.net/npm/highlightjs-line-numbers.js@2.7.0/dist/highlightjs-line-numbers.min.js"></script>
    <?php endif ?>

    <script>
        hljs.initHighlightingOnLoad();

        <?php if (get_theme_settings('enable_code_line_number')) : ?>
            hljs.initLineNumbersOnLoad();
        <?php endif ?>

    </script>
<?php endif ?>

<?php endif ?>