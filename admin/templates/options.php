<div style="background-color:#fff;border:2px solid #ccc;padding:10px;margin-top:20px;">
    <form method="POST" action="#">
        <label>dFlip Config for Newspaper: <select name="dflip_value">
            <?php foreach($dFlipConfigs as $config) { ?>
                <option <?php if($config->ID == $currentDFlipConfigId) echo 'selected'; ?> value="<?php echo $config->ID; ?>"><?php echo $config->post_title; ?></option>
            <?php } ?>
        </select></label>
        <?php if(!empty($mediaFolders)) { ?>
        <br/>
        <br/>
        <?php if (!is_wp_error($mediaFolders)) { ?>
        <label>Media Folder Term assign: <select name="mediafolder">
            <?php foreach($mediaFolders as $folder) { ?>
                <option <?php if($folder->term_id == $currentMediaFolderId) echo 'selected'; ?> value="<?php echo $folder->term_id; ?>"><?php echo $folder->name; ?></option>
            <?php } ?>
        </select></label>
        <?php } else { ?>
            <p>If you install Media Folder Plugin, you can insert uploaded Documents into a folder</p>
        <?php } ?>
        <?php } ?>
        <br/>
        <br/>
        <input type="submit" name="submit" class="button button-primary" value="Speichern" />
    </form>
    <hr>

    <h3>Documentation</h3>
    <p><strong>To show all available PDF add</strong></p>
    <pre>[newspaper_archive]</pre> shortcode to a page.<br>
    
    <p><strong>To show latest available PDF add the following shortcode to a page:</strong></p>
    <pre>[newspaper_single]</pre> or to define the width of preview <pre>[newspaper_single width=400]</pre>
     <br>

    The latest PDF will automatically set into the selected dFlip configuration.
    <hr>
    <small>Powered by <a href="https://gitlab.com/warnat-wordpress/plugin/sw-newspaper" target="_blank">sw-newspaper</a> Plugin from <a target="_blank" href="https://stefanwarnat.de">Stefan Warnat</a></small>

</div>