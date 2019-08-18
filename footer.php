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
</div>

<?php wp_footer() ?>

<?php if (is_home()) : ?>

<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.9"></script>

<script>
    <?php
        $remoteQuotes = file_get_contents("compress.zlib://".'https://rest.shanbay.com/api/v2/quote/quotes/today/');
    ?>

    var typed_quote = <?php echo $remoteQuotes; ?>;

    var data = typed_quote.data;
    // var str =  data.content+'\n'
    // + data.translation+"\n---- "
    // +data.author +'\n'
    var str =  data.content+'\n'
        + data.translation+"\n---- "

    var options = {
        strings: [
            str + "Who??^1000",
            str + "It's me ^3000",
            str +'Haha, make a joke',
            str +data.author,
            // str+"Welcome to my blog. ^1000",
            // str+"Here you can learn the JavaScript",
            // str+"Here you can learn the Css",
        ],
        typeSpeed: 20,
        startDelay:300,
        // loop: true,
    }
    var typed = new Typed(".description .typed", options);

</script>

<?php endif ?>

<script async src="//busuanzi.ibruce.info/busuanzi/2.3/busuanzi.pure.mini.js"></script>

<script src="<?php echo get_template_directory_uri() . '/assets/js/main.js' ?>"></script>

</body>
</html>