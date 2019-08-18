<?php if ( have_posts() ) : ?>
    <?php while(have_posts()) :  the_post(); ?>

    <li class="post-item">
        <div class="meta">
            <time datetime="<?php the_time(get_option('date_format')) ?>" itemprop="datePublished"><?php the_time(get_option('date_format')) ?></time>
        </div>
        <span><a href="<?php the_permalink() ?>"><?php the_title() ?></a></span>
    </li>

    <?php endwhile ?>
<?php endif ?>