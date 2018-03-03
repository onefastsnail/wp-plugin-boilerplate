<div class="wrap">
    <h1><?php echo $settings['title']; ?></h1>

    <form method="post" action="options.php">
        <?php settings_fields($settings['group']); ?>
        <?php do_settings_sections($settings['group']); ?>

        <?php foreach($settings['fields'] as $k => $v): ?>
        <table class="form-table">
            <tr valign="top">
            <th scope="row"><?php echo $k; ?></th>
            <td><input type="<?php echo $v['type']; ?>" name="<?php echo $v['field']; ?>" value="<?php echo esc_attr( get_option($v['field']) ); ?>" <?php echo (!empty($v['required']))? 'required' : ''; ?>/></td>
            </tr>
        </table>
        <?php endforeach; ?>

        <?php submit_button(); ?>

    </form>
</div>
