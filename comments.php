<?php

if ( post_password_required() ) {
    return;
}
?>

<div id="comments" class="comments-area">

    <?php comment_form(); ?>

    <?php if ( have_comments() ) : ?>

        <h2 class="comments-title">
            <?php

            if ( 1 === get_comments_number() ) {
                printf(
                /* translators: %s: The post title. */
                    __( 'One thought comment', 'twentytwelve' ),
                    '<span>' . get_the_title() . '</span>'
                );
            } else {
                printf(
                /* translators: %1$s: The number of comments. %2$s: The post title. */
                    _n( '%1$s thought comment', '%1$s thoughts comments', get_comments_number(), 'twentytwelve' ),
                    number_format_i18n( get_comments_number() ),
                    '<span>' . get_the_title() . '</span>'
                );
            }

            ?>
        </h2>

        <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
            <nav id="comment-nav-above" class="navigation comment-navigation" role="navigation">
                <h1 class="screen-reader-text"><?php _e( 'Comment navigation', 'twentyfourteen' ); ?></h1>
                <div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'twentyfourteen' ) ); ?></div>
                <div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'twentyfourteen' ) ); ?></div>
            </nav><!-- #comment-nav-above -->
        <?php endif; // Check for comment navigation. ?>

        <ol class="comment-list">
            <?php
            wp_list_comments(
                array(
                    'style'       => 'ol',
                    'short_ping'  => true,
                    'avatar_size' => 34,
                )
            );
            ?>
        </ol><!-- .comment-list -->

        <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
            <nav id="comment-nav-below" class="navigation comment-navigation" role="navigation">
                <h1 class="screen-reader-text"><?php _e( 'Comment navigation', 'twentyfourteen' ); ?></h1>
                <div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'twentyfourteen' ) ); ?></div>
                <div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'twentyfourteen' ) ); ?></div>
            </nav><!-- #comment-nav-below -->
        <?php endif; // Check for comment navigation. ?>

        <?php if ( ! comments_open() ) : ?>
            <p class="no-comments"><?php _e( 'Comments are closed.', 'twentyfourteen' ); ?></p>
        <?php endif; ?>

    <?php endif; // have_comments() ?>

</div><!-- #comments -->
