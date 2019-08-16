<?php
if (is_home()) {
    $description = get_bloginfo('description');
    $keywords = '';
}
else if (is_404()) {
    $description = '404 page not found';
    $keywords = '404, not found';
}
else {
    if ($post->post_excerpt) {
        $description = $post->post_excerpt;
    } else {
        $description = substr(strip_tags($post->post_content),0,100);
    }
    $keywords = "";
    $tags = wp_get_post_tags($post->ID);
    foreach ($tags as $tag ) {
        $keywords = $keywords . $tag->name . ", ";
    }
}
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="HandheldFriendly" content="True">
    <meta name="viewport" content="initial-scale=1,width=device-width,minimum-scale=1,maximum-scale=1,user-scalable=no">
    <meta name="wap-font-scale" content="no">
    <meta http-equiv="Cache-Control" content="no-transform"/>
    <meta http-equiv="Cache-Control" content="no-siteapp"/>
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="google" content="notranslate" />
    <title><?php bloginfo('name'); ?> <?php wp_title( ' - ', true, 'left' ); ?></title>

    <?php if ($favicon = get_theme_settings('site_favicon_url')) : ?>
        <link rel="shortcut icon" href="<?php echo $favicon ?>">
    <?php else : ?>
        <link rel="shortcut icon" href="<?php echo get_template_directory_uri() . '/images/favicon.ico' ?>">
    <?php endif ?>

    <meta name="keywords" content="<?php echo $keywords ?>" />
    <meta name="description" content="<?php echo $description ?>" />
    <meta name="author" content="IMNICY">

    <link href="//cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="//cdn.bootcss.com/justifiedGallery/3.7.0/css/justifiedGallery.min.css" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/style.css' ?>">

    <script>
        document.addEventListener("error", function(e) {
            var elem = e.target;
            if (elem.tagName.toLowerCase() == 'img') {
                elem.style.display = 'none'
            }
        }, true);
    </script>

    <?php wp_head(); ?>
</head>
<body>