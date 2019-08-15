<?php if ( have_posts() ) : ?>
    <?php while(have_posts()) :  the_post(); ?>
    <li class="post-item">
        <div class="meta">
            <time datetime="<?php the_time('F j, Y') ?>" itemprop="datePublished"><?php the_time('F j, Y') ?></time>
        </div>
        <span><a href="<?php the_permalink() ?>"><?php the_title() ?></a></span>
    </li>
    <?php endwhile ?>
<?php endif ?>