<?php
    $siteName = get_bloginfo('name');
    $icpNumber = '<a href="http://www.miitbeian.gov.cn" rel="external nofollow noopener noreferrer" target="_blank">'.get_theme_settings('site_icp_number').'</a>';

    $customFooterText = (string) get_theme_settings('custom_footer_text_style', 'Copyright © %1$s %2$s ', false);
?>

<footer id="footer">
    <div class="footer-left">
        <?php echo sprintf($customFooterText, $siteName, $icpNumber) ?>
    </div>
    <div class="footer-right">
        <?php if (get_theme_settings('display_footer_menu')) : wp_nav_menu(); endif ?>
    </div>
</footer>

<script async src="https://busuanzi.ibruce.info/busuanzi/2.3/busuanzi.pure.mini.js"></script>

<?php wp_footer(); ?>

<script src="<?php echo get_template_directory_uri() . '/assets/js/main.js' ?>"></script>

</body>
</html>