<?php
    get_header();
?>

<div class="content index width mx-auto px3 my4">

    <?php get_template_part('tpl/header') ?>

    <style>
        @-webkit-keyframes cursor-blink {
            0% {
                opacity: 0
            }

            50% {
                opacity: 1
            }

            100% {
                opacity: 0
            }
        }

        @-moz-keyframes cursor-blink {
            0% {
                opacity: 0
            }

            50% {
                opacity: 1
            }

            100% {
                opacity: 0
            }
        }

        @keyframes cursor-blink {
            0% {
                opacity: 0
            }

            50% {
                opacity: 1
            }

            100% {
                opacity: 0
            }
        }

        .terminal {
            position: relative
        }

        .terminal .prompt {
            color: #2bbc8a;
            display: block;
            font-family: AndaleMono,monospace;
            font-weight: 700;
            text-transform: uppercase;
            font-size: 12px;
            letter-spacing: .1em;
            white-space: pre-wrap;
            text-shadow: 0 0 2px rgba(31,240,66,.75);
            line-height: 1;
            margin-bottom: .75em
        }

        @media only screen and (max-width: 641px) {
            .terminal .prompt {
                font-size:.6em
            }
        }

        .terminal .prompt:before {
            content: '> ';
            display: inline-block
        }

        .terminal .new-output {
            display: inline-block
        }

        .terminal .new-output:after {
            display: inline-block;
            vertical-align: -.15em;
            width: .75em;
            height: 1em;
            margin-left: 5px;
            background: #2bbc8a;
            box-shadow: 1px 1px 1px rgba(31,240,66,.65),-1px -1px 1px rgba(31,240,66,.65),1px -1px 1px rgba(31,240,66,.65),-1px 1px 1px rgba(31,240,66,.65);
            -webkit-animation: cursor-blink 1.25s steps(1) infinite;
            -o-animation: cursor-blink 1.25s steps(1) infinite;
            animation: cursor-blink 1.25s steps(1) infinite;
            content: ''
        }
    </style>

    <section id="wrapper" class="home">
        <article class="post">
            <div class="terminal padded">
                <p class="prompt">link is dead.</p>
                <p class="prompt output new-output">这不是404页面,这是我给你留的彩蛋!</p></div>
        </article>
    </section>
</div>

<?php
    get_sidebar();
    get_footer();
?>