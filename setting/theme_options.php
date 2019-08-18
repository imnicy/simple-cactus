
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
                <th scope="row"><?php echo __('Color scheme', 'simple_cactus') ?></th>
                <td>
                    <fieldset>
                        <legend class="screen-reader-text"><span><?php echo __('Color scheme', 'simple_cactus') ?></span></legend>
                        <label>
                            <input type="radio" name="<?php echo simple_cactus_option_name('color_scheme') ?>" <?php echo theme_setting_is_checked('color_scheme', 'dark') ?> value="dark">
                            <span class="format-i18n" style="display:inline-block; min-width: 10em;">Dark</span><code style="background-color: #1d1f21; min-width: 2em; display: inline-block; height: 1em"></code>
                        </label><br>
                        <label>
                            <input type="radio" name="<?php echo simple_cactus_option_name('color_scheme') ?>" <?php echo theme_setting_is_checked('color_scheme', 'white') ?> value="white">
                            <span class="format-i18n" style="display:inline-block; min-width: 10em;">White</span><code style="background-color: #ffffff; min-width: 2em; display: inline-block; height: 1em"></code>
                        </label><br>
                        <label>
                            <input type="radio" name="<?php echo simple_cactus_option_name('color_scheme') ?>" <?php echo theme_setting_is_checked('color_scheme', 'light') ?> value="light">
                            <span class="format-i18n" style="display:inline-block; min-width: 10em;">Light</span><code style="background-color: #e2e0de; min-width: 2em; display: inline-block; height: 1em"></code>
                        </label><br>
                        <label>
                            <input type="radio" name="<?php echo simple_cactus_option_name('color_scheme') ?>" <?php echo theme_setting_is_checked('color_scheme', 'classic') ?> value="classic">
                            <span class="format-i18n" style="display:inline-block; min-width: 10em;">Classic</span><code style="background-color: #fafafa; min-width: 2em; display: inline-block; height: 1em"></code>
                        </label><br>
                    </fieldset>
                </td>
            </tr>
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
                    <label for="find_me_on_github"><?php echo __('Find me on', 'simple_cactus') ?></label></th>
                <td>
                    <input name="<?php echo simple_cactus_option_name('find_me_on_github') ?>" type="url" id="find_me_on_github" aria-describedby="find_me_on_github_description" value="<?php echo get_theme_settings('find_me_on_github') ?>" class="regular-text code">
                    <span> Github</span> <br>

                    <input name="<?php echo simple_cactus_option_name('find_me_on_twitter') ?>" type="url" id="find_me_on_twitter" aria-describedby="find_me_on_twitter_description" value="<?php echo get_theme_settings('find_me_on_twitter') ?>" class="regular-text code">
                    <span> Twitter</span> <br>

                    <input name="<?php echo simple_cactus_option_name('find_me_on_facebook') ?>" type="url" id="find_me_on_facebook" aria-describedby="find_me_on_facebook_description" value="<?php echo get_theme_settings('find_me_on_facebook') ?>" class="regular-text code">
                    <span> Facebook</span> <br>

                    <input name="<?php echo simple_cactus_option_name('find_me_on_linkedin') ?>" type="url" id="find_me_on_linkedin" aria-describedby="find_me_on_linkedinhub_description" value="<?php echo get_theme_settings('find_me_on_linkedin') ?>" class="regular-text code">
                    <span> LinkedIn</span> <br>

                    <input name="<?php echo simple_cactus_option_name('find_me_on_weibo') ?>" type="url" id="find_me_on_weibo" aria-describedby="find_me_on_weibo_description" value="<?php echo get_theme_settings('find_me_on_weibo') ?>" class="regular-text code">
                    <span> Weibo</span> <br> <br>

                    <fieldset>
                        <legend class="screen-reader-text">
                            <span><?php echo __('Find me on email?', 'simple_cactus') ?></span>
                        </legend>
                        <label for="find_me_on_email">
                           And <input name="<?php echo simple_cactus_option_name('find_me_on_email') ?>" <?php echo theme_setting_is_checked('find_me_on_email') ?> type="checkbox" id="find_me_on_email" value="1"><?php echo __('Find me on email? (use general settings email address)', 'simple_cactus') ?></label>
                    </fieldset> <br>

                    <p class="description" id="find_me_on_github_description">
                        <?php echo __('Display some optional icon in homepage, Others can find you through it.', 'simple_cactus') ?>
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
            </tbody>
        </table>
        <p class="submit">
            <input type="submit" name="submit" id="submit" class="button button-primary" value="<?php echo __('Save Changes', 'simple_cactus') ?>"></p>
    </form>
</div>