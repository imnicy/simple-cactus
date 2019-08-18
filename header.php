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
    <!-- so meta -->
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="HandheldFriendly" content="True">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <meta name="keywords" content="<?php echo $keywords ?>" />
    <meta name="description" content="<?php echo $description ?>" />

    <?php if ($favicon = get_theme_settings('site_favicon_url')) : ?>
        <link rel="shortcut icon" href="<?php echo $favicon ?>">
    <?php else : ?>
        <link rel="shortcut icon" href="<?php echo get_template_directory_uri() . '/images/favicon.ico' ?>">
    <?php endif ?>

    <!-- title -->
    <title><?php bloginfo('name'); ?> <?php wp_title( ' - ', true, 'left' ); ?></title>
    <!-- styles -->

    <link href="https://cdn.bootcss.com/font-awesome/5.10.0-12/css/all.min.css" rel="stylesheet">

    <?php
        switch (get_theme_settings('color_scheme')) {

            case 'dark':
                echo '<link href="'.get_template_directory_uri().'/assets/css/scheme-dark.css" rel="stylesheet">';
                break;

            case 'light':
                echo '<link href="'.get_template_directory_uri().'/assets/css/scheme-light.css" rel="stylesheet">';
                break;

            case 'classic':
                echo '<link href="'.get_template_directory_uri().'/assets/css/scheme-classic.css" rel="stylesheet">';
                break;

            default :
                echo '<link href="'.get_template_directory_uri().'/assets/css/scheme-white.css" rel="stylesheet">';
                break;
        }
    ?>

    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/style.css' ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/assets/css/rtl.css' ?>">

    <?php wp_head(); ?>
</head>

<body class="max-width mx-auto px3 ltr">
