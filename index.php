<?php
    get_header();
?>

<div class="content index width mx-auto px3 my4">

    <?php get_template_part('tpl/header') ?>

    <section id="wrapper" class="home">
        <section id="about">
            <div class="description coding">
                <span class="typed prompt"></span>
            </div>
            <p style="display: inline">
            <span>
                <i class="fa fa-eye"></i>
                <span id="busuanzi_container_site_pv">
                    <span id="busuanzi_value_site_pv">0</span>
                </span>
            </span>| Find me on</p>
            <ul id="sociallinks">
                <li>
                    <a class="icon" target="_blank" href="http://github.com/Fantasy9527" title="github">
                        <i class="fa fa-github"></i>
                    </a>
                </li>
            </ul>.
            <p></p>
            <p class="prompt ad-text output new-output">p.s. 网站已经支持PWA,可尝试添加到桌面</p>
        </section>

        <section id="writing">
            <span class="h1"><a href="<?php echo get_year_link(null) ?>">Archives</a></span>
            <ul class="post-list" id="post-list">

                <?php get_template_part('tpl/content', get_post_format()); ?>

            </ul>
        </section>

        <?php if ( dynamic_sidebar('homepage_block') ) : else : endif; ?>

    </section>
</div>

<script type="text/javascript" src="https://cdn.bootcss.com/typed.js/2.0.5/typed.js"></script>
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

<?php
    get_sidebar();
    get_footer();
?>