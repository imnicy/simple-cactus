
<div class="wrap">
    <h1><?php echo __( 'Theme Options', 'simple_cactus') ?></h1>

    <hr class="wp-header-end">

    <div id="message" class="updated">
        <p><?php echo __('If these options aren\'t free enough, tell me through <a href="https://github.com/imnicy/simple_cactus">Github</a>') ?></p>
    </div>

    <form method="post" action="options.php">

        <?php settings_fields('simple_cactus_theme') ?>

        <table class="form-table" role="presentation">
            <tbody>
            <tr>
                <th scope="row">
                    <label for="site_logo_url"><?php echo __('Site logo (URL)', 'simple_cactus') ?></label></th>
                <td>
                    <input name="<?php echo simple_cactus_option_name('site_logo_url') ?>" type="url" id="site_logo_url" value="<?php echo get_theme_settings('site_logo_url') ?>" class="regular-text"></td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="site_favicon_url"><?php echo __('Site favicon (URL)', 'simple_cactus') ?></label></th>
                <td>
                    <input name="<?php echo simple_cactus_option_name('site_favicon_url') ?>" type="url" id="site_favicon_url" aria-describedby="site_favicon_url_description" value="<?php echo get_theme_settings('site_favicon_url') ?>" class="regular-text">
                    <p class="description" id="site_favicon_url_description"></p>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="site_icp_number"><?php echo __('Site ICP number', 'simple_cactus') ?></label></th>
                <td>
                    <input name="<?php echo simple_cactus_option_name('site_icp_number') ?>" type="text" id="site_icp_number" value="<?php echo get_theme_settings('site_icp_number') ?>" class="regular-text code"></td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="find_me_through_github"><?php echo __('Find me through github?', 'simple_cactus') ?></label></th>
                <td>
                    <input name="<?php echo simple_cactus_option_name('find_me_through_github') ?>" type="url" id="find_me_through_github" aria-describedby="find_me_through_github_description" value="<?php echo get_theme_settings('find_me_through_github') ?>" class="regular-text code">
                    <p class="description" id="find_me_through_github_description">
                        <?php echo __('Display Github icon in homepage, Others can find you through it.', 'simple_cactus') ?>
                    </p></td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="custom_footer_text_style"><?php echo __('Custom footer text style', 'simple_cactus') ?></label></th>
                <td>
                    <input name="<?php echo simple_cactus_option_name('custom_footer_text_style') ?>" type="text" id="custom_footer_text_style" aria-describedby="custom_footer_text_style_description" value="<?php echo get_theme_settings('custom_footer_text_style') ?>" class="regular-text ltr">
                    <p class="description" id="custom_footer_text_style_description">
                        <?php echo __('Will use [sprintf] to repeat this text, the [site name] and [ICP number] is input.', 'simple_cactus') ?>
                        <strong><?php echo __('Support html code.', 'simple_cactus') ?></strong></p>
                </td>
            </tr>
            <tr>
                <th scope="row"><?php echo __('Some display options', 'simple_cactus') ?></th>
                <td>
                    <fieldset>
                        <legend class="screen-reader-text">
                            <span><?php echo __('Display Footer Menu?', 'simple_cactus') ?></span>
                        </legend>
                        <label for="display_footer_menu">
                            <input name="<?php echo simple_cactus_option_name('display_footer_menu') ?>" <?php echo theme_setting_is_checked('display_footer_menu') ?> type="checkbox" id="display_footer_menu" value="1"><?php echo __('Display footer menu?', 'simple_cactus') ?></label>
                    </fieldset>
                    <fieldset>
                        <legend class="screen-reader-text">
                            <span><?php echo __('Display links to this article in single?', 'simple_cactus') ?></span>
                        </legend>
                        <label for="display_links_to_this_article">
                            <input name="<?php echo simple_cactus_option_name('display_links_to_this_article') ?>" <?php echo theme_setting_is_checked('display_links_to_this_article') ?> type="checkbox" id="display_links_to_this_article" value="1"><?php echo __('Display links to this article in single?', 'simple_cactus') ?></label>
                    </fieldset>
                    <fieldset>
                        <legend class="screen-reader-text">
                            <span><?php echo __('Display categories in single?', 'simple_cactus') ?></span>
                        </legend>
                        <label for="display_categories">
                            <input name="<?php echo simple_cactus_option_name('display_categories') ?>" <?php echo theme_setting_is_checked('display_categories') ?> type="checkbox" id="display_categories" value="1"><?php echo __('Display categories in single?') ?></label>
                    </fieldset>
                    <fieldset>
                        <legend class="screen-reader-text">
                            <span><?php echo __('Display tags in single?', 'simple_cactus') ?></span>
                        </legend>
                        <label for="display_tags">
                            <input name="<?php echo simple_cactus_option_name('display_tags') ?>" <?php echo theme_setting_is_checked('display_tags') ?> type="checkbox" id="display_tags" value="1"><?php echo __('Display tags in single?', 'simple_cactus') ?></label>
                    </fieldset>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="enable_code_highlight"><?php echo __('Enable code highlighting', 'simple_cactus') ?></label></th>
                <td>
                    <fieldset>
                        <legend class="screen-reader-text">
                            <span><?php echo __('Enable code highlighting', 'simple_cactus') ?></span>
                        </legend>
                        <label for="enable_code_highlight">
                            <input name="<?php echo simple_cactus_option_name('enable_code_highlight') ?>" <?php echo theme_setting_is_checked('enable_code_highlight') ?> type="checkbox" id="enable_code_highlight" value="1"><?php echo __('Use Highlight.js to support code highlighting', 'simple_cactus') ?></label>
                    </fieldset>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="enable_code_line_number"><?php echo __('Enable code line number', 'simple_cactus') ?></label></th>
                <td>
                    <fieldset>
                        <legend class="screen-reader-text">
                            <span><?php echo __('Enable code line number', 'simple_cactus') ?></span>
                        </legend>
                        <label for="enable_code_line_number">
                            <input name="<?php echo simple_cactus_option_name('enable_code_line_number') ?>" <?php echo theme_setting_is_checked('enable_code_line_number') ?> type="checkbox" id="enable_code_line_number" value="1"><?php echo __('Use highlightjs-line-numbers.js to support display code line number. <strong>[Enable code highlight] must be turned on</strong>', 'simple_cactus') ?></label>
                    </fieldset>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="custom_code_highlight_style"><?php echo __('Custom code highlight style', 'simple_cactus') ?></label></th>
                <td>
                    <input name="<?php echo simple_cactus_option_name('custom_code_highlight_style') ?>" type="text" id="custom_code_highlight_style" aria-describedby="custom_code_highlight_style_description" value="<?php echo get_theme_settings('custom_code_highlight_style') ?>" class="regular-text ltr">
                    <p class="description" id="custom_code_highlight_style_description">
                        <?php echo __('You can fill in your custom Highlight.js style and get help through <a href="https://highlightjs.org/static/demo/">https://highlightjs.org/static/demo/</a>.', 'simple_cactus') ?> <br>
                        <?php echo __('<strong>You can keep it empty, and it will use the theme\'s own style.</strong>', 'simple_cactus') ?>
                    </p>
                </td>
            </tr>
            </tbody>
        </table>
        <p class="submit">
            <input type="submit" name="submit" id="submit" class="button button-primary" value="<?php echo __('Save Changes', 'simple_cactus') ?>"></p>
    </form>
</div>