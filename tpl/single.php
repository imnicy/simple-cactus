<?php if ( have_posts() ) : the_post() ?>

    <header>
        <h1 class="posttitle" itemprop="name headline"><?php the_title() ?></h1>

        <?php if (is_single()) : ?>

        <div class="meta">
            <div class="postdate">
                <time datetime="<?php the_time(get_option('date_format')) ?>" itemprop="datePublished"><?php the_time(get_option('date_format')) ?></time>
            </div>
            <div class="article-count">
                <i class="fa fa-eye"></i>
                <span id="busuanzi_container_page_pv"><span id="busuanzi_value_page_pv">0</span></span>
            </div>

            <?php if ( get_the_tags() ) : ?>

            <div class="article-tag">
                <i class="fas fa-tag"></i>

                <?php the_tags(' #', ', #'); ?>

            </div>

            <?php endif ?>

        </div>

        <?php endif ?>

    </header>
    <div class="content" itemprop="articleBody">

        <?php the_content() ?>

        <?php if (is_single()) : ?>

            <?php if (get_theme_settings('display_links_to_this_article')) : ?>

                <h2>本文链接</h2>
                <p><a href="<?php the_permalink() ?>" target="_blank"><?php the_permalink() ?></a></p>

            <?php endif ?>

            <?php if (get_theme_settings('display_categories')) : ?>

                <h2>本文发布在</h2>
                <?php the_category() ?>

            <?php endif ?>

        <?php endif ?>

    </div>

<?php endif ?>