<?php

class BlockWidget extends WP_Widget
{
    public function __construct()
    {
        $options = [
            'classname' => 'BlockWidget',
            'description' => 'Homepage block display'
        ];

        parent::__construct('block_widget', 'Homepage block', $options);
    }

    public function form($instance)
    {
        $title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( 'Projects', 'simple_cactus' );
        $content = ! empty($instance['content']) ? $instance['content'] : '';
        $customHtmlContent = ! empty($instance['custom_html_content']) ? $instance['custom_html_content'] : '';

        ?>
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_attr_e( 'Title:', 'simple_cactus' ); ?></label>
            <input
                    class="widefat"
                    id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"
                    name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>"
                    type="text"
                    value="<?php echo esc_attr( $title ); ?>">
        </p>
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'content' ) ); ?>"><?php esc_attr_e( 'Content:', 'simple_cactus' ); ?></label>
            <textarea
                    class="widefat"
                    id="<?php echo esc_attr( $this->get_field_id( 'content' ) ); ?>"
                    name="<?php echo esc_attr( $this->get_field_name( 'content' ) ); ?>"><?php echo esc_attr( $content ); ?></textarea>
            <span class="description-wide">
                <?php echo __('
                    These will be displayed as a list, Line by line.
                    Example: <br>
                    <font color="#8b0000">name|url|My name description</font> <br>
                    Will display: <br>
                    <a href="#">name</a> My name description
                ') ?>
            </span>
        </p>
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'custom_html_content' ) ); ?>"><?php esc_attr_e( 'Custom html content:', 'simple_cactus' ); ?></label>
            <textarea
                    class="widefat"
                    id="<?php echo esc_attr( $this->get_field_id( 'custom_html_content' ) ); ?>"
                    name="<?php echo esc_attr( $this->get_field_name( 'custom_html_content' ) ); ?>"><?php echo $customHtmlContent; ?></textarea>
            <span class="description-wide">
                <?php echo __('If [custom html content] has any value, [content] will be discarded.') ?>
            </span>
        </p>
        <?php
    }

    public function update($new_instance, $old_instance)
    {
        $instance = [];

        $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? sanitize_text_field( $new_instance['title'] ) : '';
        $instance['content'] = ( ! empty( $new_instance['content'] ) ) ? $new_instance['content'] : '';
        $instance['custom_html_content'] = ( ! empty( $new_instance['custom_html_content'] ) ) ? $new_instance['custom_html_content'] : '';

        return $instance;
    }

    public function widget($args, $instance)
    {
        $title = $instance['title'] ?? '';
        $content = $instance['content'] ?? '';
        $customHtmlContent = $instance['custom_html_content'] ?? '';

        $display = '';

        if ($customHtmlContent) {

            $display = $customHtmlContent;
        }
        else if ($content) {

            $display .= '<ul class="project-list">';

            $lines = explode(PHP_EOL, $content);
            foreach ($lines as $line) {

                if (! strstr(sanitize_text_field($line), '|')) {
                    continue;
                }

                list($name, $url, $description, ) = explode('|', $line);

                $display .= <<<EOL
                    <li class="project-item">
                        <a href="$url" rel="external nofollow noopener noreferrer" target="_blank">$name</a>: $description
                    </li>
EOL;
            }

            $display .= '</ul>';
        }

        $template = <<<EOT
            <li class="homepage-block-display-n">
                <section id="projects">
                    <span class="h1">
                        <a href="#" rel="external nofollow noopener noreferrer">$title</a>
                    </span>
                    $display
                </section>
            </li>
EOT;

        echo $template;
    }
}