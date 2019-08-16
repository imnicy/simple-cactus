
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
                    <label for="site_logo_url"><?php echo __('Site Logo (URL)', 'simple_cactus') ?></label></th>
                <td>
                    <input name="<?php echo simple_cactus_option_name('site_logo_url') ?>" type="url" id="site_logo_url" value="<?php echo get_theme_settings('site_logo_url') ?>" class="regular-text"></td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="site_favicon_url"><?php echo __('Site Favicon (URL)', 'simple_cactus') ?></label></th>
                <td>
                    <input name="<?php echo simple_cactus_option_name('site_favicon_url') ?>" type="url" id="site_favicon_url" aria-describedby="site_favicon_url_description" value="<?php echo get_theme_settings('site_favicon_url') ?>" class="regular-text">
                    <p class="description" id="site_favicon_url_description"></p>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="site_icp_number"><?php echo __('Site ICP Number', 'simple_cactus') ?></label></th>
                <td>
                    <input name="<?php echo simple_cactus_option_name('site_icp_number') ?>" type="text" id="site_icp_number" value="<?php echo get_theme_settings('site_icp_number') ?>" class="regular-text code"></td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="find_me_through_github"><?php echo __('Find me through Github?', 'simple_cactus') ?></label></th>
                <td>
                    <input name="<?php echo simple_cactus_option_name('find_me_through_github') ?>" type="url" id="find_me_through_github" aria-describedby="find_me_through_github_description" value="<?php echo get_theme_settings('find_me_through_github') ?>" class="regular-text code">
                    <p class="description" id="find_me_through_github_description">
                        <?php echo __('Display Github icon in homepage, Others can find you through it.') ?>
                    </p></td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="custom_footer_text_style"><?php echo __('Custom Footer Text Style') ?></label></th>
                <td>
                    <input name="<?php echo simple_cactus_option_name('custom_footer_text_style') ?>" type="text" id="custom_footer_text_style" aria-describedby="custom_footer_text_style_description" value="<?php echo get_theme_settings('custom_footer_text_style') ?>" class="regular-text ltr">
                    <p class="description" id="custom_footer_text_style_description">
                        <?php echo __('Will use [sprintf] to repeat this text, the [site name] and [ICP number] is input.') ?>
                        <strong><?php echo __('Support html code.', 'simple_cactus') ?></strong></p>
                </td>
            </tr>
            <tr>
                <th scope="row"><?php echo __('Some Display Options') ?></th>
                <td>
                    <fieldset>
                        <legend class="screen-reader-text">
                            <span><?php echo __('Display footer menu?') ?></span>
                        </legend>
                        <label for="display_footer_menu">
                            <input name="<?php echo simple_cactus_option_name('display_footer_menu') ?>" <?php echo theme_setting_is_checked('display_footer_menu') ?> type="checkbox" id="display_footer_menu" value="1"><?php echo __('Display footer menu?') ?></label>
                    </fieldset>
                    <fieldset>
                        <legend class="screen-reader-text">
                            <span><?php echo __('Display links to this article in single?') ?></span>
                        </legend>
                        <label for="display_links_to_this_article">
                            <input name="<?php echo simple_cactus_option_name('display_links_to_this_article') ?>" <?php echo theme_setting_is_checked('display_links_to_this_article') ?> type="checkbox" id="display_links_to_this_article" value="1"><?php echo __('Display links to this article in single?') ?></label>
                    </fieldset>
                    <fieldset>
                        <legend class="screen-reader-text">
                            <span><?php echo __('Display categories in single?') ?></span>
                        </legend>
                        <label for="display_categories">
                            <input name="<?php echo simple_cactus_option_name('display_categories') ?>" <?php echo theme_setting_is_checked('display_categories') ?> type="checkbox" id="display_categories" value="1"><?php echo __('Display categories in single?') ?></label>
                    </fieldset>
                    <fieldset>
                        <legend class="screen-reader-text">
                            <span><?php echo __('Display tags in single?') ?></span>
                        </legend>
                        <label for="display_tags">
                            <input name="<?php echo simple_cactus_option_name('display_tags') ?>" <?php echo theme_setting_is_checked('display_tags') ?> type="checkbox" id="display_tags" value="1"><?php echo __('Display tags in single?') ?></label>
                    </fieldset>
                    <fieldset>
                        <legend class="screen-reader-text">
                            <span><?php echo __('Display TOC in single?') ?></span>
                        </legend>
                        <label for="display_toc">
                            <input name="<?php echo simple_cactus_option_name('display_toc') ?>" <?php echo theme_setting_is_checked('display_toc') ?> type="checkbox" id="display_toc" value="1"><?php echo __('Display TOC in single?') ?></label>
                    </fieldset>
                </td>
            </tr>
            </tbody>
        </table>
        <p class="submit">
            <input type="submit" name="submit" id="submit" class="button button-primary" value="<?php echo __('Save Changes', 'simple_cactus') ?>"></p>
    </form>
</div>