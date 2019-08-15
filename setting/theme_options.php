<div>
    <div id="icon-themes"><br /></div>
    <h2>主题设置</h2>
    <form method="POST" action="">
        <input type="hidden" name="update_themeoptions" value="true" />
        <h4>主题配色方案</h4>
        <select name ="colour">
            <?php $colour = get_option('mytheme_colour'); ?>
            <option value="gray" <?php if ($colour=='gray') { echo 'selected'; } ?> >灰色</option>
            <option value="blue" <?php if ($colour=='blue') { echo 'selected'; } ?>>浅蓝</option>
            <option value="pink" <?php if ($colour=='pink') { echo 'selected'; } ?>>粉红</option>
        </select>
        <h4>图片广告位（1）</h4>
        <p><input type="text" name="ad1image" id="ad1image" size="32" value="<?php echo get_option('mytheme_ad1image'); ?>"/> 广告图片</p>
        <p><input type="text" name="ad1url" id="ad1url" size="32" value="<?php echo get_option('mytheme_ad1url'); ?>"/> 广告链接</p>
        <h4>图片广告位（2）</h4>
        <p><input type="text" name="ad2image" id="ad2image" size="32" value="<?php echo get_option('mytheme_ad2image'); ?>"/> 广告图片</p>
        <p><input type="text" name="ad2url" id="ad2url" size="32" value="<?php echo get_option('mytheme_ad2url'); ?>"/> 广告链接</p>
        <h4><input type="checkbox" name="display_search" id="display_search" <?php echo get_option('mytheme_display_search'); ?> /> 显示搜索框</h4><p><input type="submit" name="bcn_admin_options" value="更新数据"/></p>
    </form>
</div>